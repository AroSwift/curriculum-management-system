@extends('layouts.default')

@section('title', 'Edit User')

@section('content')

    <form action="/users/{{ $user->id  }}" method="POST" class="form-group mt-3">
        @method('PATCH')
        @csrf

        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" value="{{ $user->title  }}">
        </div>

        <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="first_name" value="{{ $user->first_name  }}">
        </div>

        <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="last_name" value="{{ $user->last_name  }}">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" value="{{ $user->email  }}">
        </div>

        <div class="form-group">
            <label>Active</label>
            <input type="checkbox" class="form-control" name="active"
                   value="{{ $user->active ? '1' : '0'  }}" checked>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection