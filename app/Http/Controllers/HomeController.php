<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // return view('welcome');
        [ProductsController::class ,'index'];
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function adminLanding(){
        return view('admins.adminIndex');
    }
    public function orderResponse(){
        return view('response.orderResponse');
    }
    public function contactResponse(){
        return view('response.contactResponse');
    }
}
