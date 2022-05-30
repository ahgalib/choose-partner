$(document).ready(function(){
 
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
    

    $(".education").on('click',function(){
        var education = getFilter(this);
       
       // alert(education);
        $.ajax({
            url:'homeAjax',
            type:'get',
            data:{education:education},
            success:function(data){
                $(".filter_products").html(data);
            }
        });
    });

    function getFilter(class_name){
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val())
        })
        return filter
    }

   
});
