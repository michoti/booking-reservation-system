<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\RoomType;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::orderBy('name', 'asc')->get();

        return view('hotels.index', compact('hotels'));
    }
    public function show($id)
    {
        $hotel = Hotel::findOrFail($id);
        $roomtypes = RoomType::get();

        // You can also load related data, such as room types, amenities, etc., here if needed

        // Pass the hotel details to the view
        return view('hotels.show', [
            'hotel' => $hotel,
            'roomtypes' => $roomtypes
        ])->layout('layouts.guest');
    }

}
