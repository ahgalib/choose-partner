@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 "  >
            <form action="saveProfile" method="post" enctype="multipart/form-data"style="background-color: #181717;color: aliceblue;margin-left:150px;padding-left:100px;padding-top:10px;padding-bottom:10px;">
            @csrf
                <h2 style="text-decoration:underline;">Create Your profile</h2>

                <div class="form-group ">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
                        <span style="color:red;"> @error('name'){{$message}}@enderror</span>
                    </div>
                </div>

                <div class="form-group ">
                    <label for="bio" class="col-md-4 col-form-label text-md-right">{{ __('Bio') }}</label>
                    <div class="col-md-6">
                        <input id="bio" type="text" class="form-control @error('bio') is-invalid @enderror" name="bio" value="{{ old('bio') }}"  autocomplete="bio" autofocus>
                    </div>
                </div>

                <div class="form-group ">
                    <label for="education" class="col-md-4 col-form-label text-md-right">{{ __('Education') }}</label>
                    <div class="col-md-6">
                        <input id="education" type="text" class="form-control @error('education') is-invalid @enderror" name="education" value="{{ old('education') }}"  autocomplete="education" autofocus>
                    </div>
                </div>

                <div class="form-group ">
                    <label for="birth_date" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>
                   <div class="col-md-6">
                        <input id="birth_date" type="text" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ old('birth_date') }}"  autocomplete="birth_date" autofocus>
                    </div>
                </div>
                
                <div class="form-group ">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                    <div class="col-md-6">
                       <select name="gender" id="" class="form-control select2">
                           <option>Chose your Gender</option>
                           <option value="male">Male</option>
                           <option value="female">female</option>
                       </select>
                    </div>
                </div>

                <div class="form-group ">
                    <label for="profile_picture" class="col-md-4 col-form-label text-md-right">{{ __('profile picture') }}</label>
                    <div class="col-md-6">
                        <input id="profile_picture" type="file" class="form-control @error('profile_picture') is-invalid @enderror" name="profile_picture" value="{{ old('profile_picture') }}"  autocomplete="profile_picture" autofocus>
                    </div>
                </div>

                <div class="form-group ">
                    <label for="caption" class="col-md-4 col-form-label text-md-right">{{ __('Caption') }}</label>
                    <div class="col-md-6">
                        <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}"  autocomplete="caption" autofocus>
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