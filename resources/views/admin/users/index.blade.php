@extends('admin.layouts.app')
@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">{{trans('users.showAll')}}</h3>

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
                                            aria-label="Rendering engine: activate to sort column descending">{{trans('users.userName')}}
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1"
                                            aria-label="Browser: activate to sort column ascending">{{trans('users.userEmail')}}
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1"
                                            aria-label="Platform(s): activate to sort column ascending">{{trans('users.userAction')}}
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $key => $user)


                                        <tr role="row" class="odd">
                                            <td>{{$key + 1}}</td>
                                            <td class="sorting_1">{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                                <a href="{{route('editView', $user)}}"
                                                   class="mb-1 glyphicon glyphicon-pencil btn btn-primary"
                                                   data-toggle="tooltip"
                                                   data-placement="top" title="تعديل"></a>
                                                <button onclick="softDeletUser({{$user->id}})"
                                                        class="glyphicon glyphicon-remove btn btn-warning"
                                                        data-toggle="tooltip"
                                                        data-placement="top" title="حذف"
                                                        data-id="{{$user->id}}"
                                                        id="{{$user->id}}"></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>#id</th>
                                        <th rowspan="1" colspan="1">{{trans('users.userName')}}</th>
                                        <th rowspan="1" colspan="1">{{trans('users.userEmail')}}</th>
                                        <th rowspan="1" colspan="1">{{trans('users.userAction')}}</th>
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
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>

    <script>
        function softDeletUser(id) {
            Swal.fire({
                title: 'Delet User',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Delete',
                preConfirm: () => {
                    axios({
                        method: 'delete',
                        url: "{{route('deleteUser')}}",
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
                                title: '{{trans('users.cannotRemoveUser')}}'
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
                                title: '{{trans('users.userRemoved')}}'
                            })
                        }
                    });
                }
            })
        }
    </script>
@endsection
