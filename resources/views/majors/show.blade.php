@extends('layouts.default')

@section('title', 'Major')

@section('content')

    <div class="container-fluid mt-4">
        <a href="/majors/{{ $major->id  }}/edit" class="btn btn-primary">Edit</a>

        <form action="/majors/{{ $major->id  }}" method="POST" class="form-group float-right">
            @method('DELETE')
            @csrf

            <button class="btn btn-danger">Delete</button>
        </form>
    </div>
    <hr>
    <strong>Name:</strong> {{ $major->name  }}
    <br>
    <strong>Abbr:</strong> {{ $major->abbr  }}
    <br>

@endsection