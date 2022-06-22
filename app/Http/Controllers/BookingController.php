<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Http\Requests\StorebookingRequest;
use App\Http\Requests\UpdatebookingRequest;
use App\Models\guster;
use App\Models\document;
use App\Models\rooms;
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $booking = booking::orderBy('id', 'desc')->get();
        $rooms = rooms::where('is_active', 1)->get();
        $gusters = guster::get();
        $documents = document::get();
        return view('back.Admin.booking')->with([
            'bookings'=> $booking,
            'gusters'  => $gusters,
            'documents'  => $documents,
            'rooms'  => $rooms
        ]);
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
     * @param  \App\Http\Requests\StorebookingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebookingRequest $request)
    {
        $guster = guster::create([
            'name'      => $request->input('fullname'),
            'type'    => $request->input('numberOfGustes'),
            'phone'=> $request->input('gysterype'),
            
        ]);
        $booking = booking::create([
            'guster_id'     => $guster->id,
            'numberOfGustes'     => $request->input('numberOfGustes'),
            'adults'        => $request->input('adults'),
            'chaildren'       => $request->input('chaildren'),
            'typeOfBooking'           => $request->input('bookingType'),
            'from'           => $request->input('from'),
            'to'  => $request->input('to'),
            'room_id'     => $request->input('roomid'),
            'status'     => $request->input('status'),
            
            
           
        ]);
        
        $document = document::create([
            'name'      => $request->input('name'),
            'cardNo'    => $request->input('card'),
            'guster_id'       => $guster->id,
            
        ]);
        $roomid =$request->input('roomid');
        $room = rooms::find($roomid);

        // Make sure you've got the Page model
        if($room) {
            $room->status= '2';
            $room->save();
        }

        
        return redirect()->route('site.rooms.booking', $roomid)
            ->with('successSubmit','you have booked room');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(booking $booking)
    {
        
        $booking = booking::orderBy('id', 'desc')->get();
        $rooms = rooms::where('is_active', 1)->get();
        $gusters = guster::get();
        $documents = document::get();
        return view('back.Admin.booking')->with([
            'bookings'=> $booking,
            'gusters'  => $gusters,
            'documents'  => $documents,
            'rooms'  => $rooms
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebookingRequest  $request
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebookingRequest $request, booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy($booking_id)
    {
        $booking = booking::find($booking_id);
        $roomid=$booking->room_id;
        $room = rooms::find($roomid);
        
        if($booking->status ==1 ){
        $booking->status=2 ;
        $room->status =1;
        
        }
        if($room->save() && $booking->save())
            return back();  
    }
}
