@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="d-flex">
                <div style="margin-right:50px;margin-bottom:30px;">
                    <img src="/storage/{{$data['profile_picture']}}" alt="no image" style="width:300px;height:260px;">
                </div>
                <div class="ml-5">
                    <p>{{$data->name}}</p>
                    <p>{{$data['user']['email']}}</p>
                    <p>{{$data['user']['name']}}</p>

                    <p>{{auth::user()->id}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4>{{$data->yourSelf->about_you}}</h4>
                    <h4>My Hobbi is {{$data->yourSelf->hobbies}}</h4>
                    <h4>My Altimate goal is {{$data->yourSelf->aim}}</h4>
                    <h4>{{$data->yourSelf->favourite_things}} I love to do</h4>
                    <h4>I am{{$data->yourSelf->height}} tall</h4>
                    <h4>My weight is {{$data->yourSelf->weight}}</h4>
                    <h4>My dream {{$data->yourSelf->dream}}</h4>
                    
                </div>
            </div>
        </div>
    </div>
</div>



@endsection