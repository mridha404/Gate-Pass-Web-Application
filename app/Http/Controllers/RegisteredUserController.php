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
        $users = User::where('name', '!=', 'Super Admin')->get();
        return view('users.index', compact('users'));
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

        session()->flash('message', 'User created successfully!');



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
    public function edit(User $user)
    {
        $departments = Department::all();
        $designations = Designation::all();
        $supervisors = User::all();

        return view('users.edit', compact('user', 'departments', 'designations', 'supervisors'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $userAttributes = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email,' . $user->id],
            'password' => ['nullable', 'confirmed', Password::min(8)],
            'department_id' => ['required', 'exists:departments,id'],
            'designation_id' => ['required', 'exists:designations,id'],
            'supervisor_id' => [], // Supervisor can be nullable
        ]);

        if ($request->filled('password')) {
            $userAttributes['password'] = bcrypt($request->password);
        } else {
            unset($userAttributes['password']);
        }

        $user->update($userAttributes);

        return redirect()->route('users.index')->with('message', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('message', 'User deleted successfully.');

    }

    


}
