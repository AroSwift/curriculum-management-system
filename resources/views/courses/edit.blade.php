@extends('layouts.default')

@section('title', 'Edit Course')

@section('content')

    <form action="/courses/{{ $course->id  }}" method="POST" class="form-group">
        @method('PATCH')
        @csrf

        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{ $course->course_name }}">
        </div>

        <div class="form-group">
            <label>Number</label>
            <input type="text" class="form-control" name="name" value="{{ $course->course_number }}">
        </div>

        <div class="form-group">
            <label>Credit Hour</label>
            <input type="text" class="form-control" name="name" value="{{ $course->credit_hour }}">
        </div>

        <div class="form-group">
            <label>Major</label>
            <input type="text" class="form-control" name="name" value="{{ $course->major_id }}">
        </div>

        <div class="form-group">
            <label>Active</label>
            <input type="text" class="form-control" name="name" value="{{ $course->active }}">
        </div>

        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="abbr" value="{{ $course->description }}">
        </div>

        <div class="form-group">
            <label>Course Coordinator</label>
            <input type="text" class="form-control" name="abbr" value="{{ $course->course_coordinator }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection