@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ isset($education) ? 'Edit' : 'Add'}} Education</h2>
        <br>
        <form action="{{ isset($education) ? route('e.edit', $education->id) : route('e.add') }}" method="post">
            @csrf
            @if (isset($education))
                @method('patch')
            @endif
            <div class="form-group">
                <label for="info">Details</label>@error('info') <span style="color: red">{{ $message }}</span>@enderror
                <textarea name="info" id="info" class="form-control">{{ isset($education) ? $education->info : old('info')}}</textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="{{ isset($education) ? 'Update' : 'Submit' }}" class="btn btn-primary">
            </div>
        </form>
    </div>


@endsection
