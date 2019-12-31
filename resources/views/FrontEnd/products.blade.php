@extends('FrontEnd.layout.layout')
@section('content')
    <!-- Products -->
    <section class="products-wrap sec-pt mt-5 ">
        <div class="container">
            <div class="row mb-5">
                <div class="col-sm-12 text-center">
                    <div class="title">{{trans('Stay updated with our products')}}</div>
                </div>
                <div class="col-lg-6 col-md-8  offset-md-2  offset-lg-3">
                    <p class="title-p text-center">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-md-4 col-sm-6">
                                <div class="card">
                                    <img src="{{$product->img_url}}" class="card-img-top">
                                    <div class="card-body">
                                        <h3 class="card-title font-weight-bold">
                                            <a href="{{$product->path()}}">{{$product->product_trans_lang->name}}</a>
                                        </h3>
                                        <p class="card-text">{{Str::limit($product->product_trans_lang->description, 30, ' (...)')}}</p>
                                        <div class="  d-flex flex-row-reverse">
                                            <a href="product-1.html" class="more">
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- ./Products -->
@endsection
