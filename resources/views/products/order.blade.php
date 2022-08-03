@extends('layout')
@section('content')
<div class="return_icon"><a href="{{route('product.show',$ID['id'])}}"><img src="/icons/angle.png"  alt=""><h3>Back</h3></a></div>
<div class="main">
    <div>
        <form action="{{ route('order.store') }}" method="POST" class="formbox">
            @csrf
            <input type="hidden" name="product_id" value="{{$ID['id']}}">
            <label for="customer_name" class="formtxt">Your Name:</label>
            <input type="text" name="customer_name" value="{{ old('customer_name') }}" class="forminput">
            @error('customer_name')
                <div class="formerror">{{ $message }}</div>
            @enderror
            <label for="phone" class="formtxt">Phone Number:</label>
            <input type="number" name="phone" value="{{ old('phone') }}" class="forminput">
            @error('phone')
                <div class="formerror">{{ $message }}</div>
            @enderror
            <label for="address" class="formtxt">Address:</label>
            <textarea name="address" id="des" value="{{ old('address') }}" cols="30" rows="5"></textarea>
            @error('address')
                <div class="formerror">{{ $message }}</div>
            @enderror
            <input type="submit" name="submit" >
        </form>
    </div>
</div>
@endsection