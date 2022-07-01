@extends('layouts.app')
@section('content')
<div class="container-fluid p-0 m-0">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner cur-slider">
            <div class="carousel-item active ">
            <img src="{{url('img/romantic-love android-iphone-desktop-hd-backgrounds-wallpapers-1080p-4k-wzqb5.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="{{url('img/134-1347818_couple-love-pics-couple-in-love-pics-couple.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="{{url('img/Cute-Love-You-Wallpaper.jpg')}}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="container-fluid profilePage">

    <div class="row p-4">
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
        <div class="col-md-2 d-flex">
            
            @if(auth::user()->profile->id == $data->id)
                <div>
                    <button class="btn btn-outline-dark"><a href="/morePhoto" class="text-light" style="text-decoration:none;">Upload Photo</a></button>
                    <button class="btn btn-outline-dark  m-3"><a class="text-light" href="/editProfile/{{$data->id}}" style="text-decoration:none;">edit profile</a></button>
                    <!-- <button class="btn btn-primary m-3"><span>{{$data->follower->count()}}</span> Following</button> -->
                </div>
            @endif
            <div >
                @if(!$data->FollowedBy($data['user']->profile))
                    <form action="/follow/{{$data->id}}" method="post">
                        @csrf
                        <button class="btn btn-warning m-3">Following</button>
                    </form>
                @else
                    <form action="/unfollow/{{$data->id}}" method="post">
                        @csrf
                        <button class="btn btn-danger m-3">UnFollow</button>
                    </form>
                
                @endif
               <div>
                    <button class="btn btn-warning m-3"><span>{{$data->follower->count()}}</span> Following</button>
               </div>
               <div>
                <!-- Messages part -->
              
                <button class="btn btn-danger m-3"><a href="/message/{{$data->id}}">Message</a></button>
                <form action="/saveMessage" method="post">
                    @csrf
                        <h2 style="text-decoration:underline;">Welcome to message Page</h2>
                        <div>
                        <input type="hidden" name="to_id" value="{{$data->id}}">
                            <textarea name="message_body" id="" cols="40" rows="6"></textarea>
                        </div>
                    
                        <div class="form-group ">
                        
                            <div class="col-md-6">
                            <button class="btn btn-warning pt-2 mt-3">Submit</button>
                            </div>
                        </div>

                    </form>
                    <!-- Messages part End -->
                  
               </div>
            </div>                         
        </div>
        <div class="col-md-7 mt-4 p-4 bg-dark">
            <div class="card">
                <div class="card-header">
                    <h2 style="font-family:Lucida Handwriting;color:#ff0047;">Some of my Info</h2>
                </div>
                <div class="card-body bg-warning">
                 
                    @if(auth::user()->yourSelf)
                        <p style="font-family:Lucida Handwriting;font-size:19px;color:#ff0047;">{{$data->your_self->about_you}}</p>

                        <p style="font-family:Lucida Handwriting;font-size:19px;color:#ff0047;">My Hobbi is {{$data->your_self->hobbies}}</p>
                        <p style="font-family:Lucida Handwriting;font-size:19px;color:#ff0047;">My Altimate goal is {{$data->your_self->aim}}</p>
                        <p style="font-family:Lucida Handwriting;font-size:19px;color:#ff0047;">{{$data->your_self->favourite_things}} I love to do</p>
                        <p style="font-family:Lucida Handwriting;font-size:19px;color:#ff0047;">I am{{$data->your_self->height}} tall</p>
                        <p style="font-family:Lucida Handwriting;font-size:19px;color:#ff0047;">My weight is {{$data->your_self->weight}}</p>
                        <p style="font-family:Lucida Handwriting;font-size:19px;color:#ff0047;">My dream {{$data->your_self->dream}}</p>
                    @else
                        <button class="btn btn-dark"><a href="/aboutYourSelf" class="text-light">crete your your self option</a></button>
                        <p>Create your self to see your profile in home page</p>
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
                        <img src="/storage/{{$photo['photo']}}" alt="" style="width:230px;height:230px;margin-bottom:10px;">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
</div>




@endsection