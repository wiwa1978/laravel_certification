@extends('frontend.layouts.app')

@section('content')
    <div class="row">

        <div class="col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('navs.frontend.product.overview') }}</div>

                <div class="panel-body">

                      <div class="row">

                          <div class="col-md-6 col-md-offset-3">
                            {!! Form::open(['url' => route('frontend.modules.order-purchase')]) !!}

                              <div class="form-group">
                                  {!! Form::label('firstName', 'First Name:') !!}
                                  {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                              </div>

                              <div class="form-group">
                                  {!! Form::label('lastName', 'Last Name:') !!}
                                  {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                              </div>

                              <div class="form-group">
                                  {!! Form::label('email', 'Email address:') !!}
                                  {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'email@example.com']) !!}
                              </div>

                              <div class="form-group">
                                  {!! Form::label('product', 'Select product:') !!}
                                  {!! Form::select('product', ['book' => 'Book ($10)', 'game' => 'Game ($20)', 'movie' => 'Movie ($15)'], 'Book', ['class' => 'form-control']) !!}
                              </div>

                              <div class="form-group">
                                  {!! Form::label(null, 'Credit card number:') !!}
                                  {!! Form::text(null, null, ['class' => 'form-control']) !!}
                              </div>

                              <div class="form-group">
                                  {!! Form::label(null, 'Card Validation Code (3 or 4 digit number):') !!}
                                  {!! Form::text(null, null, ['class' => 'form-control']) !!}
                              </div>

                              <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group">
                                      {!! Form::label(null, 'Ex. Month') !!}
                                      {!! Form::selectMonth(null, null, ['class' => 'form-control'], '%m') !!}
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                      {!! Form::label(null, 'Ex. Year') !!}
                                      {!! Form::selectYear(null, date('Y'), date('Y') + 10, null, ['class' => 'form-control']) !!}
                                  </div>
                                </div>
                              </div>

                                <div class="form-group">
                                    {!! Form::submit('Place order!', ['class' => 'btn btn-primary btn-order', 'id' => 'submitBtn', 'style' => 'margin-bottom: 10px;']) !!}
                                </div>

                            {!! Form::close() !!}

                         
                        </div>

                            
                      </div><!--row-->

                </div><!--panel body-->

            </div><!-- panel -->

        </div><!-- col-md-10 -->

    </div><!-- row -->
@endsection


@section('after-scripts')
    <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="{{ env('STRIPE_PUBLIC') }}"
        data-amount="{{ $product->price }}"
        data-name="Stripe.com"
        data-description="Widget"
        data-locale="auto"
        data-currency="usd">
    </script>
@endsection



