<?php

namespace App\Http\Controllers;

use App\Models\rooms;
use App\Http\Requests\StoreroomsRequest;
use App\Http\Requests\UpdateroomsRequest;
use App\Trait\ImageTrait;
class RoomsController extends Controller
{
    use ImageTrait;
    public function index()
    {
        $rooms=rooms::orderBy('id')->get();
        return view('back.Admin.rooms')->with('rooms',$rooms);
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
     * @param  \App\Http\Requests\StoreroomsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreroomsRequest $request)
    {
       
        
        $room = new rooms();
        $room->code=$request->code;
        $room->cost=$request->cost;
        $room->type=$request->type;
        $room->floor=$request->floor;
        $room->bids=$request->bids;
        $room->TV=$request->TV;
        $room->wifi=$request->WIFI;
        $room->parking=$request->Parking;
        $room->AC=$request->AC;
        $room->pool=$request->pool;
        
        $room->image = $request->hasFile('img')? $this->saveImage($request->img, 'img/room'):"default.png";
        if($room->save())
            return redirect()->route('admin.rooms.index')->with(['successAdd'=>'done']);
        return back()->with(['errorAdd'=>'error']);
    }

    











    
    public function show(rooms $rooms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function edit(rooms $rooms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateroomsRequest  $request
     * @param  \App\Models\rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateroomsRequest $request, $id)
    {
        $room = rooms::findOrFail($id);
        if(!$room){
            return redirect()->back()->with(['errorEditRoom'=>'cant update  ']);
        }else{
            $room->code=$request->code;
            $room->cost=$request->cost;
            $room->bids=$request->bids;
            $room->floor=$request->floor;
            $room->type=$request->type;
            $room->TV=$request->TV;
            $room->wifi=$request->WIFI;
            $room->parking=$request->Parking;
            $room->AC=$request->AC;
            $room->pool=$request->pool;
           
            if($room->save())
            return redirect()->route('admin.rooms.index')->with(['successEdit'=>'update done  ']);
            return redirect()->route('admin.rooms.index')->with(['successEdit'=>'er  ']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function destroy($room_id)
    {
        
        $room = rooms::find($room_id);
        $room->is_active *= -1;
        if($room->save())
            return back();
    }
}
