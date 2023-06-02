<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Phone;

class ProductController extends Controller
{
    public function show($id) {
        $product = Phone::find($id);

        if (!$product) {
            abort(404);
        }

        return view('show', compact('product'));
    }
}
