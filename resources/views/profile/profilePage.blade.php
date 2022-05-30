@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="d-flex">
                <div style="margin-right:50px;margin-bottom:30px;">
                    <img src="/storage/{{$data['profile_picture']}}" alt="" style="width:300px;height:270px;">
                </div>
                <div class="ml-5">
                    <p style="font-family:Bell MT;font-weight:bold;font-size:21px;">{{$data->name}}</p>
                    <p style="font-family:Bell MT;font-weight:bold;font-size:21px;">{{$data['user']['email']}}</p>
                    <p style="font-family:Bell MT;font-weight:bold;font-size:21px;">{{$data['user']['name']}}</p>
                    <p style="font-family:Bell MT;font-weight:bold;font-size:21px;">{{$data->bio}}</p>
                    <p style="font-family:Bell MT;font-weight:bold;font-size:21px;">{{$data->education}}</p> <p>{{$data->date_of_birth}}</p>

                    <p>{{auth::user()->id}}</p>
                  
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary"><a href="/morePhoto" class="text-white">Upload Photo</a></button>
            <button class="btn btn-primary m-3"><a href="/editProfile/{{$data->id}}" class="text-white">edit profile</a></button>
        </div>
        <div class="col-md-7 mt-4 p-4 bg-dark">
            <div class="card">
                <div class="card-header">
                    <h2 style="font-family:Lucida Handwriting;color:#ff0047;">Some of my Info</h2>
                </div>
                <div class="card-body bg-warning">
                 
                    @if(auth::user()->yourSelf)
                        <p style="font-family:Lucida Handwriting;font-size:19px;color:#ff0047;">{{$data->yourSelf->about_you}}</p>

                        <p style="font-family:Lucida Handwriting;font-size:19px;color:#ff0047;">My Hobbi is {{$data->yourSelf->hobbies}}</p>
                        <p style="font-family:Lucida Handwriting;font-size:19px;color:#ff0047;">My Altimate goal is {{$data->yourSelf->aim}}</p>
                        <p style="font-family:Lucida Handwriting;font-size:19px;color:#ff0047;">{{$data->yourSelf->favourite_things}} I love to do</p>
                        <p style="font-family:Lucida Handwriting;font-size:19px;color:#ff0047;">I am{{$data->yourSelf->height}} tall</p>
                        <p style="font-family:Lucida Handwriting;font-size:19px;color:#ff0047;">My weight is {{$data->yourSelf->weight}}</p>
                        <p style="font-family:Lucida Handwriting;font-size:19px;color:#ff0047;">My dream {{$data->yourSelf->dream}}</p>
                    @else
                        <button><a href="/aboutYourSelf">crete your your self option</a></button>
                    @endif
                </div>
                <div class="card-footer">
                <button class="btn btn-primary"><a href="/editYourSelf" class="text-white">edit profile</a></button>
                </div>
            </div>
        </div>
        <div class="col-md-5 mt-4">
            <div class="row">
                @foreach($data['photo'] as $photo)
                    <div class="col-md-6">
                        <img src="/storage/{{$photo['photo']}}" alt="" style="width:200px;height:170px;">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>



@endsection