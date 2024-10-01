<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PageController extends Controller
{
    public function page6()
    {
        return view('pages.page6');
    }

    // Fix: Add $id parameter to accept the user ID
    public function page7($id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Pass the user data to the page7 view
        return view('pages.page7', compact('user'));
    }

    // Add more methods for additional pages
}

