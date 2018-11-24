<?php

namespace App\Http\Controllers;
use App\Major;

class MajorsController extends Controller {

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
            'name' => ['required', 'max:255'],
            'abbr' => ['required', 'max:4'],
        ]);

        Major::create($attributes);
        return redirect('/majors');
    }

    public function edit(Major $major) {
        return view('majors.edit', compact('major'));
    }

    public function update(Major $major) {
        $attributes = request()->validate([
            'name' => ['required', 'max:255'],
            'abbr' => ['required', 'max:4'],
        ]);

        $major->update($attributes);
        return redirect('/majors');
    }

    public function destroy(Major $major) {
        $major->delete();
        return redirect('/majors');
    }

}
