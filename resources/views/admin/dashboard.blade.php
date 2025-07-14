{{-- @extends('layouts.app')

@section('content')
    <h1>Admin Dashboard</h1>

    <div style="padding: 1rem; border: 1px solid #ccc; margin-bottom: 1rem;">
        <h3>Quick Links</h3>
        <ul>
            <li><a href="{{ route('admin.users.index') }}">Manage Users</a></li>
            <li><a href="{{ route('admin.ads.index') }}">Manage Ads</a></li>
            <li><a href="{{ route('admin.map.edit') }}">Edit Map</a></li>
            <li><a href="{{ route('admin.reports.index') }}">View Reports</a></li>
        </ul>
    </div>

    <div>
        <p>Welcome back, {{ auth()->user()->name ?? 'Admin' }}.</p>
        <p>You are logged in as an <strong>Admin</strong>.</p>
    </div>
@endsection --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
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
