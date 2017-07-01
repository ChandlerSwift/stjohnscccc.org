@extends('layouts.app')

@section('content')
    <h1>Groups <small>(<a href="/admin/groups/create">Create New&hellip;</a>)</small></h1>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Contact Name</th>
                <th>Contact Phone</th>
                <th>Contact Email</th>
                <th>Actions</th>
            </tr>
            @foreach($groups as $group)
                <tr>
                    <td>{{ $group->title }}</td>
                    <td>{{ $group->description }}</td>
                    <td>{{ $group->contact_name }}</td>
                    <td>
                        <a href="tel:{{ $group->contact_tel }}">
                            {{ $group->contact_tel }}
                        </a>
                    </td> 
                    <td>
                        <a href="mailto:{{ $group->contact_email }}">
                            {{ $group->contact_email }}
                        </a>
                    </td>
                    <td>
                        <form class="form-inline" method="POST" action="/admin/groups/{{ $group->id }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div class="btn-group-vertical">
                                <button class="btn btn-default" type="submit" onclick="return confirm('Are you sure you want to delete this group?')">Delete</button>
                                <button type="button" class="btn btn-default" onclick='window.location.href="/admin/groups/{{ $group->id }}/edit"'>Edit</button>
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
