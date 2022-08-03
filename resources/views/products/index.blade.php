@extends('layout')
@section('title','Home')
@section('class1','active')
@section('content')
<div class="main_title">
    <h1>Welcome To Moonlight2000.Fashion</h1>
    <h2>Men clothes</h2>
    <a href="#main" class="shop_btn">Shop</a>
</div>





<div class="main" id="main">
@if(count($products)>0)
    @foreach($products as $product)
    

        <div class="product">
            <img src="product_images/{{$product['image']}}" alt="" class="product_img">
            <h2>{{$product['name']}}</h2>
            
                <h4>{{$product['brand']}}</h4>
                <!-- <li>{{$product['price']}}L.L</li>
                <li>{{$product['description']}}</li> -->
           
            <div class="learn_more">
            <h3><a href="{{ route('product.show',['product' => $product['id']]) }}">Learnmore</a></h3>
            </div>
            
            
        </div>
    

    @endforeach
</div>
@else
    <h1>No Data Found</h1>
@endif

@endsection