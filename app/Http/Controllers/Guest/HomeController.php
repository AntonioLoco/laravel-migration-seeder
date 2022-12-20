<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            "trains" => Train::all(),
            "today_trains" => Train::where('departure_time', '>=', now())->get()
        ];
        return view('trains.index', $data);
    }
}
