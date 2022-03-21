@extends('layouts.front')
@section('title')
  Welcome to E-shop
@endsection

@section('content')
@include('layouts.inc.slider')
<div class="py-5">
     <div class='container'>
         <div class="row">
         <div class="column">
         <h2>Trending products</h2>
         <!--<div class="owl-carousel featured-carousel owl-theme">-->
             @foreach($featured_products as $prod)
             <div class='item'>
                 <div class='card'>
                     <img src="{{asset('assets/uploads/product/'.$prod->image)}}"height="200px"width="200px" alt="product image">
                     <div class='card-body'>
                         <h5>{{$prod->name}}</h5>
                         <span class='float-start'>Selling price Rs{{$prod->selling_price}}</span>
                         <span class='float-end'><s> Original price Rs{{$prod->original_price}}</s></span>
                         
                      </div>
                    </div>                  
                </div>
                @endforeach
            </div>
        </div>
    </div>  
    <div class="py-5">
     <div class='container'>
         <div class="row">
         <div class="column">
             <h2>Trending Category</h2>
          <!-- <div class="owl-carousel featured-carousel owl-theme">-->
             @foreach($trending_category as $tcategory)
             <div class='item'>
                 <a href="{{'view-category/'.$tcategory->slug}}">
                 <div class='card'>
                     <img src="{{asset('assets/uploads/category/'.$tcategory->image)}}"height="200px"width="200px" alt="category image">
                     <div class='card-body'>
                         <h5>{{$tcategory->name}}</h5>
                       <p>  
                            {{$tcategory->description}}  

                       </p>
                         
                      </div>
                    </div>     
                    </a>             
                </div>
                @endforeach
            </div>
        </div>
    </div>
        
    </div>                   
 @endsection

 