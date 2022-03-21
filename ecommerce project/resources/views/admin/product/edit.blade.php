@extends('layouts.admin')
@section('content')
<div class ="card">
    <div class="card-header">
    <h4> Edit/Update product</h4>
</div>
     <div class="card-body">
         <form action ="{{url('update-product/'.$products->id)}}" method ='post' enctype='multipart/form-data'>
               @csrf
              
             <div class='row'>
             
                    </div>
                    <div class ='col-md-6'>
                     <label for =''>Name</label>
                     <input type ='text' class='form-control' value="{{$products->name}}" name='name'>
                    </div>
                    <div class ='col-md-6'>
                     <label for =''>Slug</label>
                     <input type ='text' class='form-control' value="{{$products->slug}}" name='slug'>
                    </div>
                   
                    <div class ='col-md-12'>
                     <label for =''>Small Description</label>
                     <textarea name ='small_desc'rows='3' class='form-control'>"{{$products->small_desc}}"</textarea>
                    </div>
                    <div class ='col-md-6'>
                     <label for =''>Quantity</label>
                     <input type ='number'class='form-control'value="{{$products->qty}}"name='qty'>
                    </div>
                    <div class ='col-md-6'>
                     <label for =''>selling_price</label>
                     <input type ='number'class='form-control'value="{{$products->price}}"name='selling_price'>
                    </div>
                    <div class ='col-md-6'>
                     <label for =''>original_price</label>
                     <input type ='number'class='form-control'value="{{$products->price}}"name='original_price'>
                    </div>

                    <div class ='col-md-12'>
                     <label for =''>Description</label>
                     <textarea name ='description'rows='3' class='form-control'?>"{{$products->description}}"</textarea>
                    </div>
                    <div class ='col-md-6 mb-3'>
                     <label for =''>Status</label>
                     <input type ='checkbox' {{$products->status ?'checked': ''}} name='status'>
                    </div>
                    <div class ='col-md-6 mb-3'>
                     <label for =''>Trending</label>
                     <input type ='checkbox' {{$products->trending ?'checked': ''}} name='trending'>
                    </div>
                    
                    @if ($products->image)
                    <img src="{{asset('assets/uploads/product/'.$products->image)}}"alt="">
                    @endif
                    <div class='col-md-12'>
                        <input type='file' name="image" class='form-control'>
                    </div>
                    
                     <div class='col-md-12'>
                        <button type='submit'class='btn btn-primary'>submit</button>
                     </div>
                </div>
            </form>
</div>
</div>
@endsection