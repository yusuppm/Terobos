<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Project;
use App\Models\Shop;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        // Get latest 3 projects
        $projects = Project::orderBy('created_at', 'desc')->limit(3)->get();
        
        // Get latest 4 products
        $products = Shop::orderBy('created_at', 'desc')->limit(4)->get();
        
        // Get latest 3 news articles
        $news = News::orderBy('tanggal', 'desc')->limit(3)->get();
        
        return view('pages.home', compact('projects', 'products', 'news'));
    }
}