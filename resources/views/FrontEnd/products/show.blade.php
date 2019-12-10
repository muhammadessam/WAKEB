@extends('FrontEnd.layout.layout')
@section('content')
    <div class="single-product ">
        <section class="scroll light-bg" id="section1">
            <div class="sec-pt vh flex-center position-relative" height="100%">
                <div class="container sec-pt">
                    <div class="row flex-reverse">
                        <div class="col-md-6">
                            <h3 class="title mb-5">{{$product->product_trans_lang[0]->name}}<span></span></h3>
                            <p class="mt-3">{!! $product->product_trans_lang[0]->description !!}</p>
                            <a href="#" type="text" class="btn  btn-lg  send px-5 mt-5">Try it now</a>
                        </div>
                        <div class="col-md-6 col-lg-5 offset-lg-1">
                            <div class=" mb-5 twittelab-animate">
                                <img src="{{asset('assets/images/products/twittelab/twittelab1.svg')}}"
                                     class="twittelab1 fadeInLeft animated wow " style="animation-delay: 1.5s">
                                <img src="{{asset('assets/images/products/twittelab/twittelab3.svg')}}"
                                     class="twittelab3 zoomIn animated wow " style="animation-delay: 3.30s">
                                <img src="{{asset('assets/images/products/twittelab/twittelab4.svg')}}"
                                     class="twittelab4 zoomIn animated wow " style="animation-delay: 3s">
                                <img src="{{asset('assets/images/products/twittelab/twittelab5.svg')}}"
                                     class="twittelab5 zoomIn animated wow " style="animation-delay: 3.20s">
                                <img src="{{asset('assets/images/products/twittelab/twittelab6.svg')}}"
                                     class="twittelab6 fadeInDown animated wow " style="animation-delay: 0.45s">
                                <img src="{{asset('assets/images/products/twittelab/twittelab7.svg')}}"
                                     class="twittelab7 fadeInRight animated wow " style="animation-delay: 0.30s">
                                <img src="{{asset('assets/images/products/twittelab/twittelab8.svg')}}"
                                     class="twittelab8 fadeInRight animated wow " style="animation-delay: 1s">
                                <img src="{{asset('assets/images/products/twittelab/twittelab9.svg')}}"
                                     class="twittelab9 fadeInDown animated wow " style="animation-delay: 0.5s">
                                <img src="{{asset('assets/images/products/twittelab/twittelab10.svg')}}"
                                     class="twittelab10 fadeInDown animated wow " style="animation-delay: 0.75s">
                                <img src="{{asset('assets/images/products/twittelab/twittelab11.svg')}}"
                                     class="twittelab11 fadeInLeft animated wow " style="animation-delay: 0.50s">
                                <img src="{{asset('assets/images/products/twittelab/twittelab12.svg')}}"
                                     class="twittelab12 fadeIn animated wow " style="animation-delay: 1.70s">
                                <img src="{{asset('assets/images/products/twittelab/twittelab13.svg')}}"
                                     class="twittelab13 zoomIn animated wow " style="animation-delay: 2.70s">
                                <img src="{{asset('assets/images/products/twittelab/twittelab14.svg')}}"
                                     class="twittelab14 zoomIn animated wow " style="animation-delay: 2.30s">
                                <img src="{{asset('assets/images/products/twittelab/twittelab15.svg')}}"
                                     class="twittelab15 zoomIn animated wow " style="animation-delay: 2s">
                                <img src="{{asset('assets/images/products/twittelab/twittelab16.svg')}}"
                                     class="twittelab16 zoomIn animated wow " style="animation-delay: 2.55s">
                                <img src="{{asset('assets/images/products/twittelab/twittelab17.svg')}}"
                                     class="twittelab17 fadeIn animated wow " style="animation-delay: 2.75s">
                                <img src="{{asset('assets/images/products/twittelab/twittelab18.svg')}}"
                                     class="twittelab18 fadeInUp animated wow " style="animation-delay: 0.25s">
                                <img src="{{asset('assets/images/products/twittelab/twittelab19.svg')}}"
                                     class="twittelab19 fadeIn animated wow " style="animation-delay: 2s">
                                <img src="{{asset('assets/images/products/twittelab/twittelab20.svg')}}"
                                     class="twittelab20 fadeIn animated wow " style="animation-delay: 0.40s">
                                <img src="{{asset('assets/images/products/twittelab/twittelab21.svg')}}"
                                     class="twittelab21 fadeInDown animated wow " style="animation-delay:2s">
                                <img src="{{asset('assets/images/products/twittelab/twittelab22.svg')}}"
                                     class="twittelab22 fadeIn animated wow " style="animation-delay: 3s">
                                <img src="{{asset('assets/images/products/twittelab/twittelab23.svg')}}"
                                     class="twittelab23 zoomIn animated wow " style="animation-delay: 2s">
                                <img src="{{asset('assets/images/products/twittelab/twittelab24.svg')}}"
                                     class="twittelab24 zoomIn animated wow " style="animation-delay: 1.75s">
                                <img src="{{asset('assets/images/products/twittelab/twittelab25.svg')}}"
                                     class="twittelab25 rollIn animated wow " style="animation-delay: 0.25s">
                                <img src="{{asset('assets/images/products/twittelab/twittelab26.svg')}}"
                                     class="twittelab26 zoomIn animated wow " style="animation-delay: 3s">
                                <img src="{{asset('assets/images/products/twittelab/twittelab27.svg')}}"
                                     class="twittelab27 rollIn animated wow " style="animation-delay: 0.25s">
                                <img src="{{asset('assets/images/products/twittelab/twittelab28.svg')}}"
                                     class="twittelab28 fadeInLeft animated wow " style="animation-delay: 2s">
                                <img src="{{asset('assets/images/products/twittelab/twittelab29.svg')}}"
                                     class="twittelab29 fadeIn animated wow " style="animation-delay: 0.40s">
                                <img src="{{asset('assets/images/products/twittelab/twittelab30.svg')}}"
                                     class="twittelab30 fadeInRight animated wow " style="animation-delay: 0.25s">
                                <img src="{{asset('assets/images/products/twittelab/twittelab31.svg')}}"
                                     class="twittelab31 zoomIn animated wow " style="animation-delay: 0.50s">
                                <img src="{{asset('assets/images/products/twittelab/twittelab32.svg')}}"
                                     class="twittelab32 fadeInRight animated wow " style="animation-delay: 0.75s">
                            </div>
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
                        <p class="mb-5">{!!$product->product_trans_lang[0]->description!!}</p>

                    </div>
                    <div class="col-md-6 col-lg-5 offset-lg-1">
                        <h3 class="font-weight-bold text-uppercase mb-5">{{trans('features.features')}}</h3>
                        @foreach($product->features as $feature)
                            <div class="mb-4">
                                <h3 class="side-title font-weight-bold">{{$feature->feature_trans_lang[0]->name}}</h3>
                                <p>{!!$feature->feature_trans_lang[0]->description!!}</p>
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
