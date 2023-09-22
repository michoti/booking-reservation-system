<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotels</title>
</head>
<body>
    <header>
        <h1>Welcome to Our Hotel Booking App</h1>
        <p>Find the perfect hotel for your stay.</p>
    </header>
    <section>
            <h2>Available Hotels</h2>
            <ul>
                @foreach($hotels as $hotel)
                <li>
                    <h3>{{ $hotel->name }}</h3>
                    <p>{{ $hotel->description }}</p>
                    <p>Location: {{ $hotel->city }}, {{ $hotel->state }}, {{ $hotel->country }}</p>
                    <p>Price: ${{ number_format($hotel->price, 2) }} per night</p>
                    <a href="{{ route('hotel.show', ['id' => $hotel->id]) }}">View Details</a>
                </li>
                @endforeach
            </ul>
        </section>
</body>
</html>