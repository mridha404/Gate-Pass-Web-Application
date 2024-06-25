<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;



class DepartmentController extends Controller
{
    public function create()
    {
        return view('departments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:departments,name',
        ]);

        Department::create([
            'name' => $request->name,
        ]);

        return redirect()->route('users.index')->with('message', 'Department added successfully.');
    }
}
