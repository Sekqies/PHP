<html>
<head>
<title>@yield('titulo')</title>

<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<style>
    img {
        width: 200px;
        height: 200px;
        object-fit:cover;
        margin:15px;
        border-radius:50%;
    }
</style>
</head>
<body>
    <nav>
        <div class='nav-wrapper deep-orange'>
            <a href='#!' class='brand-logo'> Projeto Cursos </a>
            <a href='#' data-target='mobile' class='sidenav-trigger'><i class='material-icons'>menu</i></a>
            <ul class='right hide-on-med-and-down'>
                <li><a href='/'>Home</a></li>
                <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile">
        <li><a href="/">Home</a></li>
        <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
    </ul>