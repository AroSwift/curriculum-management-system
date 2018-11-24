@extends('layouts.default')

@section('title', 'User')

@section('content')

    <div class="container-fluid mt-4">
        <a href="/users/{{ $user->id  }}/edit" class="btn btn-primary">Edit</a>

        <form action="/users/{{ $user->id  }}" method="POST" class="form-group float-right">
            @method('DELETE')
            @csrf

            <button class="btn btn-danger">Delete</button>
        </form>
    </div>
    <hr>
    <strong>Title:</strong> {{ $user->title  }}
    <br>
    <strong>First Name:</strong> {{ $user->first_name  }}
    <br>
    <strong>Last Name:</strong> {{ $user->last_name  }}
    <br/>
    <strong>Email:</strong> {{ $user->email  }}
    <br>
    <strong>Active:</strong> {{ $user->active  }}
    <br>

@endsection