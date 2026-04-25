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
}
