@extends('backend.layouts.master')
@section('content')
<main class="app-main"> <!--begin::App Content Header-->
            <div class="app-content-header"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">ALL Product</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="{{route('product.create')}}">Add Product</a>
                                </li>
                            </ol>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content Header-->
             <!--begin::App Content-->
          
             <table class="table table-border table-scriped">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>price</th>
                        <th>description</th>
                        <th>image</th>
                        <th>action seen of😁</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->description}}</td>
                        <td><img src="{{asset('images/'.$product->image)}}" alt="{{$product->image}}" width="100px" height="100px"></td>
                        <td><a href="{{route('product.edit',$product->id)}}" class="btn btn-primary">Edit</a>

                           <form action="{{route('product.destroy',$product->id)}}" method="post" style="display: inline;"> <!--begin::Body-->
                              @csrf @method('DELETE')
                              <button type="submit" class="btn btn-primary" onclick="return conform('are you sure you want to delete this product?');">Delete</button>
                           </form> 

                        </td>
                        <!--<td><a href="{{route('product.destroy',$product->id)}}" class="btn btn-primary">Delete</a></td>-->
                    </tr>
                    @endforeach
                </tbody>
             </table>
<a href="">Conform Order</a>
        </main> <!--end::App Main--> 
        @endsection