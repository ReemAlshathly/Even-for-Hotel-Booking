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
                 
                            
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">#</th>
                          <th scope="col" class="border-0">name</th>
                          <th scope="col" class="border-0">Email</th>
                          <th scope="col" class="border-0">phone</th>
                          <th scope="col" class="border-0">Messages</th>
                          
                         
                        </tr>
                      </thead>
                      <tbody>
                     
                      @foreach ($contacts as $contact)              
                        <tr>
                          <td>{{ $contact->id }}</td>
                         
                          <td>{{ $contact->name }}</td>
                          <td>{{ $contact->email }}</td>
                          <td>{{ $contact->phone }}
                          </td>
                          <td>{{ $contact->message }}</td>
                          
                         
                         
                         
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