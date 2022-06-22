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
{{-- tiny editor --}}
    <script type="text/javascript"
        src="https://cdn.tiny.cloud/1/q6t3hc09adutz0zx8yu3y7y69c75wwfeg3ux14tbrxthyd8g/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '.myTextarea',
            width: 600,
            height: 300,
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                'table emoticons template paste help'
            ],
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
                'forecolor backcolor emoticons | help',
            menu: {
                favs: {
                    title: 'My Favorites',
                    items: 'code visualaid | searchreplace | emoticons'
                }
            },
            menubar: 'favs file edit view insert format tools table help',
            content_css: 'css/content.css'
        });
    </script>
    {{-- end --}}
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
                          <th scope="col" class="border-0">logo</th>
                          <th scope="col" class="border-0">street</th>
                          <th scope="col" class="border-0">address</th>
                          <th scope="col" class="border-0">city</th>
                          <th scope="col" class="border-0">country</th>
                          <th scope="col" class="border-0">reception</th>
                          <th scope="col" class="border-0">service</th>
                          <th scope="col" class="border-0">Restaurant</th>
                          <th scope="col" class="border-0">description</th>
                          <th scope="col" class="border-0">opertions</th>
                          
                         
                        </tr>
                      </thead>
                      <tbody>
                     
                      @foreach ($hotel as $hotels) 
                      <div class="modal fade" id="editModal-{{$hotels->id }}" tabindex="-1"
                                            aria-hidden="true">
                                           <div class="modal-dialog" role="document">
                                               <form action="{{ route('front.hotel.update',$hotels->id ) }}"
                                                     method="POST" enctype="multipart/form-data">
                                                   @csrf
                                                   @method('PATCH')
                                                   <div class="modal-content">
                                                       <div class="modal-header">
                                                           <h5 class="modal-title" id="exampleModalLabel1">Update hotel informatins
                                                               </h5>
                                                       </div>
                                                       <div class="modal-body">
                                                           <div class="row">
                                                               <div class="col mb-3">
                                                                   <label for="editTitle" class="form-label">Logo
                                                                       </label>

                                                                   <input type="file" id="editTitle"
                                                                          class="form-control" name="logo"
                                                                          value="{{ $hotels->logo }}"
                                                                          placeholder="name of service ">
                                                               </div>
                                                               <div class="col mb-3">
                                                                   <label for="editDesc"
                                                                          class="form-label">Address</label>
                                                                   <input type="text" id="editDesc"
                                                                          class="form-control" name="address"
                                                                          value="{{ $hotels->address }}"
                                                                          placeholder="Address">
                                                               </div>
                                                           </div>
                                                           <div class="row">
                                                           
                                                               <div class="col mb-3">
                                                                   <label for="editDesc"
                                                                          class="form-label">Street</label>
                                                                   <input type="number" id="editDesc"
                                                                          class="form-control" name="street"
                                                                          value="{{ $hotels->street }}"
                                                                          placeholder=" street">
                                                               </div>
                                                               
                                                               <div class="col mb-3">
                                                                   <label for="editDesc"
                                                                          class="form-label">City</label>
                                                                   <input type="text" id="editDesc"
                                                                          class="form-control" name="city"
                                                                          value="{{ $hotels->city }}"
                                                                          placeholder="city">
                                                               </div>
                                                               <div class="col mb-3">
                                                                   <label for="editDesc"
                                                                          class="form-label">Country</label>
                                                                   <input type="text" id="editDesc"
                                                                          class="form-control" name="country"
                                                                          value="{{ $hotels->country }}"
                                                                          placeholder="country">
                                                               </div>
                                                           </div>
                                                           <br>
                                                           <h6 class="modal-title" id="exampleModalLabel1"> Hotel phones
                                                               </h6><br>
                                                           <div class="row">

                                                           <div class="col mb-3">
                                                                   <label for="editDesc"
                                                                          class="form-label">reception	</label>
                                                                   <input type="text" id="editDesc"
                                                                          class="form-control" name="reception"
                                                                          value="{{ $hotels->reception }}"
                                                                          placeholder=" street">
                                                               </div>
                                                               
                                                               <div class="col mb-3">
                                                                   <label for="editDesc"
                                                                          class="form-label">service	</label>
                                                                   <input type="text" id="editDesc"
                                                                          class="form-control" name="service"
                                                                          value="{{ $hotels->service }}"
                                                                          placeholder="service">
                                                               </div>
                                                               <div class="col mb-3">
                                                                   <label for="editDesc"
                                                                          class="form-label">Restaurant</label>
                                                                   <input type="text" id="editDesc"
                                                                          class="form-control" name="Restaurant"
                                                                          value="{{ $hotels->Restaurant }}"
                                                                          placeholder="Restaurant">
                                                               </div>
</div>
<div class="row">
<div class="col-12 w-100  mb-4 d-flex justify-content-center align-items-center">
                                            <textarea type="text" class="w-100 bg-transparent dark-placeholder form-control "
                                             row="20" name="description"
                                                placeholder="description" 
                                                value="{{ $hotels->description}}"
                                               >{{ $hotels->description}}</textarea>
                                            @error('description')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
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
                                           </div>
                                       </div>        
                        <tr>

                          <td>{{ $hotels->id }}</td>
                          <td  > <img src="/img/{{ $hotels->logo }}" style="width:120%;height:80px;background:#a68e47    border-radius: 10px;" alt="image" />
                                               </td>
                          <td>{{ $hotels->street }}</td>
                          <td>{{ $hotels->address }}</td>
                          <td>{{ $hotels->city }}</td>
                          <td>{{ $hotels->country }}</td>
                          <td>{{ $hotels->reception }}</td>
                          <td>{{ $hotels->service }}</td>
                          <td>{{ $hotels->Restaurant }}</td>
                          <td>{{ $hotels->description }}</td>
                          <td> <a href="Adminservice" style="width: fit-content;font-size:30px;color:#686868"
                                                        class="mt-1 btn-fw btn-rounded "
                                                        data-target="#editModal-{{$hotels->id}}"
                                                        data-toggle="modal">

                                                        <i class="material-icons">edit</i>
                                                    </a>   </td>
                         
                         
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