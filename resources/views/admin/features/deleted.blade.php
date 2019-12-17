@extends('admin.layouts.app')
@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">{{trans('features.deleted')}}</h3>

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
                    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-6"></div>
                            <div class="col-sm-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example1" class="table table-bordered table-hover dataTable" role="grid"
                                       aria-describedby="example2_info">
                                    <thead>
                                    <tr role="row">
                                        <th>#id</th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1"
                                            aria-sort="ascending"
                                            aria-label="Rendering engine: activate to sort column descending">{{trans('products.productName')}}
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1"
                                            aria-label="Browser: activate to sort column ascending">{{trans('products.productDescription')}}
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1"
                                            aria-label="Platform(s): activate to sort column ascending">{{trans('products.action')}}
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($features as $key => $feature)
                                        <tr role="row" class="odd">
                                            <td>{{$key + 1}}</td>
                                            <td class="sorting_1">{{$feature->feature_trans_lang->name}}</td>
                                            <td>{{$feature->feature_trans_lang->description}}</td>
                                            <td>
                                                <button class="btn btn-primary glyphicon glyphicon-ok"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        onclick="restoreFeature({{$feature->id}})"
                                                        id="restore{{$feature->id}}"
                                                        title="{{trans('products.restoreUser')}}">
                                                </button>
                                                <button onclick="softDeleteProduct({{$feature->id}})"
                                                        class="glyphicon glyphicon-remove btn btn-danger"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title="{{trans('products.deleteForEver')}}"
                                                        id="{{$feature->id}}">
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#id</th>
                                        <th rowspan="1" colspan="1">{{trans('products.productName')}}</th>
                                        <th rowspan="1" colspan="1">{{trans('products.productDescription')}}</th>
                                        <th rowspan="1" colspan="1">{{trans('products.action')}}</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection
@section('scripts')

    <script>
        $(function () {
            $('#example1').DataTable({
                'paging': true,
                'lengthChange': true,
                'searching': true,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script>

    <script>
        function restoreFeature(id) {
            console.log(id)
            axios({
                method: 'post',
                url: '{{route('restoreFeature')}}',
                data: {
                    id: id,
                    _token: "{{csrf_token()}}"
                }
            }).then((res) => {
                console.log(res.data);
                $('#restore' + id).parent().parent().remove();
            });
        }

        function softDeleteProduct(id) {
            Swal.fire({
                title: 'Delet User',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Delete',
                preConfirm: () => {
                    axios({
                        method: 'delete',
                        url: '{{route('forceDeleteFeature')}}',
                        data: {
                            id: id,
                            _token: "{{csrf_token()}}",
                        }
                    }).then((res) => {
                        console.log(res.data)
                        $('#' + id).parent().parent().remove();
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
                            title: '{{trans('products.productDoneRemoving')}}'
                        })
                    });
                }
            })
        }
    </script>
@endsection

