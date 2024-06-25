<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Designation;

class DesignationController extends Controller
{
    public function create()
    {
        return view('designations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:designations,name',
        ]);

        Designation::create([
            'name' => $request->name,
        ]);

        return redirect()->route('users.index')->with('message', 'Designation added successfully.');
    }
}
