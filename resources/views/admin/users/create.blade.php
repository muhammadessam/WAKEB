@extends('admin.layouts.app')
@section('content')
    <h1 class="heading_title">{{trans('dashBoard.addUser')}}</h1>

    <div class="form">
        <form class="form-horizontal" method="post" action="{{route('storeUser')}}">
            @csrf
            <div class="form-group">
                @error('name')
                <div class="alert alert-danger text-right" role="alert">{{$message}}</div>
                @enderror
                <label for="input0"
                       class="col-sm-2 control-label bring_right left_text">{{trans('dashBoard.userName')}}</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="input0"
                           placeholder="{{trans('dashBoard.userName')}}">
                </div>
            </div>
            <div class="form-group">
                @error('email')
                <div class="alert alert-danger text-right" role="alert">{{$message}}</div>
                @enderror
                <label for="input2"
                       class="col-sm-2 control-label bring_right left_text">{{trans('dashBoard.userEmail')}}</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="input2"
                           placeholder="{{trans('dashBoard.userEmail')}}">
                </div>
            </div>
            <div class="form-group">
                @error('password')
                <div class="alert alert-danger text-right" role="alert">{{$message}}</div>
                @enderror
                <label for="input3"
                       class="col-sm-2 control-label bring_right left_text">{{trans('dashBoard.userPassword')}}</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="input3"
                           placeholder="{{trans('dashBoard.userPassword')}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12 left_text">
                    <button type="submit" class="btn btn-danger">{{trans('dashBoard.addUser')}}</button>
                    <button type="reset" class="btn btn-default">{{trans('dashBoard.rest')}}</button>
                </div>
            </div>
        </form>
    </div>
    </div>
    </div>

@endsection

@section('scripts')
    @if(session()->has('message'))
        <script src="{{asset('js/sweetalert.js')}}"></script>
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
                title: '{{trans('dashBoard.userAddedSuccessfully')}}'
            })
        </script>
    @endif
@endsection
