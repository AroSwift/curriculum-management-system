@extends('layouts.default')

@section('title', 'Edit Course')

@section('content')

    <form action="/courses/{{ $course->id  }}" method="POST" class="form-group mt-3">
        @method('PATCH')
        @csrf

        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="course_name" value="{{ $course->course_name }}">
        </div>

        <div class="form-group">
            <label>Number</label>
            <input type="text" class="form-control" name="course_number" value="{{ $course->course_number }}">
        </div>

        <div class="form-group">
            <label>Credit Hour</label>
            <input type="text" class="form-control" name="credit_hour" value="{{ $course->credit_hour }}">
        </div>

        <div class="form-group">
            <label>Major</label>
            <input type="text" class="form-control" name="major_id" value="{{ $course->major_id }}">
        </div>

        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="description" value="{{ $course->description }}">
        </div>

        <div class="form-group">
            <label>Course Coordinator</label>
            <input type="text" class="form-control" name="course_coordinator_id" value="{{ $course->course_coordinator }}">
        </div>

        <div class="form-group">
            <label>Active?</label>
            <input type="checkbox" class="form-control" value="1" name="active" {{ $course->active ? 'checked' : '' }}>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection