@extends('FrontEnd.layout.layout')
@section('content')
    @if($about->count() > 0)
        <section class="about-us sec-pt  ">
            <div class="container mt-lg">
                <div class="row mb-5">
                    <div class="col-sm-12 text-center">
                        <div class="title">{{$about->first()->title}}</div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="mb-5 ">
                            <h3 class="font-weight-bold text-uppercase">{{trans('About us')}}</h3>
                            <p>
                                {{$about->first()->about_us}}
                            </p>
                        </div>
                        <div class="mb-5 ">
                            <h3 class="font-weight-bold text-uppercase">{{trans('Our Goals')}}</h3>
                            <p>
                                {{$about->first()->our_goals}}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-5 ">
                            <h3 class="font-weight-bold text-uppercase">{{trans('Vision')}}</h3>
                            <p>
                                {{$about->first()->vision}}
                            </p>
                        </div>
                        <div class="mb-5">
                            <h3 class="font-weight-bold text-uppercase">{{trans('How we work')}}</h3>
                            <p>
                                {{$about->first()->how_we_work}}
                            </p>
                        </div>
                    </div>
                </div>

                <!--slider-->
                <div class="row  about-slider">
                    <div class="col-lg-8 offset-lg-2 ">
                        <div class="vertical-slider">
                            <div>
                                <div class="media">
                                    <img class="mr-3" src="assets/images/manager1.jpg" alt="">
                                    <div class="media-body">
                                        <div class="mt-0">Hamad Elmunif</div>
                                        <div class="font-weight-bold d-block">WAKEB CEO</div>
                                        <p class="mt-2 mb-0">
                                            We work to enhance and increase human intelligence instead of replacing it
                                            with
                                            artificial intelligence techniques to amplify human innovation and business
                                            efficiency to keep pace with the latest global technologies of artificial
                                            intelligence at one stop...
                                        </p>
                                    </div>
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                </div>
                            </div>
                            <!-- <div>
                                <div class="media">
                                    <img class="mr-3" src="assets/images/c1.png" alt="">
                                    <div class="media-body">
                                        <div class="mt-0">John Doe</div>
                                        <div class="font-weight-bold d-block">WAKEB CEO</div>
                                        <p class="mt-2 mb-0">
                                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                                sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                                                sed diam voluptua.
                                        </p>
                                    </div>
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                </div>
                            </div>  -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
