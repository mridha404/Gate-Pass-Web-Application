<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;


class UserController extends Controller
{
public function index()
{
    $users = User::with('department', 'designation', 'supervisor')->get();
    $successMessage = session('success'); // Get the success message, if any

    return view('users', compact('users', 'successMessage'));
}


public function edit(User $user)
{
    $departments = \App\Models\Department::all();
    $designations = \App\Models\Designation::all();
    $supervisors = \App\Models\User::where('id', '!=', $user->id)->get();

    return view('users.edit', compact('user', 'departments', 'designations', 'supervisors'));
}


public function update(Request $request, User $user)
{
    // Validate the request data
    $validatedData = $request->validate([
        'name' => 'required|unique:users,name,' . $user->id,
        'email' => 'required|email|unique:users,email,' . $user->id,
        'department_id' => 'required|exists:departments,id',
        'designation_id' => 'required|exists:designations,id',
        'supervisor_id' => 'nullable|exists:users,id',

    ]);

    // Update the user
    $user->update($validatedData);

    // Redirect or return a response
    return redirect()->route('users.index')->with('success', 'User updated successfully.');
}




public function destroy(User $user)
{
    $user->delete();

    // Re-fetch the list of users
    $users = User::with('department', 'designation', 'supervisor')->get();

    return Redirect::route('users.index', compact('users'))->with('success', 'User deleted successfully.');
}


}
