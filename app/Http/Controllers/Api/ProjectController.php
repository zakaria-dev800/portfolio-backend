<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Get all projects
     */
    public function index()
    {
        $projects = Project::all(); 

        return response()->json([
            'status' => true,
            'data' => $projects
        ]);
    }

}