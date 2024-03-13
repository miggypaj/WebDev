<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'full_address' => 'required|string',
            'user_type_id' => 'nullable|integer|exists:user_types,id',
            'branch_assigned' => 'nullable|integer|exists:branches,id',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = User::create($request->all());

        return redirect()->route('users.index')->with('success', 'User created successfully!');
    }

    public function show($id)
    {
        $user = User::find($id);

        if (!$user) {
            return abort(404);
        }

        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);

        if (!$user) {
            return abort(404);
        }

        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return abort(404);
        }

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'full_address' => 'required|string',
            'user_type_id' => 'nullable|integer|exists:user_types,id',
            'branch_assigned' => 'nullable|integer|exists:branches,id',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user->update($request->all());

        return redirect()->route('users.index')->with('success', 'User updated successfully!');
    }
}
