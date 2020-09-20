<?php

namespace App\Http\Controllers;
use Auth;
use App\Bookingdetail;
use Illuminate\Http\Request;

class BookingdetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:Admin')->only('index','show');
        $this->middleware('role:Customer')->only('store');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookingdetails=Bookingdetail::all();
        return view('backend.bookingdetails.index',compact('bookingdetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // dd(Auth::id());
        $seatno = $request->seatno;
        $id = Auth::user()->travllerinfo->id;
        // dd($id);

        $bookingdetail = new Bookingdetail;
        $bookingdetail->travllerinfo_id=$id;
        $bookingdetail->route_id = $request->route_id;
        $bookingdetail->no_people=$request->city_seat;
        $bookingdetail->total=$request->total;
        $bookingdetail->seat_no =$request->seatno;
        $bookingdetail->departure_date =$request->departure_date;

        $bookingdetail->save();
        //return view
        return redirect()->route('homepage')->with('message','You booking successfully!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bookingdetail  $bookingdetail
     * @return \Illuminate\Http\Response
     */
    public function show(Bookingdetail $bookingdetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bookingdetail  $bookingdetail
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookingdetail $bookingdetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bookingdetail  $bookingdetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bookingdetail $bookingdetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bookingdetail  $bookingdetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookingdetail $bookingdetail)
    {
        //
    }
}
