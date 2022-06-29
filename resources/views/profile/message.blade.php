@extends('layouts.app')
@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-10" >
            <form action="/saveMessage" method="post">
            @csrf
                <h2 style="text-decoration:underline;">Welcome to message Page</h2>
                <div>
                <input type="hidden" name="to_id" value="{{$profile['id']}}">
                    <textarea name="message_body" id="" cols="40" rows="6"></textarea>
                </div>
               
                <div class="form-group ">
                  
                    <div class="col-md-6">
                       <button class="btn btn-warning pt-2 mt-3">Submit</button>
                    </div>
                </div>

            </form>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div>{{$data['message_body']}}</div>
            </div>
        </div>
    </div>
</div>
@endsection