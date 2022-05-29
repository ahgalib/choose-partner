<div class="row">
               
               @foreach($profile as $allProfile)
                   <div class="col-md-4">
                       <p>{{$allProfile['name']}}</p>
                       <img src="/storage/{{$allProfile['profile_picture']}}" alt="" style="width:200px;height:170px;border-radius: 50%;">
                     
                   </div>
               @endforeach  
           </div>
