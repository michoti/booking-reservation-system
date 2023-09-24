<?php

namespace App\Http\Livewire;

use App\Models\Hotel;
use Livewire\Component;

class FilteredRooms extends Component
{
    public $hotels;
    public function mount()
    {
        $this->hotels = Hotel::get();
    }
    public function render()
    {
        return view('livewire.filtered-rooms', [
            'hotels' => $this->hotels,
        ]);
    }
}
