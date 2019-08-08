<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showProfilePage(Request $request)
    {
        $user = auth()->user();

        return view('my_profile', compact('user'));
    }
}
