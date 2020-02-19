@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ isset($interest) ? 'Edit' : 'Add'}} Interest</h2>
        <br>
        <form action="{{ isset($interest) ? route('edit.int', $interest->id) : route('i.add') }}" method="post">
            @csrf
            @if (isset($interest))
                @method('patch')
            @endif
            <div class="form-group">
                <label for="info">Details</label>@error('info') <span style="color: red">{{ $message }}</span>@enderror
                <textarea name="info" id="info" class="form-control">{{ isset($interest) ? $interest->info : old('info')}}</textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="{{ isset($interest) ? 'Update' : 'Submit' }}" class="btn btn-primary">
            </div>
        </form>
    </div>


@endsection
