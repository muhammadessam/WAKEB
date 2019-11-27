@extends('admin.layouts.app')
@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">{{trans('dashBoard.addUser')}}</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title=""
                        data-original-title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title=""
                        data-original-title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="box">
                <div class="box-body">
                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-6"></div>
                            <div class="col-sm-6"></div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="box box-primary">
                                    <form role="form" action="{{route('storeUser')}}" method="post">
                                        @csrf
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">{{trans('dashBoard.userName')}}</label>
                                                <input type="text" name="name"
                                                       class="form-control" id="exampleInputEmail1"
                                                       placeholder="Enter email" value="{{old('name')}}">
                                                @error('name')
                                                <div class="alert alert-danger text-right"
                                                     role="alert">{{$message}}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label
                                                    for="exampleInputPassword1">{{trans('dashBoard.userEmail')}}</label>
                                                <input type="email" name="email" value="{{old('email')}}"
                                                       class="form-control" id="exampleInputPassword1"
                                                       placeholder="Password" >
                                                @error('email')
                                                <div class="alert alert-danger text-right"
                                                     role="alert">{{$message}}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label
                                                    for="exampleInputPassword1">{{trans('dashBoard.userPassword')}}</label>
                                                <input type="password" name="password"
                                                       class="form-control" id="exampleInputPassword1"
                                                       placeholder="Password">
                                                @error('password')
                                                <div class="alert alert-danger text-right"
                                                     role="alert">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <button type="submit"
                                                    class="btn btn-primary">{{trans('dashBoard.addUser')}}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
                title: '{{trans('dashBoard.userAddedSuccessfully')}}'
            })
        </script>
    @endif
@endsection
