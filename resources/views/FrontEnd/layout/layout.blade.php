<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wakeb</title>
    @php $locale = session()->get('locale'); @endphp

    @if($locale=='en')
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    @endif
    @if($locale=='ar')
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.rtl.min.css')}}">
    @endif
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/home.css')}}">
    @if($locale=='ar')
        <link rel="stylesheet" href="{{asset('assets/css/style.rtl.css')}}">
    @endif
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cairo&display=swap">
</head>
<body>
<!-- Loading Animation-->
<div id="layout-loading">
    <!-- <h1 class="font-weight-bold">WAKEB</h1> -->
    <img src="{{asset('assets/images/wakeb-logo.svg')}}" class="wakeb">
    <div class="loader-effect"></div>
</div>

<div id="wrap">
    <!-- menu -->
    <div id="menu">
        <div class="container-fluid">
            <div class="navigation">
                <a class="navbar-brand brand-logo" href="{{route('home')}}">
                    <img src="{{asset('assets/images/wakeb-logo.svg')}}" alt="Wakeb" title="Wakeb">
                </a>
                <span id="toggle-menu">Menu</span>
            </div>
        </div>
        <div id="menu-content">
            <div class="container-fluid menu-list">
                <ul>
                    <li>

                        @switch($locale)
                            @case('en')
                            <a href="{{route('changeLang', 'ar')}}" class="mb-2 font-weight-normal">
                                <img src="{{asset('assets/images/lang.png')}}" class="mr-1" width="22px">
                                <span>العربية</span>
                            </a>
                            @break
                            @case('ar')
                            <a href="{{route('changeLang', 'en')}}" class="mb-2 font-weight-normal">
                                <img src="{{asset('assets/images/lang.png')}}" class="mr-1" width="22px">
                                <span>English</span>
                            </a>
                            @break
                            @default
                            <a href="{{route('changeLang', 'ar')}}" class="mb-2 font-weight-normal">
                                <img src="{{asset('assets/images/lang.png')}}" class="mr-1" width="22px">
                                <span>العربية</span>
                            </a>
                        @endswitch
                    </li>
                    <li class="active">
                        <a href="{{route('home')}}">{{trans('Home')}}</a>
                    </li>
                    <li class="has-menu">
                        <a>{{trans('products.products')}}</a>
                        <ul class="sub-menu">
                            @foreach($products as $product)
                                <li><a href="product-1.html">{{$product->product_trans_lang[0]->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="has-menu">
                        <a>{{trans('services.services')}}</a>
                        <ul class="sub-menu">
                            @foreach($services as $service)
                                <li><a href="service-1.html">{{$service->service_trans_lang[0]->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="has-menu">
                        <a>Solutions</a>
                        <ul class="sub-menu">
                            <li><a href="solution-1.html">Financial Services</a></li>
                            <li><a href="solution-2.html">Insurance</a></li>
                            <li><a href="solution-3.html">Healthcare</a></li>
                            <li><a href="solution-4.html">Marketing</a></li>
                            <li><a href="solution-5.html">Telecom</a></li>
                            <li><a href="solution-6.html">Manufacturing</a></li>
                            <li><a href="solution-7.html">Retail</a></li>
                            <li><a href="solution-8.html">Human Resources</a></li>
                            <li><a href="solution-9.html">Media and Advertising</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="blogs.html">Blogs</a>
                    </li>
                    <li>
                        <a href="{{route('about')}}">{{trans('About us')}}</a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}">{{trans('Contact us')}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--/. menu -->

    <!-- header -->
    <header class="home-header ">
        <div class="container-fluid sec-pt">
            <div class="row position-relative content mt-5">
                <div class="col-lg-6 col-md-10">
                    <h6>We are offering</h6>
                    <div class="vertical-slider mt-4">
                        <div>
                            <h3>Artificial Intelligence at one stop</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                magna aliquyam erat, sed diam voluptua. At vero eos et
                                accusam et justo duo dolores et ea rebum.</p>
                        </div>
                        <div>
                            <h3>Data Management Maturity by CMMI</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                magna aliquyam erat, sed diam voluptua. At vero eos et
                                accusam et justo duo dolores et ea rebum.</p>
                        </div>
                        <div>
                            <h3>Predictive Analytics</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                magna aliquyam erat, sed diam voluptua. At vero eos et
                                accusam et justo duo dolores et ea rebum.</p>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-5 col-md-4 header-animation">
                    <div class="h-side-imgs ">
                        <img src="assets/images/home-robot-1.svg" class="part1">
                        <img src="assets/images/home-robot-2.svg" class="part2">
                        <img src="assets/images/home-robot-3.svg" class="part3">
                        <img src="assets/images/home-robot-4.svg" class="part4">
                        <img src="assets/images/home-robot-5.svg" class="part5">
                        <img src="assets/images/home-robot-6.svg" class="part6">
                        <img src="assets/images/home-robot-7.svg" class="part7">
                        <img src="assets/images/home-robot-8.svg" class="part8">
                        <img src="assets/images/home-robot-9.svg" class="part9">
                        <img src="assets/images/home-robot-10.svg" class="part10">
                        <img src="assets/images/home-robot-11.svg" class="part11">
                        <!-- <img src="assets/images/integrated.svg" class="integrated"> -->
                        <!-- <div class="robot">
                            <img src="assets/images/home-robot.png" class="parent" >
                        </div> -->
                    </div>

                </div>
            </div>
            <div class="scroll-next" data-scroll="scroll-target">
                <div class=" d-flex">
                    <img src="assets/images/mouse.png" alt="Down" class="mr-2 animated-up-down">
                    <span class="mt-1">Scroll Down</span>
                </div>
            </div>
        </div>
        <div class="integrated"><img src="assets/images/integrated.svg" alt=""></div>
    </header>
    <!--/. header -->
@yield('content')

<!-- Footer  -->
    <footer class="footer">
        <div class="container-fluid">
            <ul>
                <li>
                    <a href="{{route('home')}}">Home</a>
                </li>
                <li>
                    <a href="products.html">{{trans('products.products')}}</a>
                </li>
                <li>
                    <a href="services.html">{{trans('services.services')}}</a>
                </li>
                <li>
                    <a href="solutions.html">Solutions</a>
                </li>
                <li>
                    <a href="blogs.html">Blog</a>
                </li>
                <li>
                    <a href="{{route('about')}}">{{trans('About us')}}</a>
                </li>
                <li>
                    <a href="{{route('contact')}}">{{trans('Contact us')}}</a>
                </li>
            </ul>
            <ul class="list">
                <li>
                    <a target="_blank" href="https://www.facebook.com/Wakeb.tech/"><i class="fa fa-facebook"
                                                                                      title="facebook"></i></a>
                </li>
                <li>
                    <a target="_blank" href="https://www.linkedin.com/company/wakeb-data"><i class="fa fa-linkedin"
                                                                                             title="linkedin"></i></a>
                </li>
                <li>
                    <a target="_blank" href="https://twitter.com/WAKEB_Data"><i class="fa fa-twitter"
                                                                                title="twitter"></i></a>
                </li>
                <li><a target="_blank" href="https://www.instagram.com/wakeb.data/" title="instagram"><i
                            class="fa fa-instagram"></i></a>
                </li>
            </ul>
            <p>Wakeb © 2019, All copyrights reserved</p>
        </div>
    </footer>
    <!--/. Footer  -->

</div>

<!--jquery-->
<script src="{{asset('assets/js/jquery-min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- slick JS -->
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<!-- WOW JS -->
<script src="{{'assets/js/wow.min.js'}}"></script>
<script>
    new WOW().init();
</script>
<!-- functions JS -->
<script src="{{asset('assets/js/functions.js')}}"></script>

</body>
</html>
