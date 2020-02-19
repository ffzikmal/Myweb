@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1>Welcome to admin page</h1>
            <p>Edit page here</p>
        </div>
    </div>
    <div class="container">
        <div class="row pt-3">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Profile</h4>
                        <p class="card-text">Edit Profile</p>
                        <a href="{{ route('adminpro') }}">View</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Education</h4>
                        <p class="card-text">Edit Education</p>
                        <a href="{{ route('adminedu') }}">View</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Qualification</h4>
                        <p class="card-text">Edit Qualification</p>
                        <a href="{{ route('adminqual') }}">View</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Interest</h4>
                        <p class="card-text">Edit Interest</p>
                        <a href="{{ route('adminint') }}">View</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Activity</h4>
                        <p class="card-text">Edit Activity</p>
                        <a href="{{ route('adminact') }}">View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
