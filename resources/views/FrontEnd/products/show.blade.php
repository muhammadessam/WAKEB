@extends('FrontEnd.layout.layout')
@section('content')
    <div class="single-product ">
        <section class="scroll light-bg" id="section1">
            <div class="sec-pt vh flex-center position-relative" height="100%">
                <div class="container sec-pt">
                    <div class="row flex-reverse">
                        <div class="col-md-6">
                            <h3 class="title mb-5">{{$product->product_trans_lang->name}}<span></span></h3>
                            <p class="mt-3">{!! $product->product_trans_lang->description !!}</p>
                            <a href="#" type="text" class="btn  btn-lg  send px-5 mt-5">{{trans('Try it now')}}</a>
                        </div>
                        <div class="col-md-6 col-lg-5 offset-lg-1">
                            @if($product->id==1)
                                @include('FrontEnd.products.twittelab')
                            @endif
                            @if($product->id==2)
                                @include('FrontEnd.products.mujib')
                            @endif
                            @if($product->id==9)
                                @include('FrontEnd.products.msbar')
                            @endif
                            @if($product->id==10)
                                @include('FrontEnd.products.nasih')
                            @endif
                            @if($product->id ==11)
                                @include('FrontEnd.products.preanalysis')
                            @endif
                            @if($product->id==12)
                                @include('FrontEnd.products.imganalysis')
                            @endif
                            @if($product->id==13)
                                @include('FrontEnd.products.rasad')
                            @endif
                            @if($product->id==14)
                                @include('FrontEnd.products.IPMS')
                            @endif


                        </div>
                    </div>

                    <div class="scroll-next" data-scroll="scroll-target">
                        <div class=" d-flex">
                            <img src="{{asset('assets/images/mouse.png')}}" alt="Down" class="mr-2 animated-up-down">
                            <span class="mt-1">Scroll Down</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=" sec-padding scroll scroll-target vh" id="section2">
            <div class="container  pb-5">
                <div class="row mt-5">
                    <div class="col-md-6">
                        <h3 class="font-weight-bold text-uppercase mb-5">{{trans('About')}}</h3>
                        <p class="mb-5">{!!$product->product_trans_lang->description!!}</p>

                    </div>
                    <div class="col-md-6 col-lg-5 offset-lg-1">
                        <h3 class="font-weight-bold text-uppercase mb-5">{{trans('features.features')}}</h3>
                        @foreach($product->features as $feature)
                            <div class="mb-4">
                                <h3 class="side-title font-weight-bold">{{$feature->feature_trans_lang->name}}</h3>
                                <p>{!!$feature->feature_trans_lang->description!!}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="d-none box-bg sec-padding scroll scroll-target vh" id="section3">
            <div class="container  pb-5">
                <div class="row pb-5">
                    <div class="col-md-6">
                        <h3 class="font-weight-bold text-uppercase mb-5">How it works</h3>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                            tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Stet clita kasd
                            gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
                    </div>
                    <div class="col-md-6"></div>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <video width="100%" height="500" poster="assets/images/service2-0.jpg" controls
                               style="object-fit: cover;">
                            <source src="assets/images/ad2.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>

            </div>
        </section>

    </div>

@endsection
