@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ isset($profile) ? 'Edit' : 'Add'}} Profile</h2>
        <br>
        <form action="{{ isset($profile) ? route('p.edit', $profile->id) : route('p.add') }}" method="post">
            @csrf
            @if (isset($profile))
                @method('patch')
            @endif
            <div class="form-group">
                <label for="info">Details</label>@error('info') <span style="color: red">{{ $message }}</span>@enderror
                <textarea name="info" id="info" class="form-control">{{ isset($profile) ? $profile->info : old('info')}}</textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="{{ isset($profile) ? 'Update' : 'Submit' }}" class="btn btn-primary">
            </div>
        </form>
    </div>


@endsection
