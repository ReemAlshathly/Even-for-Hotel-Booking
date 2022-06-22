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
                <h3 class="page-title">Booking</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col">
             
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                      
                    <h6 class="m-0">Active Bookings</h6>
                    
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
                          <th scope="col" class="border-0">Guster name</th>
                          <th scope="col" class="border-0">Guster card</th>
                          <th scope="col" class="border-0">GusterType</th>
                          <th scope="col" class="border-0">Room Code</th>
                          <th scope="col" class="border-0">Room Cost</th>
                          <th scope="col" class="border-0">Room floor</th>
                          <th scope="col" class="border-0">Room type</th>
                          <th scope="col" class="border-0">Booking type</th>
                          <th scope="col" class="border-0">from</th>
                          <th scope="col" class="border-0">To</th>
                          <th scope="col" class="border-0">Oprations</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                     
                      @foreach ($bookings as $booking)              
                        <tr>
                          <td>{{ $booking->id }}</td>
                         
                          <td>{{ $booking->guster->name }}</td>
                          <td>@foreach ($documents as $document)
                          @if($document->guster_id == $booking->guster->id)
                          {{ $document->cardNo }} 
                          
                          @endif
                          @endforeach</td>
                          <td> @if($booking->guster->type == 1 )
                              <span>one </span>
                              @elseif($booking->guster->type == 2)
                              <span>two </span>
                              @elseif($booking->guster->type == 3)
                              <span>group</span>
                              @endif
                          </td>
                          
                         
                          <td>
                          {{ $booking->room->code }} 
</td>
<td>
{{ $booking->room->cost }}$                    
</td>
<td>
{{ $booking->room->floor }}
</td>
<td>
    @if( $booking->room->type==0)
    Standard Room
    @elseif( $booking->room->type==1)
    Double Room
    @elseif( $booking->room->type==2)
    Junior Suite

    @endif
</td>
                        
                        
                        
                          <td>@if($booking->typeOfBooking ==1)
                              <span>Standard </span>
                              @elseif($booking->typeOfBooking ==2)
                              <span> VIP</span>
                              @endif
                          </td>
                          <td>{{ $booking->from }}</td>
                          <td>{{ $booking->to }}</td>

                          
                          

                          <td style="display :flex;flex-direction:row">
                             
                          
                          
                          <form action="{{ route('Admin.booking.destroy',$booking->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        
                                                        @if($booking->status ==1)
                          <button class=" btn d-flex align-items-center  font-weight-inverse-success btn-rounded  
                           "type="submit"      style="color:green;font-size:30px;background-color:#FFF;margin-right:20%" > 
                           <i class="material-icons">pending</i>
                            </button>
                          
                            @else
                            <i class="material-icons" style="color:red;font-size:30px;margin-left: 20px;">block</i> 

                         
                       
                            @endif
                                                    </form> </td>
                         
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
         

     
@endsection