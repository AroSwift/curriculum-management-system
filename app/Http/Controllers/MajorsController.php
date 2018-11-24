<?php

namespace App\Http\Controllers;
use App\Major;

class MajorsController extends Controller
{

    public function index() {
        $majors = Major::all();
        return view('majors.index', compact('majors'));
    }

    public function show(Major $major) {
        return view('majors.show', compact('major'));
    }

    public function create() {
        return view('majors.create');
    }

    public function store(Major $major) {
        $attributes = request()->validate([
            'first_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'title' => ['required', 'max:255'],
            'email' => ['required', 'email'],
            'active' => ['boolean']
        ]);

        Major::create($attributes);
        return redirect('/majors');
    }

    public function edit(Major $major) {
        return view('majors.edit', compact('user'));
    }

    public function update(Major $major) {
        $attributes = request()->validate([
            'first_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'title' => ['required', 'max:255'],
            'email' => ['required', 'email'],
            'active' => ['boolean']
        ]);

        $major->update($attributes);
        return redirect('/majors');
    }

    public function destroy(Major $major) {
        $major->delete();
        return redirect('/majors');
    }

}
