@extends('layouts.default')

@section('title', 'Create Course')

@section('content')

    @if(count($errors) > 0)
        <div class="alert alert-danger mt-4" role="alert">
            @foreach($errors->all() as $error)
                <strong>{{ $error }}</strong>
            @endforeach
        </div>
    @endif

    <form action="/courses" method="POST" class="form-group mt-4">
        @method('POST')
        @csrf

        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('course_name')  }}">
        </div>

        <div class="form-group">
            <label>Number</label>
            <input type="text" class="form-control" name="name" value="{{ old('course_number')  }}">
        </div>

        <div class="form-group">
            <label>Credit Hour</label>
            <input type="text" class="form-control" name="name" value="{{ old('credit_hour')  }}">
        </div>

        <div class="form-group">
            <label>Major</label>
            <input type="text" class="form-control" name="name" value="{{ old('major_id')  }}">
        </div>

        <div class="form-group">
            <label>Active</label>
            <input type="text" class="form-control" name="name" value="{{ old('active')  }}">
        </div>

        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="abbr" value="{{ old('description')  }}">
        </div>

        <div class="form-group">
            <label>Course Coordinator</label>
            <input type="text" class="form-control" name="abbr" value="{{ old('course_coordinator')  }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection
