<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the users.
     */
    public function index()
    {
        // Fetch all users from the database
        $users = User::all();
        return view('user', compact('users'));
    }

    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        // Display the form to create a new user
        return view('user-create');
    }

    /**
     * Store a newly created user in the database.
     */
    public function store(Request $request)
    {
        // Validate the form input data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'age' => 'required|integer|min:1',
            'occupation' => 'required|string|max:255',
        ]);

        // Create a new user record in the database
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'age' => $validated['age'],
            'occupation' => $validated['occupation'],
        ]);

        // Redirect back to the user list with a success message
        return redirect()->route('users.index')->with('success', 'User added successfully!');
    }

    /**
     * Display the specified user by ID.
     */
    public function show($id)
    {
        // Find the user by ID, or return a 404 error if not found
        $user = User::findOrFail($id);

        // Display the user details
        return view('user-show', compact('user'));
    }

    public function edit($id)
{
    // Find the user by ID
    $user = User::findOrFail($id);

    // Return a view with the user's details for editing
    return view('user-edit', compact('user'));
}


public function update(Request $request, $id)
{
    // Validate the request
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . $id, // Ignore the user's own email in uniqueness validation
        'age' => 'required|integer|min:1',
        'occupation' => 'required|string|max:255',
    ]);

    // Find the user by ID and update the details
    $user = User::findOrFail($id);
    $user->update($validated);

    // Redirect back to the users list with a success message
    return redirect()->route('users.index')->with('success', 'User updated successfully!');
}

}
