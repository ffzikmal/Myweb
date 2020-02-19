<!DOCTYPE html>
<header>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>My Qualification</title>
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
    <h1><div style="text-align: center;">Qualification</div></h1>
</div>
<div class="container mt-3" style="text-align:center">
    <div class="row" style="text-align: center">
        <div class="col-sm-6">
            <p>Bronze award in The Duke of Edinburgh's International Award</p>
            <img src="/jpg/br.png" alt="sijil" width="270">
        </div>
        <div class="col-sm-6">
            <p>Silver award in The Duke of Edinburgh's International Award</p>
            <img src="/jpg/sv.png" alt="sijil" width="270">
        </div>
        <div class="col-sm-6 mt-5">
            <p>Anugerah Kawad Kaki Kadet Remaja Sekolah Peringkat Negeri Perak</p>
            <img src="/jpg/kwd.png" alt="sijil" width="270">
        </div>
        <div class="col-sm-6 mt-5">
            <p>7A 2B in Sijil Pelajaran Malaysia 2017</p>
            <img src="/jpg/spm.png" alt="spm" width="360">
        </div>
    </div>
    <table class="table table-borderless">
        @foreach($qual as $q)
            <tr>
                <td>
                    {{ $q->info }}
                </td>
            </tr>
        @endforeach
    </table>
</div>
</body>
@extends('layouts.footer')

@section('foot')
@endsection
