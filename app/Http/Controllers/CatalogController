<?php

namespace App\Http\Controllers;
use App\Models\Phone;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function phones() {
        $phones = Phone::with('model', 'color')->get();

        return view('phones', compact('phones'));
    }
}
