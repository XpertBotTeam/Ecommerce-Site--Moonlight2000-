<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <nav>
        <div>
            <img src="/icons/mli.jpg" alt="">
            <a href="{{ route('home.index') }}" class="@yield('class1')">HOME</a>
            <a href="{{ route('home.contact') }}" class="@yield('class2')">CONTACT</a>
            <a href="{{ route('home.about') }}"class="@yield('class3')">ABOUT</a>
        </div>
        <div class="login">
        <a href="{{ route('admin.index') }}"class="@yield('class4')">LOGIN</a>
        </div>
    </nav>
    
         @yield('content')
   
</body>
</html>