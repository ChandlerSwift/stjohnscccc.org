@extends('layouts.app')

@section('content')
    <h1>Create New Group</h1>
    <form method="POST" action="/admin/groups">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Title</label>
            <input class="form-control" type="text" name="title" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description" required></textarea>
        </div>
        <div class="form-group">
            <label>Contact Name</label>
            <input class="form-control" type="text" name="contact_name" required>
        </div>
        <div class="form-group">
            <label>Contact Phone</label>
            <input class="form-control" type="tel" name="contact_tel" required>
        </div>
        <div class="form-group">
            <label>Contact Email (Optional)</label>
            <input class="form-control" type="email" name="contact_email">
        </div>
        <input type="submit" value="Submit">
    </form>
@endsection('content')
