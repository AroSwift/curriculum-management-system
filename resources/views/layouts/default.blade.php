<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>
        @yield('title')
    </title>
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Cirriculum Management System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item {{ Request::is('courses') || Request::is('courses/*') ? 'active' : '' }}">
                    <a class="nav-link" href="/courses">Courses</a>
                </li>
                <li class="nav-item {{ Request::is('majors') || Request::is('majors/*') ? 'active' : '' }}">
                    <a class="nav-link" href="/majors">Majors</a>
                </li>
                <li class="nav-item {{ Request::is('roles') || Request::is('roles/*') ? 'active' : '' }}">
                    <a class="nav-link" href="/roles">Roles</a>
                </li>
                <li class="nav-item {{ Request::is('users') || Request::is('users/*') ? 'active' : '' }}">
                    <a class="nav-link" href="/users">Users</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">

        @if(count($errors) > 0)
            <div class="alert alert-danger mt-4" role="alert">
                @foreach($errors->all() as $error)
                    <strong>{{ $error }}</strong>
                @endforeach
            </div>
        @endif

        @yield('content')
    </div>

</body>
</html>