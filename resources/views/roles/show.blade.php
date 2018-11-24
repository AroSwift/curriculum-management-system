@extends('layouts.default')

@section('title', 'Role')

@section('content')

    <div class="container-fluid mt-4">
        <a href="/roles/{{ $role->id  }}/edit" class="btn btn-primary">Edit</a>

        <form action="/roles/{{ $role->id  }}" method="POST" class="form-group float-right">
            @method('DELETE')
            @csrf

            <button class="btn btn-danger">Delete</button>
        </form>
    </div>
    <hr>
    <strong>Name:</strong> {{ $role->name  }}
    <br>
    <strong>Description:</strong> {{ $role->description  }}
    <br>

@endsection