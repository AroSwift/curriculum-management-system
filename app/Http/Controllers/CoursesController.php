<?php

namespace App\Http\Controllers;
use App\Course;

class CoursesController extends Controller {

    public function index() {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function show(Course $course) {
        return view('courses.show', compact('course'));
    }

    public function create() {
        return view('courses.create');
    }

    public function store(Course $course) {
        $attributes = request()->validate([
            'course_name' => ['required', 'max:255'],
            'course_number' => ['required', 'max:255'],
            'credit_hour' => ['required', 'integer'],
            'major_id' => ['integer'],
            'active' => ['boolean'],
            'description' => ['required', 'max:255'],
            'course_coordinator_id' => ['integer']
        ]);

        $attributes['active'] = empty($attributes['active']) ? false : true;

        Course::create($attributes);
        return redirect('/courses');
    }

    public function edit(Course $course) {
        return view('courses.edit', compact('course'));
    }

    public function update(Course $course) {
        $attributes = request()->validate([
            'course_name' => ['required', 'max:255'],
            'course_number' => ['required', 'max:255'],
            'credit_hour' => ['required', 'integer'],
            'major_id' => ['integer'],
            'active' => ['boolean'],
            'description' => ['required', 'max:255'],
            'course_coordinator_id' => ['integer']
        ]);

        $attributes['active'] = empty($attributes['active']) ? false : true;

        $course->update($attributes);
        return redirect('/courses');
    }

    public function destroy(Course $course) {
        $course->delete();
        return redirect('/courses');
    }

}
