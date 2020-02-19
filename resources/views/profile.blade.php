<!DOCTYPE html>
<header>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>My Profile</title>
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
    <h1><div style="text-align: center;">Profile</div></h1>
</div>

<br>
<div class="container" style="text-align: center ">
    <div class="card mb-3" style="text-align: center">
        <div class="mt-3" style="text-align: center"><img src="/jpg/me.jpg" alt="my image" width="200" height="200" class="rounded-circle"></div>
        <div class="card-body">
            <p>Name: Muhammad Ikmal bin Hatimul Asam</p>
            <p>Birth Date: 10 August 2000</p>
            <p>Address: 157, Simpang 3 Sungai Manik, 36000, Teluk Intan, Perak</p>
            <p>Origin: Teluk Intan, Perak</p>
            <p>Gender: Male</p>
            <p>Phone Number: 014-396 0048</p>
            <table class="table table-borderless">
                @foreach($pro as $p)
                    <tr>
                        <td>
                            {{ $p->info }}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

</div>
</body>
@extends('layouts.footer')

@section('foot')
@endsection
