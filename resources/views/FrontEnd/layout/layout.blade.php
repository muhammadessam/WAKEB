<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$settings->first()->name}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="{{$settings->first()->author}}">
    <meta name="keywords" content="{{$settings->first()->keywords}}">
    <meta name="title" content="{{$settings->first()->name}}">
    <meta name="description" content="{{$settings->first()->description}}">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{$settings->first()->url}}">
    <meta property="og:title" content="{{$settings->first()->name}}">
    <meta property="og:description" content="{{$settings->first()->description}}">
    <meta property="og:image" content="شركة واكب للذكاء الاصطناعي">


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
    <img src="{{asset($settings->first()->img_url)}}" class="wakeb">
    <div class="loader-effect"></div>
</div>

<div id="wrap">
    <!-- menu -->
    <div id="menu">
        <div class="container-fluid">
            <div class="navigation">
                <a class="navbar-brand brand-logo" href="{{route('home')}}">
                    <img src="{{asset($settings->first()->img_url)}}" alt="Wakeb" title="Wakeb">
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
                                <li>
                                    <a href="{{$product->path()}}">{{$product->product_trans_lang->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="has-menu">
                        <a>{{trans('services.services')}}</a>
                        <ul class="sub-menu">
                            @foreach($services as $service)
                                <li>
                                    <a href="{{$service->path()}}">{{$service->service_trans_lang->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="has-menu">
                        <a>{{trans('solutions.solutions')}}</a>
                        <ul class="sub-menu">
                            @foreach($solutions as $solution)
                                <li>
                                    <a href="{{$solution->path()}}">{{$solution->trans_lang->name}}</a>
                                </li>
                            @endforeach
                        </ul>
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

    <!--/. header -->
@yield('content')

<!-- Footer  -->
    <footer class="footer">
        <div class="container-fluid">
            <ul>
                <li>
                    <a href="{{route('home')}}">{{trans('Home')}}</a>
                </li>
                <li>
                    <a href="{{route('showAllProductsFront')}}">{{trans('products.products')}}</a>
                </li>
                <li>
                    <a href="{{route('showAllServicesFront')}}">{{trans('services.services')}}</a>
                </li>
                <li>
                    <a href="{{route('showAllSolutionsFront')}}">{{trans('solutions.solutions')}}</a>
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
                                                                                      title="Visit Wakeb on Facebok"></i></a>
                </li>
                <li>
                    <a target="_blank" href="https://www.linkedin.com/company/wakeb-data"><i class="fa fa-linkedin"
                                                                                             title="Visit Wakeb on linkedin"></i></a>
                </li>
                <li>
                    <a target="_blank" href="https://twitter.com/WAKEB_Data"><i class="fa fa-twitter"
                                                                                title="Visit Wakeb on Twitter"></i></a>
                </li>
                <li><a target="_blank" href="https://www.instagram.com/wakeb.data/" title="Visit Wakeb on instagram"><i
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
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('js/sweetalert.js')}}"></script>
@if(session()->has('message'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            onOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'success',
            title: '{{trans('Message Received Successfully')}}'
        })
    </script>
@endif
<script>
    new WOW().init();
</script>
<!-- functions JS -->
<script src="{{asset('assets/js/functions.js')}}"></script>
</body>
</html>
