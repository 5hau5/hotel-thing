@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Room</h1>

    <form method="POST" action="{{ route('rooms.store') }}">
        @csrf

        <div class="mb-3">
            <label for="hotel_id">Hotel</label>
            <select name="hotel_id" class="form-control" required>
                @foreach ($hotels as $hotel)
                    <option value="{{ $hotel->id }}">{{ $hotel->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="room_number">Room Number</label>
            <input type="text" name="room_number" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="capacity">Capacity</label>
            <input type="number" name="capacity" class="form-control" required min="1">
        </div>

        <div class="mb-3">
            <label for="price">Price</label>
            <input type="number" step="0.01" name="price" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Create Room</button>
    </form>
</div>
@endsection

edit.blade.php
here is code:
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Room</h2>
    <form action="{{ route('rooms.update', $room->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Hotel ID</label>
            <input type="number" name="hotel_id" class="form-control" value="{{ $room->hotel_id }}" required>
        </div>

        <div class="form-group">
            <label>Room Number</label>
            <input type="text" name="room_number" class="form-control" value="{{ $room->room_number }}" required>
        </div>

        <div class="form-group">
            <label>Room Type</label>
            <input type="text" name="room_type" class="form-control" value="{{ $room->room_type }}" required>
        </div>

        <div class="form-group">
            <label>Price</label>
            <input type="text" name="price" class="form-control" value="{{ $room->price }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update Room</button>
    </form>
</div>
@endsection
