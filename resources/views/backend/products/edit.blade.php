@extends('backend.layouts.master')
@section('content')
<main class="app-main"> <!--begin::App Content Header-->
            <div class="app-content-header"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Edit Product</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Edit Product
                                </li>
                            </ol>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content Header-->
             <!--begin::App Content-->
           

             <div class="card card-primary card-outline mb-4"> <!--begin::Header-->
                                <div class="card-header">
                                    <div class="card-title">Add Which you want</div>
                                </div> <!--end::Header--> <!--begin::Form-->
                                <form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data"> <!--begin::Body-->
                                    @csrf @method('put')
                                    <div class="card-body">

                                        <div class="mb-3">
                                             <label for="name" class="form-label">Name</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$product->name}}">
                                        </div>

                                        <div class="mb-3">
                                             <label for="price" class="form-label">Price</label>
                                              <input type="number" class="form-control" id="exampleInputPassword1" name="price"  value="{{$product->price}}"> 
                                        </div>

                                        <div class="mb-3">
                                             <label for="des" class="form-label">Description</label>
                                              <input type="text" class="form-control" id="exampleInputPassword1" name="description"  value="{{$product->description}}"> 
                                        </div>

                                        <div class="input-group mb-3">
                                          <input type="file" class="form-control" id="inputGroupFile02" name="image" required  value="{{$product->image}}"> 
                                          <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                        </div>
                                    </div> <!--end::Body--> <!--begin::Footer-->
                                    <div class="card-footer"> 
                                        <button type="submit" class="btn btn-primary">Update</button>
                                     </div> <!--end::Footer-->
                                </form> <!--end::Form-->
                            </div>
        </main> <!--end::App Main--> 
        @endsection