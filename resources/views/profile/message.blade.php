@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
         <div class="col-md-8">
            @foreach($data as $msgid)

                <div class="d-flex">
                    <div>
                    <a href="/messageChat/{{$msgid->user->profile->id}}"><img src="/storage/{{$msgid->user->profile->profile_picture}}" alt="" style="width:100px;height:70px;border-radius: 50%;margin-bottom:20px;"></a>
                    </div>
                    <div>
                    <p>{{$msgid->user->profile->name}}</p>
                    <div>{{$msgid->message_body}}</div>
                    <a href="#reply" data-id = "{{$msgid->id}}" class="replyBtn">Reply</a>
                    </div>
                </div>

                {{-- this is reply loop --}}
                @foreach ($msgid->replies as $reply)
                <div class="d-flex" style="margin-left:100px;">
                    <div>
                    <a href="/messageChat/{{$msgid->user->profile->id}}"><img src="/storage/{{$reply->user->profile->profile_picture}}" alt="" style="width:100px;height:70px;border-radius: 50%;margin-bottom:20px;"></a>
                    </div>
                    <div>
                    <p>{{$reply->user->profile->name}}</p>
                    <div>{{$reply->message_body}}</div>
                    @if(!Auth::user()->profile->id == $profile_id)
                    <a href="#reply" data-id = "{{$reply->parent_id}}" class="replyBtn">Reply</a>
                    @endif
                    </div>
                </div>
                @endforeach
            @endforeach
        </div>

    </div>

    <div class="row">
        <div class="col-md-6">
        <form action="/saveMessage" method="post" id="reply">
        @csrf
            <h5 style="text-decoration:underline;">Reply</h5>
            <div>
            <input type="text" name="parent_id" id="parent_id_value" >
            <input type="text" name="profile_id" value="{{$profile_id}}">
                <textarea name="message_body" id="" cols="40" rows="6"></textarea>
            </div>

            <div class="form-group ">
                <div class="col-md-6">
                    <button class="btn btn-warning pt-2 mt-3">Reply</button>
                </div>
            </div>

        </form>
            <!-- Messages part End -->
        </div>
    </div>
</div>
@endsection
