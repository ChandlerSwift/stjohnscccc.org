@extends('layouts.app')

@section('content')
    <h1>Edit {{ $event->name }}</h1>
    <form method="POST" action="/admin/events/{{ $event->id }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label>Title</label>
            <input class="form-control" type="text" name="title" value="{{ $event->title }}" required>
        </div>
        <div class="form-group">
            <label>Date</label>
            <input id="dateInput" class="form-control" type="date" name="date" value="{{ $event->date->toDateString() }}" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description" required>{{ $event->description }}</textarea>
        </div>
        <div class="form-group">
            <label>Link Title (Optional)</label>
            <input class="form-control" type="text" name="link_title" value="{{ $event->link_title }}">
        </div>
        <div class="form-group">
            <label>Link (Optional)</label>
            <input class="form-control" type="text" name="link" value="{{ $event->link }}">
        </div>
        <input type="submit" value="Submit">
    </form>
@endsection('content')

@section('script')
    <script>
        $(function(){
            $('#dateInput').datepicker({
                startDate: "Today",
                startView: 1,
                maxViewMode: 2,
                autoclose: true,
                todayHighlight: true,
                format: "yyyy-mm-dd",
            });
        });
    </script>
@endsection
