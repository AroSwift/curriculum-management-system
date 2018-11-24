@extends('layouts.default')

@section('title', 'Courses')

@section('content')

    <a href="courses/create" class="btn btn-primary mb-3 mt-3">Create new</a>


    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Number</th>
            <th>Credit Hour</th>
            <th>Major</th>
            <th>Active</th>
            <th>Description</th>
            <th>Course Coordinator</th>
        </tr>
        </thead>
        <tbody>
        @foreach($courses as $course)
            <tr>
                <td>
                    <a href="/courses/{{ $course->id  }}">{{ $course->course_name }}</a>
                </td>
                <td>{{ $course->course_number  }}</td>
                <td>{{ $course->credit_hour  }}</td>
                <td>{{ $course->major  }}</td>
                <td>{{ $course->active  }}</td>
                <td>{{ $course->description  }}</td>
                <td>{{ $course->course_coordinator  }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection