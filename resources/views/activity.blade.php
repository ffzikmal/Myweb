<!DOCTYPE html>
<header>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>My Activity</title>
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
    <h1><div style="text-align: center;">Activity</div></h1>
</div>
<div class="container pt-3">
    <div class="row" style="text-align: center">
        <div class="col-sm-6">
            <div style="text-align: center"><img src="/jpg/treking.jpeg" alt="trekking" width="360" height="270"></div>
            <p class="font-weight-bold pt-4">Jungle Trekking</p>
        </div>
        <div class="col-sm-6">
            <div style="text-align: center"><img src="/jpg/d.jpg" alt="cycling" width="360" height="270"></div>
            <p class="font-weight-bold pt-4">Cycling</p>
        </div>
        <div class="col-sm-6 pt-3">
            <div style="text-align: center"><img src="/jpg/cdg.jpg" alt="php coding" width="360" height="270"></div>
            <p class="font-weight-bold pt-4">Web Developing</p>
        </div>
        <div class="col-sm-6 pt-3">
            <div style="text-align: center"><img src="https://qph.fs.quoracdn.net/main-qimg-6ed84f4db7a1b200ba91bff69b7f3a19-c" alt="reading" width="360" height="270"></div>
            <p class="font-weight-bold pt-4">Reading Novel</p>
        </div>
    </div>
    <table class="table table-borderless" style="text-align: center">
        @foreach($act as $a)
            <tr>
                <td>
                    {{ $a->info }}
                </td>
            </tr>
        @endforeach
    </table>
</div>
</body>
@extends('layouts.footer')

@section('foot')
@endsection
