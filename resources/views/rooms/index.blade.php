@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Rooms</h1>
    <a href="{{ route('rooms.create') }}" class="btn btn-primary mb-3">Add Room</a>

    @foreach ($rooms as $room)
        <div class="card mb-3">
            <div class="card-body">
                <h5>Room {{ $room->room_number }} - {{ $room->hotel->name }}</h5>
                <p>Capacity: {{ $room->capacity }}</p>
                <p>Price: ${{ $room->price }}</p>
            </div>
        </div>
    @endforeach
</div>
@endsection
