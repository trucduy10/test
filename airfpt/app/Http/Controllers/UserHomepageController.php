<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserHomepageController extends Controller
{
    public function book(Request $request){
        $bookings = $request->all();
        return view('airfpt.booking.booking', ['bookings'=>$bookings]);
    }

    public function searchFlight(){
        return view('airfpt.booking.searchFlight');
    }
}
