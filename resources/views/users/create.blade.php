@extends('layouts.default')

@section('title', 'Create User')

@section('content')

    <form action="/users" method="POST" class="form-group mt-4">
        @method('POST')
        @csrf

        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" value="{{ old('title')  }}">
        </div>

        <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="first_name" value="{{ old('first_name')  }}">
        </div>

        <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="last_name" value="{{ old('last_name')  }}">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" value="{{ old('email')  }}">
        </div>

        <div class="form-group">
            <label>Active</label>
            <input type="checkbox" class="form-control" value="1" name="active" {{ old('active') ? 'checked' : '' }}>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection
