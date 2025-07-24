<?php

namespace App\Http\Controllers;

use App\ParentModel;  // Model का नाम ParentModel रखा है
use Illuminate\Http\Request;

class ParentController extends Controller
{
    public function index()
    {
        $parents = ParentModel::all();
        return view('parents.index', compact('parents'));
    }

    public function create()
    {
        return view('parents.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'email'   => 'required|email|unique:parents',
            'phone'   => 'required',
            'address' => 'required',
        ]);

        ParentModel::create($request->all());

        return redirect()->route('admin.parents.index')->with('success', 'Parent created successfully.');
    }

    public function edit(ParentModel $parent)
    {
        return view('parents.edit', compact('parent'));
    }

    public function update(Request $request, ParentModel $parent)
    {
        $request->validate([
            'name'    => 'required',
            'email'   => 'required|email|unique:parents,email,' . $parent->id,
            'phone'   => 'required',
            'address' => 'required',
        ]);

        $parent->update($request->all());

        return redirect()->route('admin.parents.index')->with('success', 'Parent updated successfully.');
    }

    public function destroy(ParentModel $parent)
    {
        $parent->delete();

        return redirect()->route('admin.parents.index')->with('success', 'Parent deleted successfully.');
    }
}
