@extends('admin.layouts.app')
@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">{{trans('products.productEdit')}}</h3>
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
                    <form role="form" action="{{route('updateProduct', $product)}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="tab-content">
                            @foreach($langs as $lang)
                                <div class="tab-pane {{$lang->id==1 ?'active':''}}" id="tab{{$lang->id}}">
                                    <div class="form-group {{$errors->has('name_'.$lang->lang) ? 'has-error' : ''}}">
                                        <label for="productName">{{trans('products.productName')}}</label>
                                        <input type="text" class="form-control" id="productName"
                                               name="name_{{$lang->lang}}"
                                               placeholder="{{trans('products.productNameEnter_'.$lang->lang)}}"
                                               @foreach($product->product_trans as $trans) @if($trans->lang_id==$lang->id) value="{{$trans->name}}" @endif @endforeach>
                                        @error('name_'.$lang->$lang)
                                        <span class="help-block">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div
                                        class="form-group {{$errors->has('description_'.$lang->lang) ? 'has-error' : ''}}">
                                        <label for="description">{{trans('products.productDescription')}}</label>
                                        <textarea
                                            class="form-control"
                                            id="description" name="description_{{$lang->lang}}"
                                            placeholder="{{trans('products.productDescriptionEnter_'.$lang->lang)}}">@foreach($product->product_trans as $trans){{$trans->lang_id == $lang->id ? $trans->description :''}}@endforeach</textarea>
                                        @error('description_'.$lang->lang)
                                        <span class="help-block">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="form-group {{$errors->has('img') ? 'has-error' : ''}}">
                            <label for="image">{{trans('products.productImage')}}</label>
                            <input type="file" id="image" name="img">
                            @error('img')
                            <span class="help-block">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="box-footer">
                            <button type="submit"
                                    class="btn btn-primary">{{trans('products.productEdit')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
