@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            @if(auth()->user()->profile)
            <button class="btn btn-primary m-3"><a href="/profilePage/{{auth()->user()->profile->id}}" class="text-light" style="text-decoration:none;">Viist Your Profile</a></button>
            @else
            <button class="btn btn-primary m-3"><a href="/createProfile" class="text-light" style="text-decoration:none;">Create Your Profile</a></button>
            @endif
        </div>
    </div>
      
    <div class="row">
        <div class="col-md-3">
            <div class="card p-3">
                <h5>Hobbies</h5>
                <input type="text" name="url" value="" id="url">
                @foreach($self as $allSelf)
                    <div class="d-flex">
                        <div style="margin-right:5px;"><input type="checkbox" id="hobbies" name="hobbies[]" value="{{$allSelf->hobbies}}"></div>
                        <div> <p>{{$allSelf->hobbies}}</p></div>
                    </div>
                @endforeach  
                <h5>Aim</h5>
                @foreach($self as $allSelf)
                    <div class="d-flex">
                        <div style="margin-right:5px;"><input type="checkbox" id="aim" name="aim[]" value="{{$allSelf->hobbies}}"></div>
                        <div> <p>{{$allSelf->hobbies}}</p></div>
                    </div>
                @endforeach  
                <h5>Favourite Thing</h5>
                @foreach($self as $allSelf)
                    <div class="d-flex">
                        <div style="margin-right:5px;"><input type="checkbox" id="favourite_thing[]" name="favourite_thing" value="{{$allSelf->hobbies}}"></div>
                        <div> <p>{{$allSelf->hobbies}}</p></div>
                    </div>
                @endforeach 
                <h5>height</h5> 
                @foreach($self as $allSelf)
                    <div class="d-flex">
                        <div style="margin-right:5px;"><input type="checkbox" id="height" name="height[]" value="{{$allSelf->hobbies}}"></div>
                        <div> <p>{{$allSelf->hobbies}}</p></div>
                    </div>
                @endforeach 
                <h5>Weight</h5> 
                @foreach($self as $allSelf)
                    <div class="d-flex">
                        <div style="margin-right:5px;"><input type="checkbox" id="weight" name="weight[]" value="{{$allSelf->hobbies}}"></div>
                        <div> <p>{{$allSelf->hobbies}}</p></div>
                    </div>
                @endforeach  
                <h5>Dream</h5> 
                @foreach($self as $allSelf)
                    <div class="d-flex">
                        <div style="margin-right:5px;"><input type="checkbox" id="dream" name="dream[]" value=""></div>
                        <div> <p>{{$allSelf->hobbies}}</p></div>
                    </div>
                @endforeach  
                </div>
            </div>
            @foreach($profile as $allProfile)
                <div class="col-md-2 m-3">
                    <p>{{$allProfile->name}}</p>
                    <img src="/storage/{{$allProfile['profile_picture']}}" alt="" style="width:200px;height:170px;border-radius: 50%;">

                </div>
            @endforeach  

        
        
    </div>
    
    
     
</div>

@endsection
