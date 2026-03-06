<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function show(User $user)
    {
        return response()->json($user);
    }

    public function uploadPdf(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'cv_pdf' => 'required|mimes:pdf|max:2048'
        ]);

        if ($request->hasFile('cv_pdf')) {
            $path = $request->file('cv_pdf')->store('cv', 'public');
            $user->cv_pdf = $path;
            $user->save();
        }

        return response()->json([
            'message' => 'PDF uploaded successfully',
            'data' => $user
        ]);
    }
}