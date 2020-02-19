<!DOCTYPE html>
<header>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>My Work</title>
</header>

<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="/">Welcome</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/profile">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/edu">Education</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/qual">Qualification</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/interest">Interest</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/activity">Activity</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/work">Work</a>
        </li>
    </ul>
</nav>
<br>
<div class="container p-5">
    <h1><div style="text-align: center;">Work</div></h1>
</div>
<div class="container pb-5" style="text-align: center">
    <p class="font-weight-bold">Motion Graphic Works</p>
    <iframe width="720" height="480" src="https://www.youtube.com/embed/CLWBtFrLFJQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <br>
    <p class="font-weight-bold pt-4">Graphic Design Work</p>
    <img src="/jpg/poster.jpg" alt="poster" height="360">
</div>

</body>
@extends('layouts.footer')

@section('foot')
@endsection
