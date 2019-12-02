@extends('admin.layouts.app')
@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">{{trans('dashBoard.productsAdd')}}</h3>
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
                    <form role="form" action="{{route('storeProduct')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="tab-content">
                            @foreach($langs as $lang)
                                <div class="tab-pane {{$lang->id==1 ?'active':''}}" id="tab{{$lang->id}}">
                                    <div class="form-group {{$errors->has('name_'.$lang->lang) ? 'has-error' : ''}}">
                                        <label for="productName">{{trans('dashBoard.productName')}}</label>
                                        <input type="text" class="form-control" id="productName"
                                               name="name_{{$lang->lang}}"
                                               placeholder="{{trans('dashBoard.productNameEnter_'.$lang->lang)}}">
                                        @error('name_'.$lang->$lang)
                                        <span class="help-block">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('description_'.$lang->lang) ? 'has-error' : ''}}">
                                        <label for="description">{{trans('dashBoard.productDescription')}}</label>
                                        <textarea
                                            class="form-control"
                                            id="description" name="description_{{$lang->lang}}"
                                            placeholder="{{trans('dashBoard.productDescriptionEnter_'.$lang->lang)}}"></textarea>
                                        @error('description_'.$lang->lang)
                                        <span class="help-block">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="form-group {{$errors->has('img') ? 'has-error' : ''}}">
                            <label for="image">{{trans('dashBoard.productImage')}}</label>
                            <input type="file" id="image" name="img">
                            @error('img')
                            <span class="help-block">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="box-footer">
                            <button type="submit"
                                    class="btn btn-primary">{{trans('dashBoard.productsAdd')}}</button>
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
                title: '{{trans('dashBoard.productAddSuccessfully')}}'
            })
        </script>
    @endif
@endsection
