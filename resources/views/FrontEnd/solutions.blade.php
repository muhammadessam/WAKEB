@extends('FrontEnd.layout.layout')
@section('content')
    <!-- Products -->
    <section class="products-wrap sec-pt mt-5 ">
        <div class="container">
            <div class="row mb-5">
                <div class="col-sm-12 text-center">
                    <div class="title">{{trans('Stay updated with our solutions')}}</div>
                </div>
                <div class="col-lg-6 col-md-8  offset-md-2  offset-lg-3">
                    <p class="title-p text-center">
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row">
                        @foreach($solutions as $solution)
                            <div class="col-md-4 col-sm-6">
                                <div class="card">
                                    <img src="{{$solution->img_url}}" class="card-img-top">
                                    <div class="card-body">
                                        <h3 class="card-title font-weight-bold">
                                            <a href="{{$solution->path()}}">{{$solution->trans_lang->name}}</a>
                                        </h3>
                                        <p class="card-text">{{Str::limit($solution->trans_lang->description, 30, ' (...)')}}</p>
                                        <div class="  d-flex flex-row-reverse">
                                            <a href="{{$solution->path()}}" class="more">
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
