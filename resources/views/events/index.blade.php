@extends('layouts.app')

@section('content')
    <h1>Upcoming Events <small>(<a href="/admin/events/create">Create New&hellip;</a>)</small></h1>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th>Description</th>
                <th>Link Title</th>
                <th>Link Address</th>
                <th>Action</th>
            </tr>
            @foreach($events as $event)
                <tr>
                    <td>{{ $event->title }}</td>
                    <td>{{ $event->date->toFormattedDateString() }}</td>
                    <td>{{ $event->description }}</td>
                    <td>{{ $event->link_title }}</td>
                    <td>
                        <a href="{{ $event->link }}">
                            {{ $event->link }}
                        </a>
                    </td>
                    <td>
                        <form method="POST" action="/admin/events/{{ $event->id }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-default" type="submit" onclick="return confirm('Are you sure you want to delete this event?')">Delete</button>
                        </form>
                </tr>
            @endforeach
        </table>
    </div>
    <hr>
    <h1>Archived Events</h1>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th>Description</th>
                <th>Link Title</th>
                <th>Link Address</th>
                <th>Action</th>
            </tr>
            @foreach($archived_events as $event)
                <tr>
                    <td>{{ $event->title }}</td>
                    <td>{{ $event->date->toFormattedDateString() }}</td>
                    <td>{{ $event->description }}</td>
                    <td>{{ $event->link_title }}</td>
                    <td>
                        <a href="{{ $event->link }}">
                            {{ $event->link }}
                        </a>
                    </td>
                    <td><a href="/admin/events/{{ $event->id }}/new" class="btn btn-default">Make a Copy</a></td>
                </tr>
            @endforeach
        </table>
    </div>
    <hr>
    <h1>Deleted Events</h1>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th>Description</th>
                <th>Link Title</th>
                <th>Link Address</th>
                <th>Action</th>
            </tr>
            @foreach($deleted_events as $event)
                <tr>
                    <td>{{ $event->title }}</td>
                    <td>{{ $event->date->toFormattedDateString() }}</td>
                    <td>{{ $event->description }}</td>
                    <td>{{ $event->link_title }}</td>
                    <td>
                        <a href="{{ $event->link }}">
                            {{ $event->link }}
                        </a>
                    </td>
                    <td><a href="/admin/events/{{ $event->id }}/restore" class="btn btn-default">Restore</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
