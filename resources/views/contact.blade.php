@extends ('layout')
@section('title' ,'Contact')
@section('class2','active')
@section('content')
<div class="main">
    <div class="info">
        <h1>Contact Us</h1>
        <p>
          We assure you that your information is not being collected in ant
          sort, infact your message is being sent directly to our inbox
        </p>
        <div class="in">
          <img src="/images/logo3.png" alt="" />
          <h2>Bednayel, Beqaa, Lebanon</h2>
        </div>
        <div class="in">
          <img src="/images/logo4.png" alt="" />
          <h2>+961 81652979</h2>
        </div>
    </div>

    <form action="https://formsubmit.co/c6e52707b43c45b75c6bcfa5d41eb56c" method="POST" class="formbox">
        <input type="hidden" name="_captcha" value ="false">
        <input type="hidden" name="_next" value="{{route('contact.thanks')}}">
        <label for="name" class="formtxt">Name:</label>
        <input type="text" name="name" class="forminput">
        <label for="email" class="formtxt">Email:</label>
        <input type="email" name ="email" class="forminput">
        <label for="phone" class="formtxt">Phone Number:</label>
        <input type="text" name="number" class="forminput">
        <label for="txt" class="formtxt">What Can We Help You?</label>
        <textarea name="txt" id="des" cols="30" rows="5"></textarea>
        <input type="submit">
    </form>
</div>
@endsection