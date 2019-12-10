@extends('FrontEnd.layout.layout')
@section('content')
    <div class="single-service  sec-pt  ">
        <div class="container mt-lg">
            <div class="row mb-5">
                <div class="col-sm-12 text-center">
                    <div class="title">{{$service->service_trans_lang[0]->name}}</div>
                </div>
            </div>
        </div>
        <section class="py-5 scroll" id="section1">
            <div class="container">
                <div class="media mb-5">
                    <div class="mr-5 media-image">
                        <img src="{{asset($service->img_url)}}" alt="" max-width="100%">
                    </div>
                    <div class="media-body">
                        <h3 class="mt-0 font-weight-bold text-uppercase">{{trans('About')}}</h3>
                        <p>{!!$service->service_trans_lang[0]->description!!}</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="light-bg sec-padding scroll" id="section2">
            <div class="container pb-5">
                <h3 class="font-weight-bold mb-5">{{trans('features.features')}}</h3>
                <div class="row">
                    @foreach($service->features as $feature)
                        <div class="col-md-6 mb-5">
                            <h3 class="side-title font-weight-bold">{{$feature->feature_trans_lang[0]->name}}</h3>
                            <p>{!! $feature->feature_trans_lang[0]->description  !!}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="sec-padding scroll" id="section3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-5">
                            <h3 class="font-weight-bold text-uppercase">BUSINESS SHOWCASE</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                accusam et justo duo dolores et ea rebum.Lorem ipsum dolor sit amet, consetetur
                                sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                                rebum.</p>
                        </div>
                        <div class="mb-5">
                            <h3 class="font-weight-bold text-uppercase">BUSINESS SHOWCASE</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, consetetur sadipscing elitr,
                                consetetur sadipscing elitr, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit amet, consetetur
                                sadipscing elitr. Lorem ipsum dolor sit amet, consetetur sadipscing elitr Lorem ipsum
                                dolor sit amet,consetetur sadipscing elitr Lorem ipsum dolor sit amet,consetetur
                                sadipscing elitr Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-1">
                        <div class="side-img-bg">
                            <img src="{{asset('assets/images/service2-1.jpg')}}" alt="">
                            <span class="bg"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec-padding scroll" id="section4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="title">Schedule a meeting with us</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                            et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                            Lorem ipsum dolor sit amet. </p>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <form action="#" class="col-lg-8 offset-lg-2">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="nameHelp"
                                           placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                           placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="number" class="form-control" id="phone" aria-describedby="nameHelp"
                                           placeholder="">
                                </div>
                                <button type="submit" class="btn  btn-lg btn-block send">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <ul class="fixedslider">
            <li><a href="#section1" class="active"></a></li>
            <li><a href="#section2"></a></li>
            <li><a href="#section3"></a></li>
            <li><a href="#section4"></a></li>
        </ul>
    </div>
@endsection
