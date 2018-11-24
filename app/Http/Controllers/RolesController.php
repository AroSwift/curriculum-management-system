<?php

namespace App\Http\Controllers;
use App\Role;

class RolesController extends Controller {

    public function index() {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    public function show(Role $role) {
        return view('roles.show', compact('role'));
    }

    public function create() {
        return view('roles.create');
    }

    public function store(Role $role) {
        $attributes = request()->validate([
            'name' => ['required', 'max:255'],
            'description' => ['required', 'max:255']
        ]);

        Role::create($attributes);
        return redirect('/roles');
    }

    public function edit(Role $role) {
        return view('roles.edit', compact('role'));
    }

    public function update(Role $role) {
        $attributes = request()->validate([
            'name' => ['required', 'max:255'],
            'description' => ['required', 'max:255']
        ]);

        $role->update($attributes);
        return redirect('/roles');
    }

    public function destroy(Role $role) {
        $role->delete();
        return redirect('/roles');
    }

}
