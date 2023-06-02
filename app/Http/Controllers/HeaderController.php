<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function about_us() {
        return view('about_us');
    }

    public function contacts() {
        return view('contacts');
    }

    public function payment_and_delivery() {
        return view('payment_and_delivery');
    }
}
