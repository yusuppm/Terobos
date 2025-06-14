<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of projects
     */
    public function index()
    {
        $projects = Project::latest()->paginate(9);
        
        return view('projects.index', compact('projects'));
    }

    /**
     * Display the specified project
     */
    public function show($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();
        
        // Get related projects (excluding current project)
        $relatedProjects = Project::where('id', '!=', $project->id)
            ->latest()
            ->take(3)
            ->get();
        
        return view('projects.show', compact('project', 'relatedProjects'));
    }
}