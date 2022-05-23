@extends('layouts.app')
@section('content')
<h2>Write Aboute Yourself</h2>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <form action="saveYourSelf" method="post">
                @csrf
                <div class="form-group ">
                    <label for="about_you" class="col-md-4 col-form-label text-md-right">{{ __('About_you') }}</label>
                    <div class="col-md-6">
                        <input id="about_you" type="text" class="form-control" name="about_you" value="{{ old('about_you') }}"   autofocus>
                        <span style="color:red;"> @error('about_you'){{$message}}@enderror</span>
                    </div>
                </div>

                <div class="form-group ">
                    <label for="hobbies" class="col-md-4 col-form-label text-md-right">{{ __('hobbies') }}</label>
                    <div class="col-md-6">
                        <input id="hobbies" type="text" class="form-control @error('hobbies') is-invalid @enderror" name="hobbies" value="{{ old('hobbies') }}"  autocomplete="hobbies" autofocus>
                    </div>
                </div>

                <div class="form-group ">
                    <label for="aim" class="col-md-4 col-form-label text-md-right">{{ __('aim') }}</label>
                    <div class="col-md-6">
                        <input id="aim" type="text" class="form-control @error('aim') is-invalid @enderror" name="aim" value="{{ old('aim') }}"  autocomplete="aim" autofocus>
                    </div>
                </div>

                <div class="form-group ">
                    <label for="favourite_thing" class="col-md-4 col-form-label text-md-right">{{ __('favourite_thing') }}</label>
                    <div class="col-md-6">
                        <input id="favourite_thing" type="text" class="form-control @error('favourite_thing') is-invalid @enderror" name="favourite_thing" value="{{ old('favourite_thing') }}"  autocomplete="favourite_thing" autofocus>
                    </div>
                </div>

                <div class="form-group ">
                    <label for="height" class="col-md-4 col-form-label text-md-right">{{ __('height') }}</label>
                    <div class="col-md-6">
                        <input id="height" type="text" class="form-control @error('height') is-invalid @enderror" name="height" value="{{ old('height') }}"  autocomplete="height" autofocus>
                    </div>
                </div>

                <div class="form-group ">
                    <label for="weight" class="col-md-4 col-form-label text-md-right">{{ __('weight') }}</label>
                    <div class="col-md-6">
                        <input id="weight" type="text" class="form-control @error('weight') is-invalid @enderror" name="weight" value="{{ old('weight') }}"  autocomplete="weight" autofocus>
                    </div>
                </div>

                <div class="form-group ">
                    <label for="dream" class="col-md-4 col-form-label text-md-right">{{ __('dream') }}</label>
                    <div class="col-md-6">
                        <input id="dream" type="text" class="form-control @error('dream') is-invalid @enderror" name="dream" value="{{ old('dream') }}"  autocomplete="dream" autofocus>
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