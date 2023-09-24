<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BookingForm extends Component
{ 
    public $city;
    public $checkIn;
    public $checkOut;
    public $adult;
    public $children;
    public $room;

    public function submit()
    {
        // For example, you can emit an event to handle the form submission in a parent component.
        // $this->emit('bookingSubmitted', [
        //     'city' => $this->city,
        //     'checkIn' => $this->checkIn,
        //     'checkOut' => $this->checkOut,
        //     'adult' => $this->adult,
        //     'children' => $this->children,
        //     'room' => $this->room,
        // ]);

        // You can also reset form fields after submission if needed
        // $this->reset(['city', 'checkIn', 'checkOut', 'adult', 'children', 'room']);
        
    }
    public function render()
    {
        return view('livewire.booking-form');
    }
}
