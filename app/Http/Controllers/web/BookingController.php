<?php

namespace App\Http\Controllers\Web;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateBookingRequest;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $AllBooking = Booking::where('user_id', Auth::guard('web')->user()->id)->get();
        return view('pages.web.booking.main', ['AllBooking' => $AllBooking]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.web.booking.book', ['data' => new Booking]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'gd' => 'required',
            'keterangan' => 'required'
        ]);
        $booking = new Booking;
        $booking-> user_id = auth()->user()->id;
        $booking-> tanggal = $request->tanggal;
        $booking-> jam_mulai = $request->jam_mulai;
        $booking-> jam_selesai = $request->jam_selesai;
        $booking-> gd = $request->gd;
        $booking-> keterangan = $request->keterangan;

        $booking->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        return view('pages.web.booking.book', ['data'=>$booking]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookingRequest  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $booking)
    {
        $request->validate([
            'tanggal'=>'required',
            'jam_mulai'=>'required',
            'jam_selesai'=>'required',
            'gd'=>'required',
            'keterangan'=>'required'
        ]);
        Booking::where('id',$booking)
        ->update([
            'tanggal'=>$request->tanggal,
            'jam_mulai'=>$request->jam_mulai,
            'jam_selesai'=>$request->jam_selesai,
            'gd'=>$request->gd,
            'keterangan'=>$request->keterangan,
        ]);

        return redirect("booking")->with('status','Request berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy($booking)
    {
        Booking::where('id',$booking)->delete();
        return redirect("booking")->with('status','Request berhasil di hapus');
    }
}
