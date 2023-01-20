@extends('layout')

@section('content')



    <h1>event</h1>
    <table>
        <thead>
            <tr>
                <th>Naam</th>
                <th>event_start</th>
                <th>event_end</th>
                <th>available_tickets</th>
                <th>price</th>
                <th>description</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
                <tr>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->event_start }}</td>
                    <td>{{ $event->event_end }}</td>
                    <td>{{ $event->available_tickets }}</td>
                    <td>{{ $event->price }}</td>
                    <td>{{ $event->description }}</td>
                    
                    <td>
                        <a href="{{ route('edit-event', $event->id) }}">Edit</a>
                        <a href="{{ route('delete-event', $event->id) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
@endsection