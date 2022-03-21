@extends('layouts.admin')

@section('content')
<div class ="card">
<div class="card-header">
<h4>Product page</h4>
<a href =" {{url('add-product')}}" class="btn btn-primary">Add Product</a>
     <div class="card-body">
          <table class="table table.bordered table-striped">
               <thead>
                    <tr>
                         <th>Id</th>
                         <th>Cate_id</th>
                         <th>Name</th>
                         <th>Slug</th>
                         <th>small_desc</th>
                         <th>Quantity</th>
                         <th>selling_price</th>
                         <th>original_price</th>
                         
                         <th>image</th>
                         <th>Action</th>
</tr>
</thead>
<tbody>
     @foreach($products as $item)
     <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->cate_id}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->slug}}</td>
                  <td>{{$item->small_desc}}</td>
                  <td>{{$item->qty}}</td>
                  <td>{{$item->selling_price}}</td>
                  <td>{{$item->original_price}}</td>
               
                  <td>
                     <img src=" {{('assets/uploads/product/'.$item->image)}}"class="w-100"alt="Image here" >
                    </td>
                 
                  
                      <td>
                            <a href ="{{ url('edit-product/'.$item->id) }}" class="btn btn-primary">Edit</a>
                            <a href ="{{ url('delete-product/'.$item->id) }}" class="btn btn-danger">Delete</a>
                            
                      </td>
                  
              </tr>
              @endforeach
</tbody>
</div>
</div>
@endsection