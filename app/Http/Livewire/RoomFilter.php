<?php

namespace App\Http\Livewire;

use App\Models\Hotel;
use App\Models\Room;
use App\Models\RoomType;
use Livewire\Component;

class RoomFilter extends Component
{
    public $hotelId;
    public $roomTypeId;

    public function updatedSelectedHotel()
    {
        $this->reset();
    }
    public function render()
    {
        $hotels = Hotel::all();
        $roomTypes = RoomType::all();

        $rooms = Room::when($this->hotelId, function ($query) {
                            $query->where('hotel_id', $this->hotelId);})
                        ->when($this->roomTypeId, function ($query) {
                            $query->where('room_type_id', $this->roomTypeId);})
                        ->get();
        return view('livewire.room-filter', compact('rooms', 'hotels', 'roomTypes'));
    }
}
