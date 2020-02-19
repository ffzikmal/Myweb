@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ isset($qualification) ? 'Edit' : 'Add'}} Qualification</h2>
        <br>
        <form action="{{ isset($qualification) ? route('edit.qual', $qualification->id) : route('q.add') }}" method="post">
            @csrf
            @if (isset($qualification))
                @method('patch')
            @endif
            <div class="form-group">
                <label for="info">Details</label>@error('info') <span style="color: red">{{ $message }}</span>@enderror
                <textarea name="info" id="info" class="form-control">{{ isset($qualification) ? $qualification->info : old('info')}}</textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="{{ isset($qualification) ? 'Update' : 'Submit' }}" class="btn btn-primary">
            </div>
        </form>
    </div>


@endsection
