<!DOCTYPE html>
<header>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>My Interest</title>
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
    <h1><div style="text-align: center;">Interest</div></h1>
</div>
<div class="container-fluid pt-3">
    <ol style="text-align: center">
        <li>
            <p class="font-weight-bold">Anime</p>
            <img src="/jpg/anime.jpg" alt="anime" height="360">
        </li>
        <li class="pt-sm-5">
            <p class="font-weight-bold">Motorsport</p>
            <img src="/jpg/motor.jpg" alt="F1" height="360">
        </li>
        <li class="pt-sm-5">
            <p class="font-weight-bold">Tech</p>
            <img src="/jpg/mkbhd.jpg" alt="Tech talk" height="360">
        </li>
        <li class="pt-sm-5">
            <p class="font-weight-bold">Motion Graphic Editing</p>
            <img src="/jpg/ae.jpg" alt="after effects" height="360">
        </li>
    </ol>
    <table class="table table-borderless" style="text-align: center">
        @foreach($int as $i)
            <tr>
                <td>
                    {{ $i->info }}
                </td>
            </tr>
        @endforeach
    </table>
</div>
</body>
@extends('layouts.footer')

@section('foot')
@endsection
