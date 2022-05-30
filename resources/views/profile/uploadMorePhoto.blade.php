@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 "  >
            <form action="/morePhotoUpload" method="post" enctype="multipart/form-data"style="background-color: #181717;color: aliceblue;margin-left:150px;padding-left:100px;padding-top:10px;padding-bottom:10px;">
            @csrf
                <h2 style="text-decoration:underline;">Upload Your Photo</h2>

               
                <div class="form-group ">
                    <label for="profile_picture" class="col-md-4 col-form-label text-md-right">{{ __('picture') }}</label>
                    <div class="col-md-6">
                        <input id="profile_picture" type="file" class="form-control @error('profile_picture') is-invalid @enderror" name="photo" autocomplete="profile_picture" autofocus>
                        <span style="color:red;"> @error('photo'){{$message}}@enderror</span>
                    </div>
                </div>

                <div class="form-group ">
                    <label for="caption" class="col-md-4 col-form-label text-md-right">{{ __('Caption') }}</label>
                    <div class="col-md-6">
                        <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption"  autocomplete="caption" autofocus>
                    </div>
                </div>

                <div class="form-group ">
                  
                    <div class="col-md-6">
                       <button class="btn btn-warning pt-2 mt-3">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection