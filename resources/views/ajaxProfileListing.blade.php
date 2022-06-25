<div class="row text-light">
    @foreach($profile as $allProfile)
        <div class="col-md-4">
            <a href="/profilePage/{{$allProfile['user_profile']['id']}}" style="text-decoration:none;color:#74f512;;font-weight:bold;"> <h3>{{$allProfile['user_profile']['name']}}</h3></a>
            <a href="/profilePage/{{$allProfile['id']}}"> <img src="/storage/{{$allProfile['user_profile']['profile_picture']}}" alt="" style="width:200px;height:170px;border-radius: 50%;margin-bottom:20px;"></a>
            <p>{{$allProfile['user_profile']['bio']}}</p>
            <p>{{$allProfile['user_profile']['education']}}</p>
            <p>{{$allProfile['aim']}}</p>
            
        </div>
    @endforeach  
</div>
