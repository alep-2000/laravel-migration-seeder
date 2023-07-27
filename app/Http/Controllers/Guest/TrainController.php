<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index(){
        $trains = Train::where('date', '2023-07-26')->get();

        return view('home', compact('trains'));
    }
}
