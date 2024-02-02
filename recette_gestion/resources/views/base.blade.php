<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@yield('title') | {{ config('app.name') }}</title>
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div>
            {{-- <img width="100px" height="100px"  src="" alt="Random Image"> --}}
        </div>
        <div class="container-fluid">
            <a class="navbar-brand " style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ; font-size:3 rem" href="/">HOME</a>
            <a href="recettes" class="nav-link">Gestion Des recettes </a>
        </div>
            <form action="{{ url('/search') }}" method="get" class="form-inline">
                <div class="input-group">
                    <input type="search" name="query" placeholder="Search" class="form-control">&nbsp;&nbsp;
                    <div class="input-group-append">
                        <button class="btn btn-outline-success" type="submit">Search <i class="fa fa-search"
                                aria-hidden="true"></i></button>
                    </div>
                </div>
            </form>
    </nav>

    <div class="container">
        @yield('content')
    </div>
    <br><br> <br><br><br> <br>
    <script src="https://kit.fontawesome.com/c0bae2ffa6.js" crossorigin="anonymous"></script>
    
</body>

</html>
