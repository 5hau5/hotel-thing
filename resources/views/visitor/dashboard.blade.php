<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome to Picnic Island
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 space-y-6">

            @guest
            @else
                <div class="text-gray-700 text-center">
                    Welcome back, {{ Auth::user()->name }}!
                </div>
            @endguest

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <a href="{{ route('visitor.hotels.index') }}" class="block p-6 bg-white shadow rounded hover:bg-gray-100">
                    View Hotels
                </a>
                
                @guest
                @else
                    <a href="{{ route('visitor.ferrys.index') }}" class="block p-6 bg-white shadow rounded hover:bg-gray-100">
                    View Ferry Options
                    </a>
                @endguest

                <a href="{{ route('visitor.parks.index') }}" class="block p-6 bg-white shadow rounded hover:bg-gray-100">
                    Explore Theme Park
                </a>

                <a href="{{ route('visitor.map') }}" class="block p-6 bg-white shadow rounded hover:bg-gray-100">
                    View Island Map
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
