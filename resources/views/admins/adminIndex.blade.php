@extends('layout')
@section('title','Admin Area')
@section('class4','active')
@section('content')
<div class="main">
    <div class="formbox_landing">
        <a href="{{route('order.index')}}">Orders List</a>
        <a href="{{route('product.create')}}">Add Product</a>
        
        
    </div>
</div>
@endsection