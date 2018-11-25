@extends('layouts.default')

@section('title', 'Edit Role')

@section('content')

    <form action="/roles/{{ $role->id  }}" method="POST" class="form-group mt-3">
        @method('PATCH')
        @csrf

        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{ $role->name }}">
        </div>

        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="description" value="{{ $role->description }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection