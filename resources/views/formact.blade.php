@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ isset($activity) ? 'Edit' : 'Add'}} Activity</h2>
        <br>
        <form action="{{ isset($activity) ? route('edit.act', $activity->id) : route('a.add') }}" method="post">
            @csrf
            @if (isset($activity))
                @method('patch')
            @endif
            <div class="form-group">
                <label for="info">Details</label>@error('info') <span style="color: red">{{ $message }}</span>@enderror
                <textarea name="info" id="info" class="form-control">{{ isset($activity) ? $activity->info : old('info')}}</textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="{{ isset($activity) ? 'Update' : 'Submit' }}" class="btn btn-primary">
            </div>
        </form>
    </div>


@endsection
