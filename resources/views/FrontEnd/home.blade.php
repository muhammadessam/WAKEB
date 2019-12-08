@extends('FrontEnd.layout.layout')
@section('content')
    <!-- services -->
    <section class=" scroll-target vh flex-center" class="pt-5" id="services">
        <div class="container-fluid">
            <div class="row sec-title text-center ">
                <div class="col-lg-12">
                    <h3 class="title animated wow fadeInUp" style="animation-delay:0.25s">Services</h3>
                </div>
                <div class="col-lg-6 col-md-8  offset-md-2  offset-lg-3">
                    <p class="title-p animated wow fadeInUp" style="animation-delay:0.25s">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                        sed diam nonumy eirmod tempor invidunt ut labore et dolore
                    </p>
                </div>
            </div>

            <div class="regular-slider-container">
                <div class="regular slider mt-5">
                    @foreach($services as $service)
                        <div>
                            <a href="service-1.html"><h1>{{$service->service_trans_lang[0]->name}}</h1></a>
                            <div class="service">
                                <img src="{{asset($service->img_url)}}">
                                <div class="overlay ">
                                    <p>
                                        {{$service->service_trans_lang[0]->description}}
                                    </p>
                                    <div>
                                        <a href="service-1.html">
                                            <span class="mr-1">MORE</span>
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
                    <h3 class="title fadeInUp animated wow " style="animation-delay: 0.25s">How we work</h3>
                </div>
                <div class="col-lg-6 col-md-8  offset-md-2  offset-lg-3">
                    <p class="title-p animated wow fadeInUp" style="animation-delay: 0.25s">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr
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
                    <h3 class="title animated wow fadeInUp" style="animation-delay: 0.25s">Products</h3>
                </div>
                <div class="col-lg-6 col-md-8  offset-md-2  offset-lg-3">
                    <p class="title-p animated wow fadeInUp" style="animation-delay:0.25s">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                        sed diam nonumy eirmod tempor invidunt ut
                    </p>
                </div>
            </div>
            <div class="product-slider regular-slider-container">
                <div class="slider slider-for">
                    @foreach($products as $product)
                        <div>
                            <div class="img-div">
                                <img src="{{asset($product->img_url)}}">
                                <span class="line"></span>
                            </div>
                            <div class="caption">
                                <h3>{{$product->product_trans_lang[0]->name}}</h3>
                                <p>
                                    {{$product->product_trans_lang[0]->description}}
                                </p>
                                <a href="product-1.html">
                                    <span class="mr-1">MORE</span>
                                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="slider slider-nav">
                    @foreach($products as $product)
                        <div><img src="{{asset($product->img_url)}}"></div>
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
                    <h3 class="title animated wow fadeInUp" style="animation-delay:0.25s">Partners</h3>
                </div>
                <div class="col-lg-6 col-md-8  offset-md-2  offset-lg-3">
                    <p class="title-p animated wow fadeInUp" style="animation-delay:0.25s">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1 partener slider animated wow fadeInUp" style="animation-delay:0.25s">
                    <div>
                        <img src="assets/images/p1.svg" style="fill: #000;">
                    </div>
                    <div>
                        <img src="assets/images/p2.svg">
                    </div>
                    <div>
                        <img src="assets/images/p3.svg">
                    </div>
                    <div>
                        <img src="assets/images/p4.svg">
                    </div>
                    <div>
                        <img src="assets/images/p5.svg">
                    </div>
                    <div>
                        <img src="assets/images/p6.png">
                    </div>
                    <div>
                        <img src="assets/images/p7.svg">
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
                    <h3 class="title animated wow fadeInUp" style="animation-delay:0.25s">Clients</h3>
                </div>
                <div class="col-lg-6  offset-lg-3 col-md-8  offset-md-2">
                    <p class="title-p animated wow fadeInUp" style="animation-delay:0.25s">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                    </p>
                </div>
            </div>
            <div class=" animated wow fadeInUp" style="animation-delay:0.25s">
                <div class="client slider col-lg-6  offset-lg-3 col-md-8 offset-md-2">
                    <div>
                        <img src="assets/images/c1.jpg">
                    </div>
                    <div>
                        <img src="assets/images/c2.jpg">
                    </div>
                    <div>
                        <img src="assets/images/c6.jpg">
                    </div>
                    <div>
                        <img src="assets/images/c3.jpg">
                    </div>
                    <div>
                        <img src="assets/images/c5.jpg">
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
