@extends('frontend.layouts.app')

@section('content')
    <div class="row">

        <div class="col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('navs.frontend.certification.certification-overview') }}</div>

                <div class="panel-body">

                      <div class="row">
                            @foreach ($certifications as $certification)
                                
                                    <div class="col-sm-4 col-md-4">
                                        <div class="thumbnail">
                                            <div class="caption">
                                            
                                                <h3>{{ $certification->name }}</h3>
                                                <p>{{ $certification->small_description }}</p>
                                                <p>
                                                    @if (! empty($certification->stripe_transaction_id))
                                                        <a href="{{ URL::route('frontend.exam.certification-exam', $certification->id) }}" class="btn btn-primary"> Continue </a>
                                            
                                                    @else
                                                        <a href="{{ URL::route('frontend.purchase.show-order', $certification->id) }}" class="btn btn-primary"> Buy for ${{ substr_replace($certification->price, '.', 2, 0) }}</a>
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

