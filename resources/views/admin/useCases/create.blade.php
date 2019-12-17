@extends('admin.layouts.app')
@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">{{trans('usecases.add')}}</h3>
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
                    <form role="form" action="{{route('usecasesStore')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="tab-content">
                            @foreach($langs as $lang)
                                <div class="tab-pane {{$lang->id==1 ?'active':''}}" id="tab{{$lang->id}}">
                                    <div class="form-group {{$errors->has('name_'.$lang->lang) ? 'has-error' : ''}}">
                                        <label for="productName">{{trans('usecases.title')}}</label>
                                        <input type="text" class="form-control" id="productName"
                                               name="name_{{$lang->lang}}"
                                               placeholder="{{trans('Please Enter Solution Name')}}"
                                               value="{{old('name_'.$lang->lang)}}"
                                        >
                                        @error('name_'.$lang->$lang)
                                        <span class="help-block">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('description_'.$lang->lang) ? 'has-error' : ''}}">
                                        <label for="description">{{trans('usecases.description')}}</label>
                                        <textarea
                                            class="form-control"
                                            id="description" name="description_{{$lang->lang}}">{{old('description_'.$lang->lang)}}</textarea>
                                        @error('description_'.$lang->lang)
                                        <span class="help-block">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('challenges_'.$lang->lang) ? 'has-error' : ''}}">
                                        <label for="description">{{trans('usecases.challenges')}}</label>
                                        <textarea
                                            class="form-control"
                                            id="challenges" name="challenges_{{$lang->lang}}">{{old('challenges_'.$lang->lang)}}</textarea>
                                        @error('challenges_'.$lang->lang)
                                        <span class="help-block">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('opportunities_'.$lang->lang) ? 'has-error' : ''}}">
                                        <label for="description">{{trans('usecases.opportunities')}}</label>
                                        <textarea
                                            class="form-control"
                                            id="description" name="opportunities_{{$lang->lang}}">{{old('opportunities_'.$lang->lang)}}</textarea>
                                        @error('opportunities_'.$lang->lang)
                                        <span class="help-block">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('whyWakeb_'.$lang->lang) ? 'has-error' : ''}}">
                                        <label for="description">{{trans('usecases.whyWakeb')}}</label>
                                        <textarea
                                            class="form-control"
                                            id="description" name="whyWakeb_{{$lang->lang}}">{{old('whyWakeb_'.$lang->lang)}}</textarea>
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
                        <div class="form-group">
                            <label>{{trans('usecases.solution')}}</label>
                            <select class="form-control select2 select2-hidden-accessible" name="solution"
                                    style="width: 100%;" tabindex="-1" aria-hidden="true">
                                <option disabled selected>{{trans('usecases.solution')}}</option>
                                @foreach($solutions as $solution)
                                    <option value="{{$solution->id}}">{{$solution->trans_lang->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="box-footer">
                            <button type="submit"
                                    class="btn btn-primary">{{trans('usecases.add')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
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
                title: '{{trans('solutions.added')}}'
            })
        </script>
    @endif
@endsection
