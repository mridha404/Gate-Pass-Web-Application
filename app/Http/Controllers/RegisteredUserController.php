<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Designation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::all();
        $designations = Designation::all();
        $supervisors = User::all();

        return view('auth.register', compact('departments', 'designations', 'supervisors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userAttributes = $request->validate([
            'name' =>['required'],
            'email' =>['required', 'email', 'unique:users,email' ],
            'password' =>['required', 'confirmed', Password::min(8)],
            'department_id' => ['required','exists:departments,id'],
            'designation_id' => ['required','exists:designations,id'],
            'supervisor_id' => [], // Supervisor can be nullable
        ]);



        $user = User::create($userAttributes);

        Auth::login($user);

        return redirect()->route('users.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function userList()
{
    $users = User::with('department', 'designation', 'supervisor')->get();
    return view('users.list', compact('users'));
}
}
