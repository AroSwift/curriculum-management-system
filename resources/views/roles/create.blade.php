@extends('layouts.default')

@section('title', 'Create Role')

@section('content')

    <form action="/roles" method="POST" class="form-group mt-4">
        @method('POST')
        @csrf

        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name')  }}">
        </div>

        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="name" value="{{ old('description')  }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection
