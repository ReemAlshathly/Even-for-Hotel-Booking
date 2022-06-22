@extends('back.partials.master')
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
                <h3 class="page-title">Services</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col">
             
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                      
                    <h6 class="m-0">Active Services</h6>
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
                          <th scope="col" class="border-0">Imge</th>
                          <th scope="col" class="border-0">Name</th>
                          <th scope="col" class="border-0">Cost</th>
                          <th scope="col" class="border-0">Type</th>
                          <th scope="col" class="border-0">Oprations</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($services as $service)
                                        <div class="modal fade" id="editModal-{{ $service->id }}" tabindex="-1"
                                            aria-hidden="true">
                                           <div class="modal-dialog" role="document">
                                               <form action="{{ route('admin.service.update', $service->id) }}"
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
                                                               <div class="col mb-3">
                                                                   <label for="editTitle" class="form-label">name of service
                                                                       </label>
                                                                   <input type="text" id="editTitle"
                                                                          class="form-control" name="name"
                                                                          value="{{ $service->name }}"
                                                                          placeholder="name of service ">
                                                               </div>
                                                           </div>
                                                           <div class="row">
                                                               <div class="col mb-3">
                                                                   <label for="editDesc"
                                                                          class="form-label">Cost of service</label>
                                                                   <input type="text" id="editDesc"
                                                                          class="form-control" name="cost"
                                                                          value="{{ $service->cost }}"
                                                                          placeholder=" Cost of service">
                                                               </div>
                                                           </div>
                                                           <div class="row">
                                                               <div class="col mb-3">
                                                                   <label for="editDesc"
                                                                          class="form-label">Type of service</label>
                                                                   <input type="text" id="editDesc"
                                                                          class="form-control" name="type"
                                                                          value="{{ $service->type }}"
                                                                          placeholder="Type of service">
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
                          <td>{{ $service->id }}</td>
                          <td class="py-1">
                           <img src="/img/services/{{ $service->pic }}" style="width:40%;height:90px;    border-radius: 30px;" alt="image" />
                                                </td>
                          <td>{{ $service->name }}</td>
                          <td>{{ $service->cost }}</td>
                          <td>{{ $service->type }}</td>
                          
                          <td style="display :flex;flex-direction:row">
                          <a href="Adminservice" style="width: fit-content;font-size:30px;color:#686868"
                                                        class="mt-1 btn-fw btn-rounded "
                                                        data-target="#editModal-{{ $service->id }}"
                                                        data-toggle="modal">

                                                        <i class="material-icons">edit</i>
                                                    </a>    
                          
                          
                          <form action="{{ route('admin.service.destroy', $service->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        @if ($service->is_active == 1)
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
                <form action="{{ route('admin.service.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel1"> add services</h5>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="title" class="form-label">name </label>
                                    <input type="text" id="title" class="form-control" name="name"
                                        placeholder=" name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="title" class="form-label">Imge </label>
                                    <input type="file" id="title" class="form-control" name="pic"
                                        placeholder=" Imge">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="description" class="form-label">cost</label>
                                    <input type="text" id="description" class="form-control" name="cost"
                                        placeholder="cost">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="description" class="form-label">type</label>
                                    <input type="text" id="description" class="form-control" name="type"
                                        placeholder="type">
                                </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">إلغاء</button>
                            <button type="submit" class="btn  text-white" style="background:#a68e47">إضافة</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

     
@endsection