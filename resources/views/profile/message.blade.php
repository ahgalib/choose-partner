@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-10" >
            
        </div>
        <div class="row">
            <div class="col-md-8">
                @foreach($data as $msgid)
                <p>{{$msgid['name']}}</p>
                <div>{{$msgid->message}}</div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection