<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    public function dashboard()
    {
        $user = Auth::user();
        return view('pages.dashboard', ['user' => $user]);
    }

    public function profile()
    {
        $user = Auth::user();
        return view('pages.profile', ['user' => $user]);
    }

    public function feedback()
    {
        return view('pages.feedback');
    }

    public function orderDetail()
    {
        return view('pages.order-detail');
    }

    public function myServices()
    {
        return view('pages.my-services');
    }
}
