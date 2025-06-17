<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
    return view('home');
   }
   public function about()
   {
      return view('about');
   }
    public function skills()
   {
      return view('skills');
   }
   public function education()
   {
      return view('education');
   }
    public function experience()
   {
      return view('experience');
   }

     public function contact()
   {
      return view('contact');
   }
  
}

