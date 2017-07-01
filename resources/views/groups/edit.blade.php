@extends('layouts.app')

@section('content')
    <h1>Edit {{ $group->title }}</h1>
    <form method="POST" action="/admin/groups/{{ $group->id }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label>Title</label>
            <input class="form-control" type="text" name="title" value="{{ $group->title }}" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description" required>{{ $group->description }}</textarea>
        </div>
        <div class="form-group">
            <label>Contact Name</label>
            <input class="form-control" type="text" name="contact_name" value="{{ $group->contact_name }}" required>
        </div>
        <div class="form-group">
            <label>Contact Phone</label>
            <input class="form-control" type="tel" name="contact_tel" value="{{ $group->contact_tel }}" required>
        </div>
        <div class="form-group">
            <label>Contact Email (Optional)</label>
            <input class="form-control" type="email" name="contact_email" value="{{ $group->contact_email }}">
        </div>
        <input type="submit" value="Submit">
    </form>
@endsection('content')
