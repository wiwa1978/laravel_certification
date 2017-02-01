@extends('frontend.layouts.app')

@section('content')
    <div class="row">

        <div class="col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('navs.frontend.product.overview') }}</div>

                <div class="panel-body">

                      <div class="row">
                            @foreach ($products as $product)
                                <form action="{{ route('frontend.modules.order', $product->id) }}" method="POST">
                                    {{csrf_field() }}
                                    <div class="col-sm-5 col-md-5">
                                        <div class="thumbnail">
                                            <div class="caption">
                                                <h3>{{ $product->name }}</h3>
                                                <p>{{ $product->small_description }}</p>
                                                <p>Buy for ${{ substr_replace($product->price, '.', 2, 0) }}</p>
                                                <p>
                        
                                                <script
                                                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                                    data-key="{{ env('STRIPE_PUBLIC') }}"
                                                    data-amount="{{ $product->price }}"
                                                    data-name="Stripe.com"
                                                    data-description="Widget"
                                                    data-locale="auto"
                                                    data-currency="usd">
                                                </script>
                                                       
                                                  
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            @endforeach
                        </div><!--row-->

                </div><!--panel body-->

            </div><!-- panel -->

        </div><!-- col-md-10 -->

    </div><!-- row -->
@endsection