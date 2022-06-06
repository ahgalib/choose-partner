<div class="row">
               
               @foreach($profile as $allProfile)
                   <div class="col-md-4">
                      <a href="/profilePage/{{$allProfile->id}}" style="text-decoration:none;color:darkorange;font-weight:bold;"> <p>{{$allProfile['name']}}</p></a>
                      <a href="/profilePage/{{$allProfile->id}}"> <img src="/storage/{{$allProfile['profile_picture']}}" alt="" style="width:200px;height:170px;border-radius: 50%;margin-bottom:20px;"></a>
                     
                   </div>
               @endforeach  
           </div>
