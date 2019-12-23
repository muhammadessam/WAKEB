@extends('FrontEnd.layout.layout')
@section('content')
    <section class="contact-us sec-pt  ">
        <div class="container mt-lg">
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="title mt-3">{{trans("Let's partner up!")}}</div>
                    <div class="address">
                        <div>
                            <h3 class="d-inline-block m-1 font-weight-bold">{{trans('Address')}}</h3>
                            <span>{{$settings->first()->address}}</span>
                        </div>
                        <div>
                            <h3 class="d-inline-block m-1 font-weight-bold">{{trans('Phone')}}</h3>

                            <a href="tel:+966531089888"><span>{{$settings->first()->mobile}}</span></a>
                        </div>
                        <div>
                            <h3 class="d-inline-block m-1 font-weight-bold">{{trans('Email')}}</h3>
                            <a href="mailto:info@wakeb.tech?subject=" Home msil"><span>{{$settings->first()->email}}</span></a>

                        </div>
                    </div>
                    <div class="social-icons">
                        <ul class="list mb-5">
                            <li>
                                <a target="_blank" href="https://www.facebook.com/Wakeb.tech/"><i class="fa fa-facebook"
                                                                                                  title="facebook"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.linkedin.com/company/wakeb-data"><i
                                        class="fa fa-linkedin" title="linkedin"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="https://twitter.com/WAKEB_Data"><i class="fa fa-twitter"
                                                                                            title="twitter"></i></a>
                            </li>
                            <li><a target="_blank" href="https://www.instagram.com/wakeb.data/" title="instagram"><i
                                        class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="text-center mb-3">
                        <img src="assets/images/arrow.svg" class="mr-1" width="26px">
                        <h3 class="color font-weight-bold d-inline-block">Get In Touch</h3>
                    </div>
                    <div class="row">
                        <form action="{{route('contactUs')}}" method="post" class="col-lg-8 offset-lg-2">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" aria-describedby="nameHelp"
                                       placeholder="" name="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                       placeholder="" name="email">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="number" class="form-control" id="phone" aria-describedby="nameHelp"
                                       placeholder="" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" rows="4" name="message"></textarea>
                            </div>
                            <button type="submit" class="btn  btn-lg btn-block send">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
