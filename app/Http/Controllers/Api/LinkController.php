<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Link;

class LinkController extends Controller
{
    /**
     * Get all link
     */
    public function index()
    {
        $links = Link::all(); 

        return response()->json([
            'status' => true,
            'data' => $links
        ]);
    }

}