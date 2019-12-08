@extends('admin.layouts.app')
@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">{{trans('services.servicesRemoved')}}</h3>

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
                                        <th>{{trans('services.serviceImage')}}</th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1"
                                            aria-sort="ascending"
                                            aria-label="Rendering engine: activate to sort column descending">{{trans('services.serviceName')}}
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1"
                                            aria-label="Browser: activate to sort column ascending">{{trans('services.serviceDescription')}}
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1"
                                            aria-label="Platform(s): activate to sort column ascending">{{trans('services.action')}}
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($services as $key => $service)
                                        <tr role="row" class="odd">
                                            <td>{{$key + 1}}</td>
                                            <td><img style="width: 30px;height: 30px;"
                                                     src="{{asset($service->img_url)}}" alt=""></td>
                                            <td class="sorting_1">{{$service->service_trans_lang[0]->name}}</td>
                                            <td>{{$service->service_trans_lang[0]->description}}</td>
                                            <td>
                                                <button class="btn btn-primary glyphicon glyphicon-ok"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        onclick="restoreservice({{$service->id}})"
                                                        id="restore{{$service->id}}"
                                                        title="{{trans('services.restoreUser')}}">
                                                </button>
                                                <button onclick="softDeleteservice({{$service->id}})"
                                                        class="glyphicon glyphicon-remove btn btn-danger"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title="{{trans('services.deleteForEver')}}"
                                                        id="{{$service->id}}">
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#id</th>
                                        <th>{{trans('services.serviceImage')}}</th>
                                        <th rowspan="1" colspan="1">{{trans('services.serviceName')}}</th>
                                        <th rowspan="1" colspan="1">{{trans('services.serviceDescription')}}</th>
                                        <th rowspan="1" colspan="1">{{trans('services.action')}}</th>
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
        function restoreservice(id) {
            console.log(id)
            axios({
                method: 'post',
                url: '{{route('restoreService')}}',
                data: {
                    id: id,
                    _token: "{{csrf_token()}}"
                }
            }).then((res) => {
                console.log(res.data);
                $('#restore' + id).parent().parent().remove();
            });
        }

        function softDeleteservice(id) {
            Swal.fire({
                title: 'Delet User',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Delete',
                preConfirm: () => {
                    axios({
                        method: 'delete',
                        url: '{{route('serviceForceDelete')}}',
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
                            title: '{{trans('services.serviceDoneRemoving')}}'
                        })
                    });
                }
            })
        }
    </script>
@endsection

