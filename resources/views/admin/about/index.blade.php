@extends('admin.layouts.app')
@section('content')


    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">{{trans('About')}}</h3>
        </div>

        <div class="row col-sm-offset-1">
            <div class="col-md-6">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        @foreach($langs as $lang)
                            <li class="{{$lang->id==1?'active':''}}"><a href="#tab{{$lang->id}}" data-toggle="tab"
                                                                        aria-expanded="true">{{$lang->lang}}</a>
                            </li>
                        @endforeach
                    </ul>
                    <form role="form" action="{{route('saveAbout')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="tab-content">
                            @foreach($langs as $lang)
                                <div class="tab-pane {{$lang->id==1 ?'active':''}}" id="tab{{$lang->id}}">
                                    <div class="form-group {{$errors->has('title_'.$lang->lang) ? 'has-error' : ''}}">
                                        <label for="productName">{{trans('Title')}}</label>
                                        <input type="text" class="form-control" id="productName"
                                               name="name_{{$lang->lang}}"
                                               @foreach($abouts as $about) @if($about->lang_id==$lang->id) value="{{$about->title}}" @endif @endforeach>
                                        @error('name_'.$lang->$lang)
                                        <span class="help-block">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('about_us_'.$lang->lang) ? 'has-error' : ''}}">
                                        <label for="productName">{{trans('About us')}}</label>
                                        <input type="text" class="form-control" id="productName"
                                               name="about_us_{{$lang->lang}}"
                                               @foreach($abouts as $about) @if($about->lang_id==$lang->id) value="{{$about->about_us}}" @endif @endforeach>
                                        @error('about_us_'.$lang->$lang)
                                        <span class="help-block">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('our_goals_'.$lang->lang) ? 'has-error' : ''}}">
                                        <label for="productName">{{trans('Our Goals')}}</label>
                                        <input type="text" class="form-control" id="productName"
                                               name="our_goals_{{$lang->lang}}"
                                               @foreach($abouts as $about) @if($about->lang_id==$lang->id) value="{{$about->our_goals}}" @endif @endforeach>
                                        @error('our_goals_'.$lang->$lang)
                                        <span class="help-block">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group {{$errors->has('vision_'.$lang->lang) ? 'has-error' : ''}}">
                                        <label for="productName">{{trans('Vision')}}</label>
                                        <input type="text" class="form-control" id="productName"
                                               name="vision_{{$lang->lang}}"
                                               @foreach($abouts as $about) @if($about->lang_id==$lang->id) value="{{$about->vision}}" @endif @endforeach>
                                        @error('vision_'.$lang->$lang)
                                        <span class="help-block">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('how_we_work_'.$lang->lang) ? 'has-error' : ''}}">
                                        <label for="productName">{{trans('How We Work')}}</label>
                                        <input type="text" class="form-control" id="productName"
                                               name="how_we_work_{{$lang->lang}}"
                                               @foreach($abouts as $about) @if($about->lang_id==$lang->id) value="{{$about->how_we_work}}" @endif @endforeach>
                                        @error('how_we_work_'.$lang->$lang)
                                        <span class="help-block">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="box-footer">
                            <button type="submit"
                                    class="btn btn-primary">{{trans('Save')}}</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>


@endsection
