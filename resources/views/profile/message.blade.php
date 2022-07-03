@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
         <div class="col-md-8">
            @foreach($data as $msgid)
                <div class="d-flex">
                    <div>
                    <img src="/storage/{{$msgid->user->profile->profile_picture}}" alt="" style="width:100px;height:70px;border-radius: 50%;margin-bottom:20px;">
                    </div>
                    <div>
                    <p>{{$msgid->user->profile->name}}</p>
                    <div>{{$msgid->message_body}}</div>
                    </div>
                </div>          
            @endforeach
        </div>
        
    </div>

    <div class="row">
        <div class="col-md-6">
        <form action="/saveMessage" method="post">
        @csrf
            <h5 style="text-decoration:underline;">Reply</h5>
            <div>
            <input type="hidden" name="to_id" value="{{$to_id}}">
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
@endsection