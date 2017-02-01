<?php

namespace App\Http\Controllers\Frontend\Modules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
    * Show the index page.
    *
    * @var App\Product $products
    * @return Illuminate\View\View
    */
    public function index()
    {
        $products = \App\Models\Modules\Product::all();
        return view('frontend.modules.product', ['products' => $products]);

        
    }
}
