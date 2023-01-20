@extends('layout')

@section('content')
    <h1>Add Car</h1>
    <form action="{{ route('process-add-event') }}" method="POST">
        @csrf
        <label for="name">Naam</label>
        <input type="text" name="name" id="name">
        <label for="event_start">Event start</label>
        <input type="date" name="event_start" id="event_start">
        <label for="event_end">Event end</label>
        <input type="date" name="event_end" id="event_end">
        
        <label for="available_tickets">Available tickets</label>
        <input type="number" name="available_tickets" id="available_tickets">

        <label for="price">price</label>
        <input type="number" name="price" id="price">

        <label for="description">description</label>
        <textarea type="text" name="description" id="description" cols="30" rows="10"></textarea>
        
        <button type="submit">Submit</button>
    </form>
@endsection