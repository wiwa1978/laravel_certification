@extends('frontend.layouts.app')

@section('content')
    <div class="row">

        <div class="col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('navs.frontend.modules.product-overview') }}</div>

                <div class="panel-body">

                      <div class="row">
                            @foreach ($products as $product)
                                
                                    <div class="col-sm-4 col-md-4">
                                        <div class="thumbnail">
                                            <div class="caption">
                                                <h3>{{ $product->name }}</h3>
                                                <p>{{ $product->small_description }}</p>
                                                <p>
                                                    @if (! empty($product->stripe_transaction_id))
                                                        <a href="{{ URL::route('frontend.user.product-exam', $product->id) }}" class="btn btn-primary"> Continue </a>
                                            
                                                    @else
                                                        <a href="{{ URL::route('frontend.modules.show-order', $product->id) }}" class="btn btn-primary"> Buy for ${{ substr_replace($product->price, '.', 2, 0) }}</a>
                                                    @endif
                                                                                                    


                                                
                                                                                                 
                                                  
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                               
                            @endforeach
                        </div><!--row-->

                </div><!--panel body-->

            </div><!-- panel -->

        </div><!-- col-md-10 -->

    </div><!-- row -->
@endsection



