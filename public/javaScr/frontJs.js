$(document).ready(function(){
    $("#hobbies").click(function(){
        alert('fksdkfl');
    });

    function getFilter(class_name){
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val())
        })
        return filter
    }
})