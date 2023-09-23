<!-- resources/views/livewire/room-filter.blade.php -->

<div>
    <label for="hotel">Filter by Hotel:</label>
    <select wire:model="hotelId" id="hotel" wire:change="updatedSelectedHotel">
        <option value="">All Hotels</option>
        @foreach($hotels as $hotel)
        <option value="{{ $hotel->id }}">{{ $hotel->name }}</option>
        @endforeach
    </select>

    <label for="roomType">Filter by Room Type:</label>
    <select wire:model="roomTypeId" id="roomType" wire:change="updatedSelectedHotel">
        <option value="">All Room Types</option>
        @foreach($roomTypes as $roomType)
        <option value="{{ $roomType->id }}">{{ $roomType->name }}</option>
        @endforeach
    </select>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Hotel</th>
                <th>Room Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rooms as $room)
            <tr>
                <td>{{ $room->name }}</td>
                <td>{{ $room->hotel->name }}</td>
                <td>{{ $room->room_type->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
