<?php

namespace App\Http\Controllers\Frontend\Modules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Modules\Product;
use App\Models\Modules\Order;

class PurchaseController extends Controller
{

    /**
    * Show order page.
    *
    * @var App\Product $product
    * @return Illuminate\View\View
    */
    public function showOrder(Product $product)
    {
        return view('frontend.modules.order', ['product' => $product]);
    }



    /**
    * Get all orders.
    *
    * @var App\Order $orders
    * @return Illuminate\View\View
    */
    public function getAllOrders()
    {
        $orders = Order::all();
        return view('frontend.modules.order', ['order' => $orders]);
    }

    /**
    * Make a Stripe payment.
    *
    * @param Illuminate\Http\Request $request
    * @param App\Product $product
    * @return chargeCustomer()
    */

    public function payWithStripe(Request $request, Product $product)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        

        //return view('frontend.user.dashboard');
        $token = $request->input('stripeToken'); 
        
        
        return $this->chargeCustomer($product->id, $product->price, $product->name, $token);
    }
 
    /**
    * Charge a Stripe customer.
    *
    * @var Stripe\Customer $customer
    * @param integer $product_id
    * @param integer $product_price
    * @param string $product_name
    * @param string $token
    * @return createStripeCharge()
    */

    public function chargeCustomer($product_id, $product_price, $product_name, $token)
    {
        
        
        if (!$this->isStripeCustomer())
        {
            $customer = $this->createStripeCustomer($token);
    
        }
        else
        {
            $customer = \Stripe\Customer::retrieve(access()->user()->stripe_customer_id);

        }
 
        return $this->createStripeCharge($product_id, $product_price, $product_name, $customer);
    }

    /**
    * Create a Stripe charge.
    *
    * @var Stripe\Charge $charge
    * @var Stripe\Error\Card $e
    * @param integer $product_id
    * @param integer $product_price
    * @param string $product_name
    * @param Stripe\Customer $customer
    * @return postStoreOrder()
    */
    public function createStripeCharge($product_id, $product_price, $product_name, $customer)
    {
       
        try {
            $charge = \Stripe\Charge::create(array(
                "amount" => $product_price,
                "currency" => "usd",
                "customer" => $customer->id,
                "description" => $product_name
            ));
            
        
        } catch(\Stripe\Error\Card $e) {
            return redirect()
                ->route('frontend.modules.product')
                ->with('error', 'Your credit card was been declined. Please try again or contact us.');
    }
 
        return $this->postStoreOrder($product_id);
    }

    /**
    * Create a new Stripe customer for a given user.
    *
    * @var Stripe\Customer $customer
    * @param string $token
    * @return Stripe\Customer $customer
    */
    public function createStripeCustomer($token)
    {

        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
 
        $customer = \Stripe\Customer::create(array(
            "description" => access()->user()->email,
            "source" => $token
        ));
        
 
        access()->user()->stripe_customer_id = $customer->id;

        
        access()->user()->save();
 
        return $customer;
    }

    /**
    * Check if the Stripe customer exists.
    *
    * @return boolean
    */
    public function isStripeCustomer()
    {
        
        return access()->user() && \App\Models\Access\User\User::where('id', access()->user()->id)->whereNotNull('stripe_customer_id')->first();
    }



   
    /**
    * Store a order.
    *
    * @param string $product_name
    * @return redirect()
    */
    public function postStoreOrder($product_id)
    {
        Order::create([
            'user_id' => access()->user()->id,
            'product_id' => $product_id
        ]);
 
        return redirect()
            ->route('frontend.modules.product')
            ->with('msg', 'Thanks for your purchase!');
    }
 


}
