<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with('user')->get();

        return response()->json([
            'status' => true,
            'data' => $services
        ], 200);
    }
}
