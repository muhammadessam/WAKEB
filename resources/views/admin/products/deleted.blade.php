@extends('admin.layouts.app')
@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">{{trans('dashBoard.deletedUsers')}}</h3>

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
                                <table id="example2" class="table table-bordered table-hover dataTable" role="grid"
                                       aria-describedby="example2_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1"
                                            aria-sort="ascending"
                                            aria-label="Rendering engine: activate to sort column descending">{{trans('dashBoard.userName')}}
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1"
                                            aria-label="Browser: activate to sort column ascending">{{trans('dashBoard.userEmail')}}
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1"
                                            aria-label="Platform(s): activate to sort column ascending">{{trans('dashBoard.userAction')}}
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                                <button class="btn btn-primary glyphicon glyphicon-ok"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        onclick="restoreUSer({{$user->id}})" id="restore{{$user->id}}"
                                                        title="{{trans('dashBoard.restoreUser')}}">
                                                </button>
                                                <button onclick="softDeletUser({{$user->id}})"
                                                        class="glyphicon glyphicon-remove btn btn-danger"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title="{{trans('dashBoard.deleteForEver')}}"
                                                        id="{{$user->id}}">
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">{{trans('dashBoard.userName')}}</th>
                                        <th rowspan="1" colspan="1">{{trans('dashBoard.userEmail')}}</th>
                                        <th rowspan="1" colspan="1">{{trans('dashBoard.userAction')}}</th>
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
        function restoreUSer(id) {
            console.log(id)
            axios({
                method: 'post',
                url: '{{route('restoreUser')}}',
                data: {
                    id: id,
                    _token: "{{csrf_token()}}"
                }
            }).then((res) => {
                console.log(res.data);
                $('#restore' + id).parent().parent().remove();
            });
        }

        function softDeletUser(id) {
            Swal.fire({
                title: 'Delet User',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Delete',
                preConfirm: () => {
                    axios({
                        method: 'delete',
                        url: '{{route('forceDelete')}}',
                        data: {
                            id: id,
                            _token: "{{csrf_token()}}",
                        }
                    }).then((res) => {
                        if (res.data[0] == 'error') {
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
                                icon: 'error',
                                title: '{{trans('dashBoard.cannotRemoveUser')}}'
                            })
                        } else {
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
                                title: '{{trans('dashBoard.userRemoved')}}'
                            })
                        }
                    });
                }
            })
        }
    </script>
@endsection
