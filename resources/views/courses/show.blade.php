@extends('layouts.default')

@section('title', 'Course')

@section('content')

    <div class="container-fluid mt-4">
        <a href="/courses/{{ $course->id  }}/edit" class="btn btn-primary">Edit</a>

        <form action="/courses/{{ $course->id  }}" method="POST" class="form-group float-right">
            @method('DELETE')
            @csrf

            <button class="btn btn-danger">Delete</button>
        </form>
    </div>
    <hr>
    <strong>Name:</strong> {{ $course->course_name  }}
    <br>
    <strong>Number:</strong> {{ $course->course_number  }}
    <br>
    <strong>Credit Hour:</strong> {{ $course->credit_hour  }}
    <br>
    <strong>Major:</strong> {{ $course->major_id  }}
    <br>
    <strong>Active:</strong>
    @if($course->active)
        <i class="fa fa-check" aria-hidden="true"></i>
    @else
        <i class="fa fa-times" aria-hidden="true"></i>
    @endif
    <br>
    <strong>Description:</strong> {{ $course->description  }}
    <br>
    <strong>Course Coordinator:</strong> {{ $course->course_coordinator_id }}
    <br>

@endsection