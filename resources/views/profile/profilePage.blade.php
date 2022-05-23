@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <img src="/storage/{{$profile['profile_picture']}}" alt="no image" style="width:300px;height:260px;">
                </div>
                <div class="card-body">
                <p>{{$profile->name}}</p>
                <p>{{$profile['user']['email']}}</p>
                <p>{{$profile['user']['name']}}</p>

                <p>{{auth::user()->id}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                <p>{{$profile->yourSelf}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection