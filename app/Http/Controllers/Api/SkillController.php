<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Skill;


class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::with('user')->get();

        return response()->json([
            'status' => true,
            'data' => $skills
        ], 200);
    }
}
