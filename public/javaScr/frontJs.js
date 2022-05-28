$(document).ready(function(){
    $(".hobbies").click(function(){
        var hobbies = getFilter(this);
        //alert(fabric);
        $.ajax({
            url:'/home',
            type:'get',
            data:{hobbies:hobbies},
            success:function(data){
                $(".filter_products").html(data);
            }
        })
    });



    function getFilter(class_name){
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val())
        })
        return filter
    }

   
})
