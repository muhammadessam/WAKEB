@extends('admin.layouts.app')
@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Hover Data Table</h3>
        </div>
        <!-- /.box-header -->
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
                                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                    aria-sort="ascending"
                                    aria-label="Rendering engine: activate to sort column descending">{{trans('dashBoard.userName')}}
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                    aria-label="Browser: activate to sort column ascending">Browser
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                    aria-label="Platform(s): activate to sort column ascending">Platform(s)
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                    aria-label="Engine version: activate to sort column ascending">Engine version
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending">CSS grade
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)

                                <tr role="row" class="odd">
                                <td class="sorting_1">Gecko</td>
                                <td>Firefox 1.0</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.7</td>
                                <td>A</td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">Rendering engine</th>
                                <th rowspan="1" colspan="1">Browser</th>
                                <th rowspan="1" colspan="1">Platform(s)</th>
                                <th rowspan="1" colspan="1">Engine version</th>
                                <th rowspan="1" colspan="1">CSS grade</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10
                            of 57 entries
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                            <ul class="pagination">
                                <li class="paginate_button previous disabled" id="example2_previous"><a href="#"
                                                                                                        aria-controls="example2"
                                                                                                        data-dt-idx="0"
                                                                                                        tabindex="0">Previous</a>
                                </li>
                                <li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1"
                                                                      tabindex="0">1</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2"
                                                                tabindex="0">2</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3"
                                                                tabindex="0">3</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4"
                                                                tabindex="0">4</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5"
                                                                tabindex="0">5</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6"
                                                                tabindex="0">6</a></li>
                                <li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2"
                                                                                       data-dt-idx="7"
                                                                                       tabindex="0">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>





    <h1 class="heading_title">{{trans('dashBoard.showAll')}}</h1>

    <div class="wrap container">
        <table class="table table-bordered table-responsive table-primary">
            <thead>
            <td class="col-md-4">{{trans('dashBoard.userName')}}</td>
            <td class="col-md-4">{{trans('dashBoard.userEmail')}}</td>
            <td class="col-md-4">{{trans('dashBoard.userAction')}}</td>
            </thead>
                <tr>
                    <td class="col-md-4">{{$user->name}}</td>
                    <td class="col-md-4">{{$user->email}}</td>
                    <td class="col-md-4">
                        <a href="{{route('editView', $user)}}" class="mb-1 glyphicon glyphicon-pencil btn btn-primary"
                           data-toggle="tooltip"
                           data-placement="top" title="تعديل"></a>
                        <form class="form-inline mt-2" action="{{route('deleteUser', $user)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="glyphicon glyphicon-remove btn btn-danger"
                                    data-toggle="tooltip"
                                    data-placement="top" title="حذف"></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
@endsection
