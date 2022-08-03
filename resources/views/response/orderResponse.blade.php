@extends('layout')
@section('content')
<div class="main">
    <div class="response">
        <h1>Thank You For Ordering From Our Store</h1>
    
    <h3>Your order Number is #{{$last['id']}}</h3>
    <h4>Please save it in case of any miss shipment</h4>
        
    
    
        <a href="{{route('home.index')}}">Continue Your Shopping</a>

    </div>
</div>
@endsection