<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Education;


class EducationController extends Controller
{
    public function index()
    {
        $educations = Education::with('user')->get();

        return response()->json([
            'status' => true,
            'data' => $educations
        ],200);
    }
}