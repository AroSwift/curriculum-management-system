<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <title>
        @yield('title')
    </title>
</head>
<body>

    <nav class="nav nav-inline">
        <a class="nav-link active" href="/users">Users</a>
        <a class="nav-link" href="/majors">Majors</a>
        <a class="nav-link" href="/courses">Courses</a>
        <a class="nav-link" href="/roles">Roles</a>
    </nav>

    <div class="container-fluid">
        @yield('content')
    </div>

</body>
</html>