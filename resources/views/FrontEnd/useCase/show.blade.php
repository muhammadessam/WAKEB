@extends('FrontEnd.layout.layout')
@section('content')
    <!-- use case -->
    <section class="solutions sec-pt">
        <div class="blog-bg my-4" style="background-image: url('{{asset($useCase->img_url)}}')">
        </div>
        <div class="third-title">
            <a href="solution-1.html">{{$useCase->trans_lang->title}}</a>
        </div>
        <div class="container mt-5">
            <div class="row mb-5 text-center">
                <div class="col-lg-12 ">
                    <h3 class="title">{{$useCase->trans_lang->title}}</h3>
                </div>
                <div class="col-lg-6 col-md-8  offset-md-2  offset-lg-3">
                    <p class="title-p text-center">
                        {{$useCase->trans_lang->description}}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row my-5">
                        <div class="col-md-6 ">
                            <h3 class="font-weight-bold text-uppercase">{{trans('usecases.challenges')}}</h3>
                            <p class="mb-5">{{$useCase->trans_lang->challenges}}</p>
                            <h3 class="font-weight-bold text-uppercase">{{trans('usecases.whyWakeb')}}</h3>
                            <p class="mb-5">{{$useCase->trans_lang->why_wakeb}}</p>
                        </div>
                        <div class="col-md-6">
                            <h3 class="font-weight-bold text-uppercase">{{trans('usecases.opportunities')}}</h3>
                            <p class="mb-5">{{$useCase->trans_lang->opportunities}}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- use case -->




@endsection
