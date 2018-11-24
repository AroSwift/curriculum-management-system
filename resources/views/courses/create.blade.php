@extends('layouts.default')

@section('title', 'Create Course')

@section('content')

    <form action="/courses" method="POST" class="form-group mt-4">
        @method('POST')
        @csrf

        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="course_name" value="{{ old('course_name')  }}">
        </div>

        <div class="form-group">
            <label>Number</label>
            <input type="text" class="form-control" name="course_number" value="{{ old('course_number')  }}">
        </div>

        <div class="form-group">
            <label>Credit Hour</label>
            <input type="text" class="form-control" name="credit_hour" value="{{ old('credit_hour')  }}">
        </div>

        <div class="form-group">
            <label>Major</label>
            <input type="text" class="form-control" name="major_id" value="{{ old('major_id')  }}">
        </div>

        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="description" value="{{ old('description')  }}">
        </div>

        <div class="form-group">
            <label>Course Coordinator</label>
            <input type="text" class="form-control" name="course_coordinator_id" value="{{ old('course_coordinator')  }}">
        </div>

        <div class="form-group">
            <label>Active?</label>
            <input type="checkbox" class="form-control" value="1" name="active" {{ old('active') ? 'checked' : '' }}>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection
