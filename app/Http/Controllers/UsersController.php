<?php

namespace App\Http\Controllers;
use App\User;

class UsersController extends Controller {

    public function index() {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function show(User $user) {
        return view('users.show', compact('user'));
    }

    public function create() {
        return view('users.create');
    }

    public function store(User $user) {
        $attributes = request()->validate([
            'first_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'title' => ['required', 'max:255'],
            'email' => ['required', 'email'],
            'active' => ['required']
        ]);

        User::create($attributes);
        return redirect('/users');
    }

    public function edit(User $user) {
        return view('users.edit', compact('user'));
    }

    public function update(User $user) {
        $attributes = request()->validate([
            'first_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'title' => ['required', 'max:255'],
            'email' => ['required', 'email'],
            'active' => ['boolean']
        ]);

        $user->update($attributes);
        return redirect('/users');
    }

    public function destroy(User $user) {
        $user->delete();
        return redirect('/users');
    }
    
}
