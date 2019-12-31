@extends('FrontEnd.layout.layout')
@section('content')
    <!-- solutions -->
    <section class="solutions sec-pt">
        <div class="blog-bg my-4" style="background-image: url('{{asset($solution->img_url)}}')">
        </div>
        <div class="third-title">
            <a href="solutions.html">{{trans('solutions.solutions')}}</a>
            <span>{{$solution->trans_lang->name}}</span>
        </div>
        <div class="container mt-5">
            <div class="row mb-5 text-center">
                <div class="col-lg-12 ">
                    <h3 class="title">{{trans('Overview')}}</h3>
                </div>
                <div class="col-lg-6 col-md-8  offset-md-2  offset-lg-3">
                    <p class="title-p text-center">
                        {!! $solution->trans_lang->description !!}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row my-5">
                        <div class="col-lg-12 text-center">
                            <h3 class="title">{{trans('Usecase')}}</h3>
                        </div>
                        @foreach($solution->useCases as $useCase)
                            <div class="col-md-4 col-sm-6">
                                <div class="card">
                                    <img src="{{asset($useCase->img_url)}}" class="card-img-top">
                                    <div class="card-body">
                                        <h3 class="card-title font-weight-bold"><a
                                                href="{{$useCase->path()}}">{{$useCase->trans_lang->title}}</a>
                                        </h3>
                                        <p class="card-text">{{Str::words($useCase->trans_lang->description,10,'....')}}</p>
                                        <div class="  d-flex flex-row-reverse">
                                            <a href="{{$useCase->path()}}" class="more">
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
    <!-- solutions -->


@endsection
