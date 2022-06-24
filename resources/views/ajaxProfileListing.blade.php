<div class="row text-light">
    @foreach($profile as $allProfile)
        <div class="col-md-4">
            <a href="/profilePage/{{$allProfile['id']}}" style="text-decoration:none;color:#74f512;;font-weight:bold;"> <h3>{{$allProfile['name']}}</h3></a>
            <a href="/profilePage/{{$allProfile['id']}}"> <img src="/storage/{{$allProfile['profile_picture']}}" alt="" style="width:200px;height:170px;border-radius: 50%;margin-bottom:20px;"></a>
            <p>{{$allProfile['bio']}}</p>
            <p>{{$allProfile['education']}}</p>
            
        </div>
    @endforeach  
</div>
