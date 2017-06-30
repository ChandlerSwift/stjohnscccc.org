@extends('layouts.app')

@section('content')
    <h1>Create New Event</h1>
    <form method="POST" action="/admin/events">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Title</label>
            <input class="form-control" type="text" name="title" required>
        </div>
        <div class="form-group">
            <label>Date</label>
            <input id="dateInput" class="form-control" type="date" name="date" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description" required></textarea>
        </div>
        <div class="form-group">
            <label>Link Title (Optional)</label>
            <input class="form-control" type="text" name="link_title">
        </div>
        <div class="form-group">
            <label>Link (Optional)</label>
            <input class="form-control" type="text" name="link">
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
