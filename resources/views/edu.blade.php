<!DOCTYPE html>
<header>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>My Education</title>
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
    <h1><div style="text-align: center;">Education</div></h1>
</div>
<div class="container pt-3" style="text-align: center">
    <div class="row" style="text-align: center">
        <div class="col-sm-6">
            <img src="https://berita.pas.org.my/wp-content/uploads/2017/08/logo-pasti.jpg" alt="pasti" height="270" class="mb-4">
            <p>Started at Pasti Ibnu Sina in 2005 until 2006</p>
        </div>
        <div class="col-sm-6">
            <img src="https://farm3.static.flickr.com/2773/4262039134_46d30848a8_o.png" alt="almunir" height="270" class="mb-4">
            <p>Continue to private primary school at Sekolah Rendah Agama Al-Munir from 2007 until 2012</p>
        </div>
        <div class="col-sm-6 mt-5">
            <img src="https://scontent.fkul8-1.fna.fbcdn.net/v/t1.0-9/553103_465311843534879_1965912363_n.jpg?_nc_cat=100&_nc_ohc=7zj7a17YZBAAX9wa11f&_nc_ht=scontent.fkul8-1.fna&oh=eb291d722a6e3e3216f3c42417875431&oe=5F005739" alt="medi"
            height="270" class="mb-4">
            <p>Continuing to secondary school at SABK Maahad Ehyak Diniah Islamiah from 2013 until 2017</p>
        </div>
        <div class="col-sm-6 mt-5">
            <img src="https://mypt3.com/wp-content/uploads/Kolej-Islam-Sultan-Alam-Shah-KISAS.jpg" class="mb-4" alt="kisas" height="270">
            <p>Boarding in Kolej Islam Sultan Alam Shah (KISAS) for 2 weeks before continuing Diploma in Computer Science at Universiti Pendidikan Sultan Idris</p>
        </div>
    </div>
    <table class="table table-borderless mb-5">
        @foreach($edu as $e)
            <tr>
                <td>
                    {{ $e->info }}
                </td>
            </tr>
        @endforeach
    </table>
</div>

</body>
@extends('layouts.footer')

@section('foot')
@endsection
