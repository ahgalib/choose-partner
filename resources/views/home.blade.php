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
</div>
@endsection
