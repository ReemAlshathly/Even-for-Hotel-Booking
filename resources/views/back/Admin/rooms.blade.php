@extends('back.partials.master')

<!-- dropfiy:css -->
<link rel="stylesheet" href="assets/css/maps/dropfiy.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/fonts/dropify.eot">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/fonts/dropify.svg">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/fonts/dropify.ttf">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/fonts/dropify.woff">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@section('body')

 <!-- / .main-navbar -->
 <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">manage</span>
                <h3 class="page-title">rooms</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col">
             
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                      
                    <h6 class="m-0">Active rooms</h6>
                    <button type="button" data-target="#addModal" data-toggle="modal"
                class="btn  btn-rounded btn-icon add  me-8" style="background:#a68e47; direction:rtl;color:#fff;font-size:20px">
                <i class="material-icons">add</i>
            </button>
                  </div>
                  
                  <div class="card-body p-0 pb-3 text-center">
                  @if (session()->has('errorEdit'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session()->get('errorEdit') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            @if (session()->has('successAdd'))
                                <div class="alert alert-success alert-dismissible fade show">
                                    {{ session()->get('successAdd') }}
                                    <button type=" button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            @if (session()->has('errorAdd'))
                                <div class="alert alert-success alert-dismissible fade show">
                                    {{ session()->get('errorAdd') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show">
                                    <ul class="m-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <button type="button" class="btn-close" data-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">#</th>
                          <th scope="col" class="border-0">image</th>
                          <th scope="col" class="border-0">code</th>
                          <th scope="col" class="border-0">cost</th>
                          <th scope="col" class="border-0">status</th>
                          <th scope="col" class="border-0">number of bids</th>
                          <th scope="col" class="border-0">floor</th>
                          <th scope="col" class="border-0">type</th>
                          <th scope="col" class="border-0">TV </th>
                          <th scope="col" class="border-0">WIFI </th>
                          <th scope="col" class="border-0">BARKING </th>
                          <th scope="col" class="border-0">AC </th>
                          <th scope="col" class="border-0">POOL </th>
                                
                          <th scope="col" class="border-0">Oprations</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($rooms as $room)
                                        <div class="modal fade" id="editModal-{{ $room->id }}" tabindex="-1"
                                            aria-hidden="true">
                                           <div class="modal-dialog" role="document">
                                           <form action="{{ route('admin.rooms.update', $room->id ) }}"
                                                     method="POST" enctype="multipart/form-data">
                                                   @csrf
                                                   @method('PATCH')
                                                   <div class="modal-content">
                                                       <div class="modal-header">
                                                           <h5 class="modal-title" id="exampleModalLabel1">Apdate service
                                                               </h5>
                                                       </div>
                                                       <div class="modal-body">
                                     <div class="row">
                                                           <div class="col-4 mb-2">
                                    <label for="description" class="form-label">code</label>
                                    <input type="text" id="description" class="form-control" name="code"
                                        placeholder="code" value="{{ $room->code }}">
                                </div>
                                                          
                                                           <div class="col-3 mb-3">
                                    <label for="description" class="form-label">floor</label>
                                    <select type="text" id="description" class="form-control" name="floor"
                                        placeholder="type" name="floor" value="">
                                        <option value="{{ $room->floor }}" >{{ $room->floor }}</option>
                                    <option value="1" >1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    </select>
                                </div>
                           
                                <div class="col-4 mb-2">
                                    <label for="description" class="form-label">cost</label>
                                    <input type="text" id="description" class="form-control" name="cost"
                                        placeholder="cost" value="{{ $room->cost }}">
                                </div>
                                <div class="col-4 mb-2">
                                    <label for="description" class="form-label">number of bids </label>
                                    <input type="number" id="description" class="form-control" name="bids"
                                        placeholder="bids" value="{{ $room->bids }}">
                                </div>
                                                           <div class="row">
                                                           <div class="col mb-3">
                                    <label for="description" class="form-label room-selector">Room Type</label>
                                    <select type="text" id="description" class="form-control" name="type"
                                        placeholder="type" name="type" >
                                        @if($room->type==0)
                                        <option value="{{ $room->type }}" >Standard Room
                                        </option>
                                            @elseif($room->type==1)
                                            <option value="{{ $room->type }}" >Double Room
                                        </option>
                                        @elseif($room->type==2)
                                            <option value="{{ $room->type }}" >joniur suite
                                        </option>
                                            @endif
                                        
                                    <option value="0" >Standard Room</option>
                                    <option value="1">Double Room</option>
                                    <option value="2">joniur suite</option>
                                    
                                    </select>
                                </div>
                                                           </div> </div>
                                                           <div class="row">
                                <div class="col mb-3">
                                    <label for="description">Services</label>
                                    <div class="custom-control custom-checkbox mb-1">
                                    @if ( $room->pool ==1)
                                      <input type="checkbox" class="custom-control-input" id="formspolling1{{$room->id}}"
                                       value="1" name="pool" checked>
                                       @else
                                      <input type="checkbox" class="custom-control-input" id="formspolling1{{$room->id}}"
                                       value="1" name="pool" >
                                        @endif
                                         <label class="custom-control-label" for="formspolling1{{$room->id}}">pool</label>
                                    </div>
                            <div class="custom-control custom-checkbox mb-1">
                            @if ( $room->TV== 1 )
                             
                              <input type="checkbox" class="custom-control-input" id="formstv1{{$room->id}}"
                               value="1" name="TV" checked>
                               @else
                               <input type="checkbox" class="custom-control-input" id="formstv1{{$room->id}}"
                               value="1" name="TV" >
                               @endif
                               <label class="custom-control-label" for="formstv1{{$room->id}}">TV</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                            @if ( $room->AC ==1)
                              <input type="checkbox" class="custom-control-input" id="formsAC1{{$room->id}}"
                               value="1" name="AC" checked>
                               @else
                               <input type="checkbox" class="custom-control-input" id="formsAC1{{$room->id}}"
                               value="1" name="AC" >
                               @endif
                              <label class="custom-control-label" for="formsAC1{{$room->id}}">AC</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                            @if ( $room->parking ==1)
                               <input type="checkbox" class="custom-control-input" id="formsparking1{{$room->id}}"
                               value="1" name="Parking" checked>
                               @else
                               <input type="checkbox" class="custom-control-input" id="formsparking1{{$room->id}}"
                               value="1" name="Parking" >
                               @endif
                             
                              <label class="custom-control-label" for="formsparking1{{$room->id}}">Parking</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                            @if ( $room->wifi ==1)
                              <input type="checkbox" class="custom-control-input" id="formswifi1{{$room->id}}"
                               value="1" name="WIFI" checked>
                               <label class="custom-control-label" for="formswifi1{{$room->id}}">WIFI</label>
                               @else
                               <input type="checkbox" class="custom-control-input" id="formswifi2"
                               value="1" name="WIFI" >
                               <label class="custom-control-label" for="formswifi2{{$room->id}}">WIFI</label>
                               @endif
                              
                             
                            </div>
                            
                                </div>
                               
                            
                            </div>
                                                       </div>

                                                       <div class="modal-footer">
                                                           <button type="button" class="btn btn-outline-secondary"
                                                                   data-dismiss="modal">إلغاء</button>
                                                           <button type="submit"
                                                                   class="btn  text-white" style="background:#a68e47">update</button>
                                                       </div>
                                                   </div>
                                               </form>
                                               <!-- <form action="{{ route('admin.rooms.destroy', $room->id) }}"
                                                     method="POST" enctype="multipart/form-data">
                                                   @csrf
                                                   @method('PATCH')
                                                   <div class="modal-content">
                                                       <div class="modal-header">
                                                           <h5 class="modal-title" id="exampleModalLabel1">Update service
                                                               </h5>
                                                       </div>
                                                       <div class="modal-body">
                           
                           
                            <div class="row">
                                <div class="col-4 mb-2">
                                    <label for="description" class="form-label">code</label>
                                    <input type="text" id="description" class="form-control" name="code"
                                        placeholder="code" value="{{ $room->code }}">
                                </div>
                                <div class="col-3 mb-3">
                                    <label for="description" class="form-label">floor</label>
                                    <select type="text" id="description" class="form-control" name="floor"
                                        placeholder="type" name="floor" value="{{ $room->floor }}">
                                        <option value="{{ $room->floor }}" >{{ $room->floor }}</option>
                                    <option value="1" >1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    </select>
                                </div>
                           
                                <div class="col-4 mb-2">
                                    <label for="description" class="form-label">cost</label>
                                    <input type="text" id="description" class="form-control" name="cost"
                                        placeholder="cost" value="{{ $room->cost }}">
                                </div>
                           
                                <div class="col-4 mb-2">
                                    <label for="description" class="form-label">number of bids </label>
                                    <input type="number" id="description" class="form-control" name="bids"
                                        placeholder="bids" value="{{ $room->bids }}">
                                </div>
                            
                               
                           
                                <div class="col mb-3">
                                    <label for="description" class="form-label room-selector">Room Type</label>
                                    <select type="text" id="description" class="form-control" name="type"
                                        placeholder="type" name="type" value="{{ $room->type }}">
                                        @if($room->type==0)
                                        <option value="{{ $room->type }}" >Standard Room
                                        </option>
                                            @elseif($room->type==1)
                                            <option value="{{ $room->type }}" >Double Room
                                        </option>
                                        @elseif($room->type==2)
                                            <option value="{{ $room->type }}" >joniur suite
                                        </option>
                                            @endif
                                        
                                    <option value="0" >Standard Room</option>
                                    <option value="1">Double Room</option>
                                    <option value="2">joniur suite</option>
                                    
                                    </select>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="description">Services</label>
                                    <div class="custom-control custom-checkbox mb-1">
                                    @if ( $room->pool ==1)
                                      <input type="checkbox" class="custom-control-input" id="formspolling1"
                                       value="1" name="pool" checked>
                                       @else
                                      <input type="checkbox" class="custom-control-input" id="formspolling1"
                                       value="0" name="pool" >
                                        @endif
                                         <label class="custom-control-label" for="formspolling1">pool</label>
                                    </div>
                            <div class="custom-control custom-checkbox mb-1">
                            @if ( $room->TV== 1 )
                             
                              <input type="checkbox" class="custom-control-input" id="formstv1"
                               value="1" name="TV" checked>
                               @else
                               <input type="checkbox" class="custom-control-input" id="formstv1"
                               value="0" name="TV" >
                               @endif
                               <label class="custom-control-label" for="formstv1">TV</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                            @if ( $room->AC ==1)
                              <input type="checkbox" class="custom-control-input" id="formsAC1"
                               value="1" name="AC" checked>
                               @else
                               <input type="checkbox" class="custom-control-input" id="formsAC1"
                               value="0" name="AC" >
                               @endif
                              <label class="custom-control-label" for="formsAC1">AC</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                            @if ( $room->parking ==1)
                               <input type="checkbox" class="custom-control-input" id="formsparking1"
                               value="1" name="Parking" checked>
                               @else
                               <input type="checkbox" class="custom-control-input" id="formsparking1"
                               value="0" name="Parking" >
                               @endif
                             
                              <label class="custom-control-label" for="formsparking1">Parking</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                            @if ( $room->wifi ==1)
                              <input type="checkbox" class="custom-control-input" id="formswifi1"
                               value="1" name="WIFI" checked>
                               <label class="custom-control-label" for="formswifi1">WIFI</label>
                               @else
                               <input type="checkbox" class="custom-control-input" id=""
                               value="0" name="WIFI" >
                               <label class="custom-control-label" for="formswifi2">WIFI</label>
                               @endif
                              
                             
                            </div>
                            
                                </div>
                               
                            
                            </div>
                            
                        </div>
                                                           
                                                       </div>
                                                       <div class="modal-footer">
                                                           <button type="button" class="btn btn-outline-secondary"
                                                                   data-dismiss="modal">إلغاء</button>
                                                           <button type="submit"
                                                                   class="btn  text-white" style="background:#f79827">update</button>
                                                       </div>
                                                   </div>
                                               </form> -->
                                           </div>
                                       </div>
                        <tr>
                          <td>{{ $room->id }}</td>
                          <td><img src="img/room/{{ $room->image }}" alt="image" style="width:100px"/></td>
                          <td>{{ $room->code }}</td>
                          <td>{{ $room->cost }}</td>
                          <td>


                              
                          @if ($room->status== 1 )
                          <span>free</span>

                          @else
                          <span>booking</span>

                         
                          @endif
                          </td>
                          <td>{{ $room->bids }}</td>
                          <td>{{ $room->floor }}</td>
                          <td>
                              
                          @if ($room->type== 0 )
                          <span>Standard Room</span>

                          @elseif ($room->type== 1 )
                          <span>Double Room</span>

                          @elseif ($room->type== 2 )
                          <span>joniur suite</span>
                          @endif
                          
                         




                          </td>
                          <td>
                          @if ($room->TV== 1 )
                                                           <i class="material-icons" style="color:green;margin-right:10%">done</i>
                          
                          @else
                                                            <i class="material-icons" style="color:red;margin-right:10%">close</i>
                                                          
                          @endif
</td>
<td>
                         @if ($room->wifi== 1 )
                         <i class="material-icons" style="color:green;margin-right:8%">done</i>
                          
                          @else
                          <i class="material-icons" style="color:red;margin-right:8%">close</i>
                                                            
                         @endif 
</td>
<td>
                         @if ($room->parking== 1 )
                         <i class="material-icons" style="color:green;margin-right:8%">done</i>
                          
                          @else
                          <i class="material-icons" style="color:red;margin-right:8%">close</i>
                                                            
                         @endif
</td>
<td>
                         @if ($room->AC== 1 )
                         <i class="material-icons" style="color:green;margin-right:8%">done</i>
                          
                          @else
                          <i class="material-icons" style="color:red;margin-right:8%">close</i>
                                                            
                         @endif
</td>
<td>
                         @if ($room->pool== 1 )
                         <i class="material-icons" style="color:green;margin-right:8%">done</i>
                          
                          @else
                          <i class="material-icons" style="color:red;margin-right:8%">close</i>
                                                            
                         @endif                              
</td>
                          
                          

                          <td style="display :flex;flex-direction:row">
                          <a href="Adminservice" style="width: fit-content;font-size:30px;color:#686868"
                                                        class="mt-1 btn-fw btn-rounded "
                                                        data-target="#editModal-{{ $room->id }}"
                                                        data-toggle="modal">

                                                        <i class="material-icons">edit</i>
                                                    </a>    
                          
                          
                          <form action="{{ route('admin.rooms.destroy', $room->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        @if ($room->is_active == 1)
                                                            <button
                                                                class=" btn d-flex align-items-center
                                                                    font-weight-inverse-success
                                                              btn-rounded  
                                                           "
                                                                style="color:#71c016;font-size:30px;background-color:#FFF" > <i class="material-icons">delete</i>
                                                            </button>
                                                            @else
                                                            <button style="color:red;font-size:30px;background-color:#FFF"
                                                                class="
                                                            btn d-flex align-items-center fas fa-trash-restore pe-2
                                                             "><i class="material-icons">delete</i>
                                                            </button>
                                                        @endif
                                                    </form></td>
                         
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Default Light Table -->
            
          </div>
          <div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="{{ route('admin.rooms.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                        <strong class="text-muted d-block mb-2">Add Rooms</strong>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="title" class="form-label">imge </label>
                                    <input type="file" name="img" class="dropify" multiple>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-4 mb-2">
                                    <label for="description" class="form-label">code</label>
                                    <input type="text" id="description" class="form-control" name="code"
                                        placeholder="code">
                                </div>
                                <div class="col-3 mb-3">
                                    <label for="description" class="form-label">floor</label>
                                    <select type="text" id="description" class="form-control" name="floor"
                                        placeholder="type" name="floor">
                                    <option value="1" >1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    </select>
                                </div>
                           
                                <div class="col-4 mb-2">
                                    <label for="description" class="form-label">cost</label>
                                    <input type="text" id="description" class="form-control" name="cost"
                                        placeholder="cost">
                                </div>
                           
                                <div class="col-4 mb-2">
                                    <label for="description" class="form-label">number of bids </label>
                                    <input type="number" id="description" class="form-control" name="bids"
                                        placeholder="bids">
                                </div>
                            
                               
                           
                                <div class="col mb-3">
                                    <label for="description" class="form-label">Type</label>
                                    <select type="text" id="description" class="form-control" name="type"
                                        placeholder="type" name="type">
                                    <option value="0" >Standard Room</option>
                                    <option value="1">Double Room</option>
                                    <option value="2">joniur suite</option>
                                    
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="description">Services</label>
                                    <div class="custom-control custom-checkbox mb-1">
                              <input type="checkbox" class="custom-control-input" id="formspolling" value="1" name="pool" checked>
                              <label class="custom-control-label" for="formspolling">pool</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                              <input type="checkbox" class="custom-control-input" id="formstv" value="1" name="TV" checked>
                              <label class="custom-control-label" for="formstv">TV</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                              <input type="checkbox" class="custom-control-input" id="formsAC" value="1" name="AC" checked>
                              <label class="custom-control-label" for="formsAC">AC</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                              <input type="checkbox" class="custom-control-input" id="formsparking" value="1" name="Parking" checked>
                              <label class="custom-control-label" for="formsparking">Parking</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                              <input type="checkbox" class="custom-control-input" id="formswifi" value="1" name="WIFI" checked>
                              <label class="custom-control-label" for="formswifi">WIFI</label>
                            </div>
                                </div>
                               
                            
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">cancle</button>
                            <button type="submit" class="btn  text-white" style="background:#a68e47">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

     
@endsection