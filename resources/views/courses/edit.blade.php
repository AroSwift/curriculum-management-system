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
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{ $course->course_number }}">
        </div>

        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{ $course->credit_hour }}">
        </div>

        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{ $course->course_id }}">
        </div>

        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{ $course->active }}">
        </div>

        <div class="form-group">
            <label>Abbr</label>
            <input type="text" class="form-control" name="abbr" value="{{ $course->description }}">
        </div>

        <div class="form-group">
            <label>Abbr</label>
            <input type="text" class="form-control" name="abbr" value="{{ $course->course_coordinator }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection