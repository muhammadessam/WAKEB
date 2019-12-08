@extends('admin.layouts.app')
@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">{{trans('usecases.edit')}}</h3>
        </div>

        <div class="row col-sm-offset-1">
            <div class="col-md-12">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        @foreach($langs as $lang)
                            <li class="{{$lang->id==1?'active':''}}"><a href="#tab{{$lang->id}}" data-toggle="tab"
                                                                        aria-expanded="true">{{$lang->lang}}</a>
                            </li>
                        @endforeach
                    </ul>
                    <form role="form" action="{{route('usecaseUpdate', $useCase)}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="tab-content">
                            @foreach($langs as $lang)
                                <div class="tab-pane {{$lang->id==1 ?'active':''}}" id="tab{{$lang->id}}">
                                    <div class="form-group {{$errors->has('name_'.$lang->lang) ? 'has-error' : ''}}">
                                        <label for="productName">{{trans('usecases.title')}}</label>
                                        <input type="text" class="form-control" id="productName"
                                               name="name_{{$lang->lang}}"
                                               placeholder="{{trans('Please Enter Solution Name')}}"
                                               @foreach($useCase->trans as $trans) @if($trans->lang_id==$lang->id) value="{{$trans->title}}" @endif @endforeach>
                                        @error('name_'.$lang->$lang)
                                        <span class="help-block">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('description_'.$lang->lang) ? 'has-error' : ''}}">
                                        <label for="description">{{trans('usecases.description')}}</label>
                                        <textarea
                                            class="form-control"
                                            id="description" name="description_{{$lang->lang}}">@foreach($useCase->trans as $trans){{$trans->lang_id == $lang->id ? $trans->description :''}}@endforeach</textarea>
                                        @error('description_'.$lang->lang)
                                        <span class="help-block">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('challenges_'.$lang->lang) ? 'has-error' : ''}}">
                                        <label for="description">{{trans('usecases.challenges')}}</label>
                                        <textarea
                                            class="form-control"
                                            id="challenges" name="challenges_{{$lang->lang}}">@foreach($useCase->trans as $trans){{$trans->lang_id == $lang->id ? $trans->challenges :''}}@endforeach</textarea>
                                        @error('challenges_'.$lang->lang)
                                        <span class="help-block">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('opportunities_'.$lang->lang) ? 'has-error' : ''}}">
                                        <label for="description">{{trans('usecases.opportunities')}}</label>
                                        <textarea
                                            class="form-control"
                                            id="description" name="opportunities_{{$lang->lang}}">@foreach($useCase->trans as $trans){{$trans->lang_id == $lang->id ? $trans->opportunities :''}}@endforeach</textarea>
                                        @error('opportunities_'.$lang->lang)
                                        <span class="help-block">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('whyWakeb_'.$lang->lang) ? 'has-error' : ''}}">
                                        <label for="description">{{trans('usecases.whyWakeb')}}</label>
                                        <textarea
                                            class="form-control"
                                            id="description" name="whyWakeb_{{$lang->lang}}">@foreach($useCase->trans as $trans){{$trans->lang_id == $lang->id ? $trans->why_wakeb :''}}@endforeach</textarea>
                                        @error('whyWakeb_'.$lang->lang)
                                        <span class="help-block">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="form-group {{$errors->has('img') ? 'has-error' : ''}}">
                            <label for="image">{{trans('solutions.img')}}</label>
                            <input type="file" id="image" name="img">
                            @error('img')
                            <span class="help-block">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="box-footer">
                            <button type="submit"
                                    class="btn btn-primary">{{trans('usecases.edit')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
