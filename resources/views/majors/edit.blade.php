@extends('layouts.default')

@section('title', 'Edit Major')

@section('content')

    <form action="/majors/{{ $major->id  }}" method="POST" class="form-group">
        @method('PATCH')
        @csrf

        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{ $major->name  }}">
        </div>

        <div class="form-group">
            <label>Abbr</label>
            <input type="text" class="form-control" name="abbr" value="{{ $major->abbr  }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection