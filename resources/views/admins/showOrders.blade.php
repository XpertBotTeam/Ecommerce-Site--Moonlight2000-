@extends('layout')
@section('title','Orders')
@section('class4','active')
@section('content')
<div class="return_icon"><a href="{{route('admin.landing')}}"><img src="/icons/angle.png"  alt=""><h3>Back</h3></a></div>
<div class="main">
    <div>
        <table class="table_orders">
            <tr>
                <td>Order ID</td>
                <td>Name</td>
                <td>Phone Number</td>
                <td>Address</td>
                <td>Product ID</td>
                <td>Product Name</td>
            </tr>
    @foreach($orders as $order)

        
            <tr>
                <td>{{$order['id']}}</td>
                <td>{{$order['customer_name']}}</td>
                <td>{{$order['phone']}}</td>
                <td>{{$order['address']}}</td>
                <td>{{$order['product_id']}}</td>
                @foreach($products as $product)
                    @if($order['product_id']==$product['id'])
                    <td>{{$product['name']}}</td>
                    @endif
                @endforeach
            </tr>

    @endforeach    
        </table>
        
    </div>
</div>
@endsection    