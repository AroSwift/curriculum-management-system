@extends('layouts.default')

@section('title', 'Users')

@section('content')

    <a href="users/create" class="btn btn-primary mb-3 mt-3">
        <i class="fa fa-plus" aria-hidden="true"></i>
        Create
    </a>


    <table class="table">
        <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Title</th>
            <th>Email</th>
            <th>Active</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>
                    <a href="/users/{{ $user->id  }}">{{ $user->first_name }}</a>
                </td>
                <td>{{ $user->last_name  }}</td>
                <td>{{ $user->title  }}</td>
                <td>{{ $user->email  }}</td>
                <td>
                    @if($user->active)
                        <i class="fa fa-check" aria-hidden="true"></i>
                    @else
                        <i class="fa fa-times" aria-hidden="true"></i>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection