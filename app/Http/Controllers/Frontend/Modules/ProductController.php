<?php

namespace App\Http\Controllers\Frontend\Modules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    /**
    * Show the index page.
    *
    * @var App\Product $products
    * @return Illuminate\View\View
   
    public function index()
    {
        $products = \App\Models\Modules\Product::all();
        return view('frontend.modules.product', ['products' => $products]);
    } */

    public function index()
    {
        $user = access()->user()->id;
        

        $products =DB::select(
            DB::raw('SELECT p.id as id, p.name, p.small_description ,p.price, r.stripe_transaction_id FROM products p LEFT JOIN purchases r ON p.id = r.product_id AND r.user_id = :user'), array('user' => $user)
        );

        return view('frontend.modules.product', ['products' => $products]);
    }
}
