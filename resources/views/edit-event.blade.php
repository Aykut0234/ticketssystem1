@extends('layout')

@section('content')
    <h1>Edit event</h1>
    <form action="{{ route('process-edit-event', $event->id) }}" method="POST">
        @csrf
        <label for="name">Naam</label>
        <input type="text" name="name" id="name" value="{{$event->name}}">

        <label for="event_start">Event start</label>
        <input type="date" name="event_start" id="event_start" value="{{$event->event_start}}">

        <label for="event_end">Event end</label>
        <input type="date" name="event_end" id="event_end" value="{{$event->event_end}}">

        <label for="available_tickets">available tickets</label>
        <input type="number" name="available_tickets" id="available_tickets" value="{{$event->available_tickets}}">

         <label for="price">price</label>
        <input type="number" name="price" id="price" value="{{$event->price}}">

        <label for="description">description</label>
        <input type="text" name="description" id="description" value="{{$event->description}}">


        
        
       
        
        <button type="submit">Submit</button>
    </form>
@endsection