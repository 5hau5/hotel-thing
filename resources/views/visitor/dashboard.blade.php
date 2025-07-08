@extends('layouts.app')

@section('content')
    <h1>Welcome to Picnic Island!</h1>
    <ul>
        <li><a href="{{ route('visitor.hotel.book') }}">Book Hotel</a></li>
        <li><a href="{{ route('visitor.ferry.book') }}">Book Ferry</a></li>
        <li><a href="{{ route('visitor.park.tickets') }}">Buy Theme Park Tickets</a></li>
        <li><a href="{{ route('visitor.map') }}">View Island Map</a></li>
    </ul>
@endsection
