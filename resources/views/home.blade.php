@extends('layouts.app')

@section('content')
<!-- Carousel Start -->
<div class="container-fluid p-0 m-0" id="home">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;width:100%">
                <img class="position-absolute w-100 h-100" src="img/carousel-1.jpg" style="object-fit: cover;">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h1 class="display-1 font-secondary text-white mt-n3 mb-md-4">Choose Your</h1>
                        <div class="d-inline-block border-top border-bottom border-light py-3 px-4">
                            <h3 class="text-uppercase font-weight-normal text-white m-0" style="letter-spacing: 2px;">Best possible partner</h3>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->
 <div class="container-fluid mainCon p-0">
    <div class="row justify-content-center">
      <div class="col-md-10">    
    </div>
    </div>
    <div class="row p-0">
        <div class="col-md-3 text-light ">
            <div class="card p-3 cardBackImage" >
                <div class="control-group">
                    <label class="control-label alignL">Sort Profile </label>
                    <select name="sort" id="sort" class="form-control select2 sort">
                        <option value="profile_first_to_last">sort Profile</option>
                        <option value="profile_name_a_z">A-Z</option>
                        <option value="profile_name_z_a">Z-A</option>
                        <option value="profile_last_to_first">Accessding</option>
                        
                    </select>
                </div>
                
                <h5 class="text-warning">Aim</h5>
                @foreach($profile as $allProfile)
                    <div class="d-flex">
                        <div style="margin-right:5px;"><input type="checkbox" class="aim" name="aim[]" value="{{$allProfile->aim}}"></div>
                        <div> <p>{{$allProfile->aim}}</p></div>
                    </div>
                @endforeach 
                <h5 class="text-warning">Favourite Thing</h5>
                @foreach($profile as $allSelf)
                    <div class="d-flex">
                        <div style="margin-right:5px;"><input type="checkbox" id="favourite_thing[]" name="favourite_thing[]" class="favourite_thing" value="{{$allSelf->favourite_thing}}"></div>
                        <div> <p>{{$allSelf->favourite_thing}}</p></div>
                    </div>
                @endforeach 
                <h5 class="text-warning">height</h5> 
                @foreach($profile as $allSelf)
                    <div class="d-flex">
                        <div style="margin-right:5px;"><input type="checkbox" id="height" name="height[]" value="{{$allSelf->hobbies}}"></div>
                        <div> <p>{{$allSelf->height}}</p></div>
                    </div>
                @endforeach 
                <h5 class="text-warning">Weight</h5> 
                @foreach($profile as $allSelf)
                    <div class="d-flex">
                        <div style="margin-right:5px;"><input type="checkbox" id="weight" name="weight[]" value="{{$allSelf->hobbies}}"></div>
                        <div> <p>{{$allSelf->weight}}</p></div>
                    </div>
                @endforeach  
                <h5 class="text-warning">Dream</h5> 
                @foreach($profile as $allSelf)
                    <div class="d-flex">
                        <div style="margin-right:5px;"><input type="checkbox" id="dream" name="dream[]" value=""></div>
                        <div> <p>{{$allSelf->dream}}</p></div>
                    </div>
                @endforeach 
                </div> 
            </div>
            <div class="col-md-8 filter_products">
                 @include('ajaxProfileListing')
           </div>
        </div>
    </div>
</div>

@endsection
