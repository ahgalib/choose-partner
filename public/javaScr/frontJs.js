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
         var aim = getFilter('aim')
         var favourite_thing = getFilter('favourite_thing')
         $.ajax({
             url:'/homeAjax',
             type:'post',
             data:{aim:aim,favourite_thing:favourite_thing},
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

    //dynamicaly add field
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div style="margin-top:7px;"><input type="file" name="size[]" required placeholder="product size" value=""/><input style="margin:5px;" type="text" name="sku[]" required placeholder="product sku" value=""/><a href="javascript:void(0);" class="remove_button">Remove</a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });

   
});
