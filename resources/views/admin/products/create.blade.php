@extends('admin.layouts.app')
@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">{{trans('dashBoard.productsAdd')}}</h3>

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
                        <div class="box box-primary">
                            <form role="form">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="productName">{{trans('dashBoard.productName')}}</label>
                                        <input type="text" class="form-control" id="productName" name="name_ar" placeholder="@lang('dashBoard.productNameEnterAr')">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">{{trans('dashBoard.productDescription')}}</label>
                                        <textarea class="form-control" id="description" name="description_ar" placeholder="@lang('dashBoard.productDescriptionEnterAr')"></textarea>
                                    </div>
                                </div>

                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="productName">{{trans('dashBoard.productName')}}</label>
                                        <input type="text" class="form-control" id="productName" name="name_en" placeholder="@lang('dashBoard.productNameEnterEn')">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">{{trans('dashBoard.productDescription')}}</label>
                                        <textarea class="form-control" id="description" name="description_en" placeholder="@lang('dashBoard.productDescriptionEnterEn')"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">{{trans('dashBoard.productImage')}}</label>
                                        <input type="file" id="image" name="img">
                                    </div>
                                </div>

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">{{trans('dashBoard.productsAdd')}}</button>
                                </div>
                            </form>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box box-primary">

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
                title: '{{trans('dashBoard.prod')}}'
            })
        </script>
    @endif
@endsection
