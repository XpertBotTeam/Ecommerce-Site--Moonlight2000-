@extends('layout')
@section('title','AddProduct')
@section('class4','active')
@section('content')
<div class="return_icon"><a href="{{route('admin.landing')}}"><img src="/icons/angle.png"  alt=""><h3>Back</h3></a></div>
<div class="main">
    <div>
        <form action="{{ route('product.store') }}" method="POST" class="formbox" enctype="multipart/form-data">
            @csrf
                <label for="name" class="formtxt">Product Name:</label>
                <input type="text" placeholder="Text Here" value="{{ old('name') }}" class="forminput" name="name">
                @error('name')
                <div class="formerror">{{ $message }}</div>
                @enderror
                <label for="price" class="formtxt">Price:</label>
                <input type="number" class="forminput" value="{{ old('price')}}" name="price">
                @error('price')
                <div class="formerror">{{ $message }}</div>
                @enderror
                <label for="brand" class="formtxt">Brand:</label>
                <input type="text" name="brand" value="{{ old('brand') }}" class="forminput">
                @error('brand')
                <div class="formerror">{{ $message }}</div>
                @enderror
                <label for="des" class="formtxt">Description:</label>
                <textarea name="des" id="des" cols="30" rows="5"></textarea>
                <input type="file" name="image" class="formtxt">
                <input type="submit" name="submit"class="formtxt">
                
        </form>
        
    </div>
</div>
@endsection