@extends('layouts.layouts')


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="product_create" title="Create a product"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p></p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>model</th>
            <th>description</th>
            <th>Price</th>
           <th>Actions</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>#</td>
            <td>{{$product->name}}</td>
                  <td>{{$product->model}}</td>
                  <td>{{$product->description}}</td>
                  <td>{{$product->price}}</td>
                
                <td>
                     <a href="product_show" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="product_edit">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a>
                        <a href="product_delete">
                        <i class="fas fa-trash fa-lg text-danger"></i>
                       

                </td>
            </tr>
        @endforeach
    </table>

    {!! $products->links() !!}


