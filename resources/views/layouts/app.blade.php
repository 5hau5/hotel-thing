<!DOCTYPE html>
<html>
<head>
    <title>Picnic Island</title>
</head>
<body>
    <nav>
        <a href="{{ route('visitor.home') }}">Home</a>
        <a href="{{ route('visitor.hotel.book') }}">Hotel</a>
        <a href="{{ route('visitor.ferry.book') }}">Ferry</a>
        <a href="{{ route('visitor.park.tickets') }}">Park</a>
        <a href="{{ route('visitor.map') }}">Map</a>
    </nav>

    <hr>

    <div>
        @yield('content')
    </div>
</body>
</html>
