@extends('layouts.default')

@section('title', 'Majors')

@section('content')

    <a href="majors/create" class="btn btn-primary mb-3 mt-3">Create new</a>


    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Abbr</th>
        </tr>
        </thead>
        <tbody>
        @foreach($majors as $major)
            <tr>
                <td>
                    <a href="/majors/{{ $major->id  }}">{{ $major->name }}</a>
                </td>
                <td>{{ $major->abbr  }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection