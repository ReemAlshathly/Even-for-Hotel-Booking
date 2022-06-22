<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\services;
use App\Models\rooms;
use App\Models\hotel;
use App\Models\soial;
class siteController extends Controller
{
    public function roomsShow(){
      $detials = hotel::get(); 
        $rooms = rooms::where('is_active', '1')->get();
        return view('Front.rooms', ['rooms' => $rooms,'detials'=>  $detials]);
    }
    public function showaboutus(){
      $detials = hotel::get(); 
       
        return view('Front.aboutUs', ['detials'=>  $detials]);
    }
    public function Contact(){
      $detials = hotel::get();
      $soial = soial::get(); 
       
        return view('Front.contactUs', ['detials'=>  $detials,'soials'=>  $soial]);
    }
    public function roomBooking($id){
      $detials = hotel::get(); 
       
            $rooms = rooms::whereId($id)->get()->first();
            return view('Front.Booking')->with([
              'rooms'=>  $rooms,
              'detials'=>  $detials,
            ]);


    
}
public function showServices(){
  $detials = hotel::get();     
  $services = services::where('is_active', '1')->get();
  return view('Front.services')->with([
    'services'=>  $services,
    'detials'=>  $detials,
  ]);



}
public function showdetials(){
  $rooms = rooms::where('is_active', '1')->take(4)->get(); 
  $detials = hotel::get();
  return view('Front.index')->with([
    'rooms' => $rooms, 
    'detials'=>  $detials,
  ]);



}
}
