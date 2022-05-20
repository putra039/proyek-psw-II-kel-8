<?php

namespace App\Http\Controllers\Web;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataRuanganController extends Controller
{
    public function index(){
        $listrequest = Booking::get();
        return view('pages.web.dataruangan.main', compact('listrequest'));
    }
}
