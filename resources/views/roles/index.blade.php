@extends('layouts.default')

@section('title', 'Roles')

@section('content')

    <a href="roles/create" class="btn btn-primary mb-3 mt-3">
        <i class="fa fa-plus" aria-hidden="true"></i>
        Create
    </a>


    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        @foreach($roles as $role)
            <tr>
                <td>
                    <a href="/roles/{{ $role->id  }}">{{ $role->name }}</a>
                </td>
                <td>{{ $role->description  }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection