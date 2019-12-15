@extends('admin.layouts.app')
@section('content')
    <div class="col-md-12">

        <!-- Profile Image -->
        <div class="box box-primary">
            <div class="box-body box-profile">

                <h3 class="profile-username text-center">{{$message->name}}</h3>

                <p class="text-muted text-center">{{$message->phone}}</p>

                <h2>{{$message->message}}</h2>
                <h2>@if($message->read)
                        Done Reading
                    @else
                        Not Read
                    @endif
                </h2>
            </div>
            <!-- /.box-body -->
            @if(!$message->read)
                <form action="{{route('markAsRead', $message)}}" method="post">
                    @csrf
                    <button class="btn btn-primary" type="submit">Done</button>
                </form>
            @endif
        </div>
        <!-- /.box -->
    </div>

@endsection
