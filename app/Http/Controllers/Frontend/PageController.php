<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dokan;
use App\Models\Admin;
use Illuminate\Support\Facades\Mail;
use App\Mail\DokanRequestNotification;

class PageController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }


    public function fashion()
    {
         return view('categories.fashion');
    }

    public function electronics()
    {
         return view('categories.electronics');
    }

    public function sports()
    {
         return view('categories.sports');
    }

    public function books()
    {
         return view('categories.books');
    }

    public function deals()
    {
         return view('categories.deals');
    }

    public function menFashion()
    {
         return view('categories.fashion.men');
    }

    public function womenFashion()
    {
         return view('categories.fashion.women');
    }

     public function kidsFashion()
     {
           return view('categories.fashion.kids');
    }

     public function accessoriesFashion()
     {
           return view('categories.fashion.accessories');
     }


     public function menShirts()
     {
           return view('categories.fashion.men.t-shirt');
     }


     public function mobile()
               {
               return view('categories.electronics.mobile');
               }


     public function laptop()
          {
          return view('categories.electronics.laptop');
          }

     public function audio()
          {
          return view('categories.electronics.audio');
}

     public function electronicsAccessories()
          {
          return view('categories.electronics.accessories');
          }

     public function football()
          {
          return view('categories.sports.football');
}


     public function cricket()
          {
          return view('categories.sports.cricket');
          }

     public function running()
          {
          return view('categories.sports.running');
          }

     public function gym()
          {
          return view('categories.sports.gym');
          }


     public function fiction()
          {
               return view('categories.books.fiction');
          }
      public function education()
          {
               return view('categories.books.education');
          }
      public function business()
          {
               return view('categories.books.business');
          }
      public function selfHelp()
          {
               return view('categories.books.selfhelp');
          }
}