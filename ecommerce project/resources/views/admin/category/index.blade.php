@extends('layouts.admin')

@section('content')
<div class ="card">
<div class="card-header">
<h4>category page</h4>
<a href =" {{url('add-category')}}" class="btn btn-primary">Add Category</a>
     <div class="card-body">
          <table class="table table-bordered table-striped">
               <thead>
                    <tr>
                         <th>Id</th>
                         <th>Name</th>
                         <th>Description</th>
                         <th>image</th>
                         <th>Action</th>
</tr>
</thead>
<tbody>
     @foreach($category as $item)
     <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->description}}</td>
                  <td>
                     <img src=" {{('assets/uploads/category/'.$item->image)}}"class="w-100"alt="Image here" >
                    </td>
                 
                  
                      <td>
                            <a href ="{{ url('edit-prod/'.$item->id) }}" class="btn btn-primary">Edit</a>
                            <a href ="{{ url('delete-category/'.$item->id) }}" class="btn btn-danger">Delete</a>
                            
                      </td>
                  
              </tr>
              @endforeach
</tbody>
</div>
</div>
@endsection