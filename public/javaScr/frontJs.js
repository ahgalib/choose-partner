$(document).ready(function(){
 
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    $("#sort").on('change',function(){
        var sort = $(".sort").val();
       
       // alert(sort);
        $.ajax({
            url:'/home',
            type:'get',
            data:{sort:sort},
            success:function(data){
                $(".filter_products").html(data);
            }
        });
    });
    

    // $(".education").on('click',function(){
    //     var education = getFilter('education');
    //     var aim = getFilter('aim')
       
    //    //alert(education);
    //     $.ajax({
    //         url:'/homeAjax',
    //         type:'post',
    //         data:{education:education,aim:aim},
    //         success:function(data){
    //             $(".filter_products").html(data);
    //         }
    //     });
    // });

    $(".aim").on('click',()=>{
       // var education = getFilter('education');
        var aim = getFilter('aim')
        $.ajax({
            url:'/homeAjax',
            type:'post',
            data:{aim:aim},
            success:function(data){
                $(".filter_products").html(data);
            }
        });
    })

    $(".favourite_thing").on('click',()=>{
        // var education = getFilter('education');
        var dream = getFilter('dream')
         var aim = getFilter('aim')
         var favourite_thing = getFilter('favourite_thing')
         $.ajax({
             url:'/homeAjax',
             type:'post',
             data:{aim:aim,favourite_thing:favourite_thing,dream:dream},
             success:function(data){
                 $(".filter_products").html(data);
             }
         });
        
     })

     $(".dream").on('click',()=>{
        // var education = getFilter('education');
        var dream = getFilter('dream')
         var aim = getFilter('aim')
         var favourite_thing = getFilter('favourite_thing')
         $.ajax({
             url:'/homeAjax',
             type:'post',
             data:{aim:aim,favourite_thing:favourite_thing,dream:dream},
             success:function(data){
                 $(".filter_products").html(data);
             }
         });
        
     })

    function getFilter(class_name){
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val())
        })
        return filter
    }



   
});
