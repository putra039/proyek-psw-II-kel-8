<?php

namespace App\Http\Controllers\Admin;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListRequestController extends Controller
{
    public function index(){
        $listrequest = Booking::get();
        return view('pages.admin.listrequest.main', compact('listrequest'));
    }

    public function approved(Booking $listrequest){
        $listrequest->status = 'Approved';
        $listrequest->update();
        return redirect()->back()->with('status','Berhasil di approved');
    }

    public function rejected(Booking $listrequest){
        $listrequest->status = 'Rejected';
        $listrequest->update();
        return redirect()->back()->with('status','Berhasil di approved');
    }
}

