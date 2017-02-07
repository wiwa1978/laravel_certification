@extends('frontend.layouts.app')

@section('content')
    <div class="row">

        <div class="col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('navs.frontend.product.overview') }}</div>

                <div class="panel-body">

                      <div class="row">

                          <div class="col-md-6 col-md-offset-3">


                             <form action="{{ route('frontend.modules.order-purchase', $product->id) }}" method="POST">
                            {{ csrf_field() }}
                                <p><b>Your selected product:</b></p>
                                <p>{{ $product->name }}</p>
                                <p><b>Price</b></p>
                                <p>Buy for ${{ substr_replace($product->price, '.', 2, 0) }}</p>
                                <p>
                                    <button class="btn btn-primary" type="submit" value="Place Order">Place Order</button>
                                    <p><button class="btn btn-primary btn-large" id="stripe-button">Pay With Card</button></p>
                                </p>



                            </form>

                         
                        </div>

                            
                      </div><!--row-->

                </div><!--panel body-->

            </div><!-- panel -->

        </div><!-- col-md-10 -->

    </div><!-- row -->
@endsection



@section('after-scripts')
    <script src="https://checkout.stripe.com/checkout.js"></script>

    <script>
        var handler = StripeCheckout.configure({
            key: "{{ env('STRIPE_PUBLIC') }}",
            image: "https://stripe.com/img/documentation/checkout/marketplace.png",
            name: "Stripe.com",
            description: "Widget",
            panelLabel: "Pay",
            token: function(token, args) {
                document.getElementById('stripe-button').setAttribute('disabled','disabled');
                document.getElementById('stripeToken').setAttribute('value',token.id);
            }
        });

        document.getElementById('stripe-button').addEventListener('click', function(e) {
            handler.open({
                amount: {{ $product->price }}
            });
            e.preventDefault();
        });
    </script>
@endsection







