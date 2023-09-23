
<h1>{{ $hotel->name }}</h1>
<p>{{ $hotel->description }}</p>
<p>Location: {{ $hotel->city }}, {{ $hotel->state }}, {{ $hotel->country }}</p>
<p>Price: ${{ number_format($hotel->price, 2) }} per night</p>

<select name="room_type" id="room_type">
    <option value="">Select a room type</option>
    @foreach($roomtypes as $roomType)
    <option value="{{ $roomType->id }}">{{ $roomType->name }}</option>
    @endforeach
</select>

<!-- Add more hotel details and related information here -->

<a href="{{ route('home') }}">Back to Home</a>
