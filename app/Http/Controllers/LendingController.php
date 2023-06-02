<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hit;
use App\Models\Discount;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LendingController extends Controller
{
    public function index()
    {
        $hits = Hit::with('model', 'color')->get();
        $discounts = Discount::with('model', 'color')->get();

        return view('lending', compact('hits', 'discounts'));
    }
}
