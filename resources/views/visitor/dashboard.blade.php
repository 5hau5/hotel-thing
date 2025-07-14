{{-- @extends('layouts.app')

@section('content')
    <h1>Welcome to Picnic Island!</h1>
    <ul>
        <li><a href="{{ route('visitor.hotel.book') }}">Book Hotel</a></li>
        <li><a href="{{ route('visitor.ferry.book') }}">Book Ferry</a></li>
        <li><a href="{{ route('visitor.park.tickets') }}">Buy Theme Park Tickets</a></li>
        <li><a href="{{ route('visitor.map') }}">View Island Map</a></li>
    </ul>
@endsection --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
