@extends('FrontEnd.layout.layout')
@section('content')
    <header class="home-header ">
        <div class="container-fluid sec-pt">
            <div class="row position-relative content mt-5">
                <div class="col-lg-6 col-md-10">
                    <h6>We are offering</h6>
                    <div class="vertical-slider mt-4">
                        @foreach($sliders as $slider)
                            <div class="vertical-slider mt-4">
                                <div>
                                    <h3>{{$slider->trans_lang->name}}</h3>
                                    <p>{{$slider->trans_lang->description}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class=" col-lg-5 col-md-4 header-animation">
                    <div class="h-side-imgs ">
                        <img src="{{asset('assets/images/home-robot-1.svg')}}" class="part1">
                        <img src="{{asset('assets/images/home-robot-2.svg')}}" class="part2">
                        <img src="{{asset('assets/images/home-robot-3.svg')}}" class="part3">
                        <img src="{{asset('assets/images/home-robot-4.svg')}}" class="part4">
                        <img src="{{asset('assets/images/home-robot-5.svg')}}" class="part5">
                        <img src="{{asset('assets/images/home-robot-6.svg')}}" class="part6">
                        <img src="{{asset('assets/images/home-robot-7.svg')}}" class="part7">
                        <img src="{{asset('assets/images/home-robot-8.svg')}}" class="part8">
                        <img src="{{asset('assets/images/home-robot-9.svg')}}" class="part9">
                        <img src="{{asset('assets/images/home-robot-10.svg')}}" class="part10">
                        <img src="{{asset('assets/images/home-robot-11.svg')}}" class="part11">
                        <!-- <img src="assets/images/integrated.svg" class="integrated"> -->
                        <!-- <div class="robot">
                            <img src="assets/images/home-robot.png" class="parent" >
                        </div> -->
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
        <div class="integrated"><img src="{{asset('assets/images/integrated.svg')}}" alt=""></div>
    </header>
    <!-- services -->
    <section class=" scroll-target vh flex-center" class="pt-5" id="services">
        <div class="container-fluid">
            <div class="row sec-title text-center ">
                <div class="col-lg-12">
                    <h3 class="title animated wow fadeInUp"
                        style="animation-delay:0.25s">{{trans('services.services')}}</h3>
                </div>
                <div class="col-lg-6 col-md-8  offset-md-2  offset-lg-3">
                    <p class="title-p animated wow fadeInUp" style="animation-delay:0.25s">

                    </p>
                </div>
            </div>

            <div class="regular-slider-container">
                <div class="regular slider mt-5">
                    @foreach($services as $service)
                        <div>
                            <a href="{{$service->path()}}">
                                <h1>{{$service->service_trans_lang->name}}</h1></a>
                            <div class="service">
                                <a href="{{$service->path()}}"><img
                                        src="{{asset($service->img_url)}}"></a>
                                <div class="overlay ">
                                    <p>
                                        {{Str::words($service->service_trans_lang->description, 10, '....')}}
                                    </p>
                                    <div>
                                        <a href="{{$service->path()}}">
                                            <span class="mr-1">{{trans('MORE')}}</span>
                                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div> <!--slider end-->
            </div>
        </div>

    </section>
    <!--/. services -->
    <!-- How we work -->
    <section class="to-work  py-5 ">
        <div class="container">
            <div class="row sec-title text-center ">
                <div class="col-lg-12">
                    <h3 class="title fadeInUp animated wow "
                        style="animation-delay: 0.25s">{{trans('How we work')}}</h3>
                </div>
                <div class="col-lg-6 col-md-8  offset-md-2  offset-lg-3">
                    <p class="title-p animated wow fadeInUp" style="animation-delay: 0.25s">

                    </p>
                </div>
            </div>
            <div class="row text-center ">
                <div class="col-md-3 col-sm-6 block animated wow fadeInUp" style="animation-delay: 0.25s">
                    <img src="assets/images/analysis.svg" alt="">
                    <p>Planning</p>
                </div>
                <div class="col-md-3 col-sm-6 block animated wow fadeInUp " style="animation-delay:0.40s">
                    <img src="assets/images/blueprint.svg" alt="">
                    <p>Designing</p>
                </div>
                <div class="col-md-3 col-sm-6 block animated wow fadeInUp " style="animation-delay: 0.55s">
                    <img src="assets/images/data.svg" alt="">
                    <p>Development</p>
                </div>
                <div class="col-md-3 col-sm-6 block animated wow fadeInUp " style="animation-delay: 0.75s">
                    <img src="assets/images/startup.svg">
                    <p>Launching</p>
                </div>
            </div>
        </div>
    </section>
    <!--/. How to work  -->
    <!-- Products  -->
    <section class="products">
        <div class="container-fluid">
            <div class="row sec-title text-center ">
                <div class="col-lg-12">
                    <h3 class="title animated wow fadeInUp"
                        style="animation-delay: 0.25s">{{trans('products.products')}}</h3>
                </div>
                <div class="col-lg-6 col-md-8  offset-md-2  offset-lg-3">
                    <p class="title-p animated wow fadeInUp" style="animation-delay:0.25s">

                    </p>
                </div>
            </div>
            <div class="product-slider regular-slider-container">
                <div class="slider slider-for">
                    @foreach($products as $product)
                        <div>
                            <div class="img-div">
                                <a href="{{$product->path()}}"><img
                                        src="{{asset($product->img_url)}}"></a>
                                <span class="line"></span>
                            </div>
                            <div class="caption">
                                <a href="{{$product->path()}}">
                                    <h3>{{$product->product_trans_lang->name}}</h3></a>
                                <p>
                                    {{Str::words($product->product_trans_lang->description, 10, '....')}}
                                </p>
                                <a href="{{$product->path()}}">
                                    <span class="mr-1">{{trans('MORE')}}</span>
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="slider slider-nav">
                    @foreach($products as $product)
                        <a href="{{$product->path()}}">
                            <div><img src="{{asset($product->img_url)}}"></div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--/. Products  -->
    <!-- <div class="clearfix"></div> -->
    <!-- Partners  -->
    <section class="parteners">
        <div class="container">
            <div class="row sec-title text-center ">
                <div class="col-lg-12">
                    <h3 class="title animated wow fadeInUp" style="animation-delay:0.25s">{{trans('Partners')}}</h3>
                </div>
                <div class="col-lg-6 col-md-8  offset-md-2  offset-lg-3">
                    <p class="title-p animated wow fadeInUp" style="animation-delay:0.25s">

                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1 partener slider animated wow fadeInUp" style="animation-delay:0.25s">
                    <div>
                        <img src="{{asset('assets/images/p1.svg')}}" style="fill: #000;">
                    </div>
                    <div>
                        <img src="{{asset('assets/images/p2.svg')}}">
                    </div>
                    <div>
                        <img src="{{asset('assets/images/p3.svg')}}">
                    </div>
                    <div>
                        <img src="{{asset('assets/images/p4.svg')}}">
                    </div>
                    <div>
                        <img src="{{asset('assets/images/p5.svg')}}">
                    </div>
                    <div>
                        <img src="{{asset('assets/images/p6.png')}}">
                    </div>
                    <div>
                        <img src="{{asset('assets/images/p7.svg')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/. Partners  -->

    <!-- Clients  -->
    <section class="clients ">
        <div class="container">
            <div class=" sec-title text-center ">
                <div class="col-lg-12">
                    <h3 class="title animated wow fadeInUp" style="animation-delay:0.25s">{{trans('Clients')}}</h3>
                </div>
                <div class="col-lg-6  offset-lg-3 col-md-8  offset-md-2">
                    <p class="title-p animated wow fadeInUp" style="animation-delay:0.25s">

                    </p>
                </div>
            </div>
            <div class=" animated wow fadeInUp" style="animation-delay:0.25s">
                <div class="client slider col-lg-6  offset-lg-3 col-md-8 offset-md-2">
                    <div>
                        <img src="{{asset('assets/images/c1.jpg')}}">
                    </div>
                    <div>
                        <img src="{{asset('assets/images/c2.jpg')}}">
                    </div>
                    <div>
                        <img src="{{asset('assets/images/c6.jpg')}}">
                    </div>
                    <div>
                        <img src="{{asset('assets/images/c3.jpg')}}">
                    </div>
                    <div>
                        <img src="{{asset('assets/images/c5.jpg')}}">
                    </div>
                    <div>
                        <img src="assets/images/c4.jpg">
                    </div>


                    <div>
                        <img src="assets/images/c7.jpg">
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--/. Partners  -->
@endsection
@section('scripts')
    @if(session()->has('message'))

    @endif
@endsection

