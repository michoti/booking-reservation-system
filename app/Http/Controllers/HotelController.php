<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::orderBy('name', 'asc')->get();

        return view('home', compact('hotels'));
    }
    public function show(Hotel $id)
    {
        return view('hoteldetail');
    }

}
