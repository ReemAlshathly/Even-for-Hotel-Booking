<?php

namespace App\Http\Controllers;

use App\Models\hotel;
use App\Http\Requests\StorehotelRequest;
use App\Http\Requests\UpdatehotelRequest;
use App\Trait\ImageTrait;
class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotel=hotel::orderBy('id')->get();
        return view('back.Admin.hotel')->with('hotel',$hotel); 
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
     * @param  \App\Http\Requests\StorehotelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorehotelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatehotelRequest  $request
     * @param  \App\Models\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(StorehotelRequest $request, $id)
    {
        
        $hotel = hotel::findOrFail($id);
        if(!$hotel){
            return redirect()->back()->with(['errorEditService'=>'cant update  ']);
        }else{
            $hotel->update($request->except(['_token']));
            return redirect()->route('front.hotel.index')->with(['successEdit'=>'update done  ']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(hotel $hotel)
    {
        //
    }
}
