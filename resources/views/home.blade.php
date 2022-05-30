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
    <div class="row justify-content-center">
      
        <div class="col-md-10">
            
        </div>
     
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card p-3">
            <div class="control-group">
			    <label class="control-label alignL">Sort Profile </label>
                <select name="sort" id="sort" class="form-control select2 sort">
                    <option value="profile_first_to_last">sort Profile</option>
                    <option value="profile_name_a_z">A-Z</option>
                    <option value="profile_name_z_a">Z-A</option>
                    <option value="profile_last_to_first">Accessding</option>
                   
                </select>
            </div>
                <!-- <h5>Education</h5>
                <input type="text" name="url" value="" id="url">
                
                @foreach($profile as $allProfile)
                    <div class="d-flex">
                        <div style="margin-right:5px;"><input type="checkbox" class="education" name="education[]" value="{{$allProfile->education}}"></div>
                        <div> <p>{{$allProfile->education}}</p></div>
                    </div>
                @endforeach   -->
                <!-- <h5>Aim</h5>
                @foreach($self as $allSelf)
                    <div class="d-flex">
                        <div style="margin-right:5px;"><input type="checkbox" id="aim" name="aim[]" value="{{$allSelf->aim}}"></div>
                        <div> <p>{{$allSelf->aim}}</p></div>
                    </div>
                @endforeach  
                <h5>Favourite Thing</h5>
                @foreach($self as $allSelf)
                    <div class="d-flex">
                        <div style="margin-right:5px;"><input type="checkbox" id="favourite_thing[]" name="favourite_thing" value="{{$allSelf->favourite_thing}}"></div>
                        <div> <p>{{$allSelf->favourite_thing}}</p></div>
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
                @endforeach  -->
                </div> 
            </div>
            <div class="col-md-8 filter_products">
                 @include('ajaxProfileListing')
            </div>
        </div>
       

        
        
    </div>
    
    
     
</div>

@endsection
