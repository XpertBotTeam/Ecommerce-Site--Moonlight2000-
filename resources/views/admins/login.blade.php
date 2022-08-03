@extends('layout')
@section('title','Login')
@section('class4','active')
@section('content')
<div class="main">
    <div>
        <form action="{{route('admin.store')}}" method="POST" class="formbox">
            @csrf
            <label for="pass" class="formtxt">Enter Admin Password:</label>
            <input type="password" name="pass" class="forminput">
            <input type="submit" value="Login">
        </form>
    </div>
</div>
@endsection