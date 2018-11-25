@extends('layouts.default')

@section('title', 'Courses')

@section('content')

    <a href="courses/create" class="btn btn-primary mb-3 mt-3">
        <i class="fa fa-plus" aria-hidden="true"></i>
        Create
    </a>


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
                <td>{{ $course->course_number }}</td>
                <td>{{ $course->credit_hour }}</td>
                <td>{{ $course->major_id }}</td>
                <td>
                    @if($course->active)
                        <i class="fa fa-check" aria-hidden="true"></i>
                    @else
                        <i class="fa fa-times" aria-hidden="true"></i>
                    @endif
                </td>
                <td>{{ $course->description }}</td>
                <td>{{ $course->course_coordinator_id }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection