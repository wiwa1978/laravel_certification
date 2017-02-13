<?php

namespace App\Http\Controllers\Frontend\Modules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Modules\Product;
use App\Models\Modules\Order;
use App\Models\Modules\Purchase;
use Carbon\Carbon;

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
        $user = access()->user();
        return view('frontend.modules.order', ['product' => $product, 'user' => $user] );
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
        
        $token = $request->input('stripeToken'); 

        dd($token);


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
            dd("test1: ".$customer);
    
        }
        else
        {
            $customer = \Stripe\Customer::retrieve(access()->user()->stripe_customer_id);
            dd("test2: ".$customer);

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
                "description" => $product_name,
                "metadata" => [
                    'Purchased product' => $product_name,
                    'Purchase Date'=> Carbon::now(),
                ]
            ));
        
            
        
        } catch(\Stripe\Error\Card $e) {
            return redirect()
                ->route('frontend.modules.product')
                ->withFlashError(trans('strings.frontend.stripe.creditcard_declined'));
    }
 
    return $this->postStoreOrder($product_id, $charge->id);
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
 
        $customer = \Stripe\Customer::create(array(
            "source" => $token,
            "email" => access()->user()->email,
            'metadata' => [
                'First Name' => 'To be updated',
                'Last Name' => 'To be updated',
            ]
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
    * Store the order to Purchase table.
    *
    * @param string $product_name
    * @return redirect()
    */
    public function postStoreOrder($product_id, $charge_id)
    {
        Purchase::create([
            'user_id' => access()->user()->id,
            'product_id' => $product_id,
            'stripe_transaction_id' => $charge_id
        ]);
 
        return redirect()->route('frontend.modules.product')->withFlashSuccess(trans('strings.frontend.stripe.creditcard_success'));
    }
 


}
