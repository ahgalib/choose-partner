<div class="filter_products">
@foreach($self as $allProfile)
                    <div class="col-md-4">
                      
                    
                      
                    
                        <p>{{$allProfile->hobbies}}</p>
                        <p>{{$allProfile->height}}</p>
                        <p>{{$allProfile->weight}}</p>
                    </div>
                @endforeach  
</div>
