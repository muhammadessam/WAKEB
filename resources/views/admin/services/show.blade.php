@extends('admin.layouts.app')
@section('content')
    <div class="col-md-12">

        <!-- Profile Image -->
        <div class="box box-primary">
            <div class="box-body box-profile">
                <img class="img-responsive img-circle" style="margin: 0 auto; width: 100px;height: 100px;"
                     src="{{asset($service->img_url)}}" alt="User profile picture">

                <h3 class="profile-username text-center">{{$service->service_trans_lang->name}}</h3>

                <p class="text-muted text-center">{{$service->service_trans_lang->description}}</p>

                <ul class="list-group list-group-unbordered">
                    @foreach($service->features as $feature)
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <b>{{$feature->feature_trans_lang[0]->name}}</b>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-primary glyphicon glyphicon-remove">
                                    </button>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>

@endsection
