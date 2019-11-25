@extends('admin.layouts.app')
@section('content')
    <h1 class="heading_title">{{trans('dashBoard.showAll')}}</h1>

    <div class="wrap container">
        <table class="table table-bordered table-responsive table-primary">
            <thead>
            <td class="col-md-4">{{trans('dashBoard.userName')}}</td>
            <td class="col-md-4">{{trans('dashBoard.userEmail')}}</td>
            <td class="col-md-4">{{trans('dashBoard.userAction')}}</td>
            </thead>
            @foreach($users as $user)
                <tr>
                    <td class="col-md-4">{{$user->name}}</td>
                    <td class="col-md-4">{{$user->email}}</td>
                    <td class="col-md-4">
                        <a  href="{{route('editView', $user)}}"  class="mb-1 glyphicon glyphicon-pencil btn btn-primary" data-toggle="tooltip"
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
