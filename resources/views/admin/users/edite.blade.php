@extends('admin.layouts.app')
@section('content')
    <div class="form">

        <form class="form-horizontal" method="post" action="{{route('storeUser')}}">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="input0"
                       class="col-sm-2 control-label bring_right left_text">{{trans('dashBoard.userName')}}</label>
                <div class="col-sm-10">
                    <input type="text" name="name" value="{{$user->name}}" class="form-control" id="input0"
                           placeholder="{{trans('dashBoard.userName')}}">
                </div>
            </div>
            <div class="form-group">
                <label for="input2"
                       class="col-sm-2 control-label bring_right left_text">{{trans('dashBoard.userEmail')}}</label>
                <div class="col-sm-10">
                    <input type="email" name="email" value="{{$user->email}}" class="form-control" id="input2"
                           placeholder="{{trans('dashBoard.userEmail')}}">
                </div>
            </div>
            <div class="form-group">
                <label for="input3"
                       class="col-sm-2 control-label bring_right left_text">{{trans('dashBoard.userPassword')}}</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="input3"
                           placeholder="{{trans('dashBoard.userPassword')}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12 left_text">
                    <button type="submit" class="btn btn-danger">{{trans('dashBoard.editUser')}}</button>
                </div>
            </div>
        </form>
    </div>
@endsection
