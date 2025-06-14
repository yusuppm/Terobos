<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of news
     */
    public function index(Request $request)
    {
        $query = News::latest('tanggal');
        
        // Filter by category if provided
        if ($request->has('kategori') && $request->kategori != '') {
            $query->where('kategory', $request->kategori);
        }
        
        // Search functionality
        if ($request->has('search') && $request->search != '') {
            $query->where(function($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('description', 'like', '%' . $request->search . '%')
                  ->orWhere('ditulis_oleh', 'like', '%' . $request->search . '%');
            });
        }
        
        $news = $query->paginate(12);
        
        // Get categories for filter
        $categories = News::distinct()->pluck('kategory')->filter();
        
        return view('news.index', compact('news', 'categories'));
    }

    /**
     * Display the specified news article
     */
    public function show($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        
        // Get related news (same category, excluding current news)
        $relatedNews = News::where('kategory', $news->kategory)
            ->where('id', '!=', $news->id)
            ->latest('tanggal')
            ->take(3)
            ->get();
        
        // If not enough related news, fill with latest news
        if ($relatedNews->count() < 3) {
            $additionalNews = News::where('id', '!=', $news->id)
                ->whereNotIn('id', $relatedNews->pluck('id'))
                ->latest('tanggal')
                ->take(3 - $relatedNews->count())
                ->get();
            
            $relatedNews = $relatedNews->merge($additionalNews);
        }
        
        return view('news.show', compact('news', 'relatedNews'));
    }
}