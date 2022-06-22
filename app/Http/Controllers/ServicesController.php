<?php

namespace App\Http\Controllers;

use App\Models\services;
use App\Http\Requests\StoreservicesRequest;
use App\Http\Requests\UpdateservicesRequest;
use App\Trait\ImageTrait;
class ServicesController extends Controller
{
    use ImageTrait;
    public function index()
    {
        $services=services::orderBy('id')->get();
        return view('back.Admin.services')->with('services',$services);
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
     * @param  \App\Http\Requests\StoreservicesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreservicesRequest $request)
    {
         
        
        $sevice = new services();
        $sevice->name=$request->name;
        $sevice->cost=$request->cost;
        $sevice->type=$request->type;
        $sevice->pic= $request->hasFile('pic')? $this->saveImage($request->pic, 'img/services'):"default.png";
        if($sevice->save())
            return redirect()->route('admin.service.index')->with(['successAdd'=>'done']);
        return back()->with(['errorAdd'=>'error']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit(services $services)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateservicesRequest  $request
     * @param  \App\Models\services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateservicesRequest $request,$id)
    {
        $serv = services::findOrFail($id);
        if(!$serv){
            return redirect()->back()->with(['errorEditService'=>'cant update  ']);
        }else{
            $serv->update($request->except(['_token']));
            return redirect()->route('admin.service.index')->with(['successEdit'=>'update done  ']);
        }
        
        
        
        
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy($service_id)
    {
        $service = services::find($service_id);
        $service->is_active *= -1;
        if($service->save())
            return back();
    }
}
