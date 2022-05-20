<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $TotalUser = User::where('role','!=', 'admin')->count();
        $TotalBooking = Booking::count();
        $AllBooking = Booking::count();
        return view('pages.admin.dashboard.main', ['TotalUser'=>$TotalUser, 'AllBooking'=>$AllBooking, 'TotalBooking'=>$TotalBooking]);
    }
}
