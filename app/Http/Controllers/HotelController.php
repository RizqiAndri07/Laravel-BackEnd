<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    function view(){
        return view('hotel.view');
    }
}
