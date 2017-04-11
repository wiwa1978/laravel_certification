@extends('frontend.layouts.app')

@section('content')
    <div class="row">

        <div class="col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('navs.frontend.certification.certification-overview') }}</div>

                <div class="panel-body">

                      <div class="row">

                          <div class="col-md-6 col-md-offset-3">


                             <form id="myform" action="{{ route('frontend.purchase.order-purchase', $certification) }}" method="POST">
                                {{ csrf_field() }}
                                <p><b>Your selected certification:</b></p>
                                <p>{{ $certification->name }}</p>
                                <p><b>Price</b></p>
                                <p>Buy for ${{ substr_replace($certification->price, '.', 2, 0) }}</p>
                               <p>{{ $user->email}}</p>
                                <p>
                                    <input type="hidden" name="stripeToken" id="stripeToken"/>
                                    {!! Form::submit('Pay With Card', ['class' => 'btn btn-primary btn-order', 'id' =>
    'stripe-button', 'style' => 'margin-bottom: 10px;']) !!}
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
                document.getElementById("myform").submit();
            }
        });


        document.getElementById('stripe-button').addEventListener('click', function(e) {
            handler.open({
                amount: '{{ $certification->price }}',
                email: '{{ $user->email }}',
                currency: 'EUR'
            });
            e.preventDefault();
        });
    </script>
@endsection








