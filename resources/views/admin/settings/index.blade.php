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
                    <form role="form" action="{{route('saveSettings')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="tab-content">
                            @foreach($langs as $lang)
                                <div class="tab-pane {{$lang->id==1 ?'active':''}}" id="tab{{$lang->id}}">
                                    <div class="form-group {{$errors->has('name_'.$lang->lang) ? 'has-error' : ''}}">
                                        <label for="productName">{{trans('Name')}}</label>
                                        <input type="text" class="form-control" id="productName"
                                               name="name_{{$lang->lang}}"
                                               @foreach($settings as $setting) @if($setting->lang_id==$lang->id) value="{{$setting->name}}" @endif @endforeach>
                                        @error('name_'.$lang->$lang)
                                        <span class="help-block">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('description_'.$lang->lang) ? 'has-error' : ''}}">
                                        <label for="productName">{{trans('Description')}}</label>
                                        <input type="text" class="form-control" id="productName"
                                               name="description_{{$lang->lang}}"
                                               @foreach($settings as $setting) @if($setting->lang_id==$lang->id) value="{{$setting->description}}" @endif @endforeach>
                                        @error('description_'.$lang->$lang)
                                        <span class="help-block">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('author_'.$lang->lang) ? 'has-error' : ''}}">
                                        <label for="productName">{{trans('Author')}}</label>
                                        <input type="text" class="form-control" id="productName"
                                               name="author_{{$lang->lang}}"
                                               @foreach($settings as $about) @if($about->lang_id==$lang->id) value="{{$about->author}}" @endif @endforeach>
                                        @error('author_'.$lang->$lang)
                                        <span class="help-block">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('location_'.$lang->lang) ? 'has-error' : ''}}">
                                        <label for="productName">{{trans('Location')}}</label>
                                        <input type="text" class="form-control" id="productName"
                                               name="location_{{$lang->lang}}"
                                               @foreach($settings as $about) @if($about->lang_id==$lang->id) value="{{$about->location}}" @endif @endforeach>
                                        @error('location_'.$lang->$lang)
                                        <span class="help-block">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group {{$errors->has('address_'.$lang->lang) ? 'has-error' : ''}}">
                                        <label for="productName">{{trans('Address')}}</label>
                                        <input type="text" class="form-control" id="productName"
                                               name="address_{{$lang->lang}}"
                                               @foreach($settings as $about) @if($about->lang_id==$lang->id) value="{{$about->address}}" @endif @endforeach>
                                        @error('address_'.$lang->$lang)
                                        <span class="help-block">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <hr>
                        <div class="form-group {{$errors->has('tw') ? 'has-error' : ''}}">
                            <label for="productName">{{trans('Twitter')}}</label>
                            <input type="text" class="form-control" id="productName"
                                   name="tw"
                                   @foreach($settings as $about) @if($about->lang_id==$lang->id) value="{{$about->tw}}" @endif @endforeach
                            >
                            @error('tw')
                            <span class="help-block">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group {{$errors->has('fb') ? 'has-error' : ''}}">
                            <label for="productName">{{trans('Facebook')}}</label>
                            <input type="text" class="form-control" id="productName"
                                   name="fb"
                                   @foreach($settings as $about) @if($about->lang_id==$lang->id) value="{{$about->fb}}" @endif @endforeach

                            >
                            @error('fb')
                            <span class="help-block">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group {{$errors->has('li') ? 'has-error' : ''}}">
                            <label for="productName">{{trans('Linked In')}}</label>
                            <input type="text" class="form-control" id="productName"
                                   name="li"
                                   @foreach($settings as $about) @if($about->lang_id==$lang->id) value="{{$about->li}}" @endif @endforeach
                            >
                            @error('li')
                            <span class="help-block">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group {{$errors->has('yt') ? 'has-error' : ''}}">
                            <label for="productName">{{trans('YouTube')}}</label>
                            <input type="text" class="form-control" id="productName"
                                   name="yt"
                                   @foreach($settings as $about) @if($about->lang_id==$lang->id) value="{{$about->yt}}" @endif @endforeach

                            >
                            @error('yt')
                            <span class="help-block">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group {{$errors->has('url') ? 'has-error' : ''}}">
                            <label for="productName">{{trans('URL')}}</label>
                            <input type="text" class="form-control" id="productName"
                                   name="url"
                                   @foreach($settings as $about) @if($about->lang_id==$lang->id) value="{{$about->url}}" @endif @endforeach

                            >
                            @error('url')
                            <span class="help-block">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group {{$errors->has('phone') ? 'has-error' : ''}}">
                            <label for="productName">{{trans('Phone')}}</label>
                            <input type="text" class="form-control" id="productName"
                                   name="phone"
                                   @foreach($settings as $about) @if($about->lang_id==$lang->id) value="{{$about->phone}}" @endif @endforeach

                            >
                            @error('phone')
                            <span class="help-block">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group {{$errors->has('keywords') ? 'has-error' : ''}}">
                            <label for="productName">{{trans('Key Words')}}</label>
                            <input type="text" class="form-control" id="productName"
                                   name="keywords"
                                   @foreach($settings as $about) @if($about->lang_id==$lang->id) value="{{$about->keywords}}" @endif @endforeach
                            >
                            @error('keywords')
                            <span class="help-block">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group {{$errors->has('mobile') ? 'has-error' : ''}}">
                            <label for="productName">{{trans('Mobile')}}</label>
                            <input type="text" class="form-control" id="productName"
                                   name="mobile"
                                   @foreach($settings as $about) @if($about->lang_id==$lang->id) value="{{$about->mobile}}" @endif @endforeach>
                            @error('mobile')
                            <span class="help-block">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                            <label for="productName">{{trans('Email')}}</label>
                            <input type="email" class="form-control" id="productName"
                                   name="email"
                                   @foreach($settings as $about) @if($about->lang_id==$lang->id) value="{{$about->email}}" @endif @endforeach

                            >
                            @error('email')
                            <span class="help-block">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group {{$errors->has('img') ? 'has-error' : ''}}">
                            <label for="image">{{trans('Logo')}}</label>
                            <input type="file" id="image" name="img">
                            @error('img')
                            <span class="help-block">{{$message}}</span>
                            @enderror
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
