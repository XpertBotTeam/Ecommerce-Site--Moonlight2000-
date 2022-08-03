@extends('layout')
@section('content')

<div class="return_icon"><a href="{{route('home.index')}}"><img src="/icons/angle.png"  alt=""><h3>Back</h3></a></div>

<div class="main">
<div class="productshow">   
   <div>
      <img src="/product_images/{{$product['image']}}" alt="" class="product_img_show">
   </div>
      <div id="info">
         <h2>{{$product['name']}}</h2>
         <h3>{{$product['brand']}}</h3>
         <h4>{{$product['price']}} L.L</h4>
         <p>{{$product['description']}}</p>
         <div class="icon">
            <a href="{{ route('order.show',$product['id']) }}">Place An Order
            <img src="/icons/icon2.png" alt="" ></a>
         </div>
      
      </div>
   
   </div>
</div>
 @endsection