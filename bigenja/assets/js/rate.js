 $(document).ready(function(){
    
        $(document).on("click",".rate",function(){
       var index = $(this).attr("data-index");  
       var user_id = $(this).attr("data-userid");
       var product_id = $(this).attr("data-productid"); 
       $(this).removeClass("far");
       $(this).addClass("fas");
       $(this).parent().prevAll().find("i").removeClass("far").addClass("fas");
       $(this).parent().nextAll().find("i").removeClass("fas").addClass("far");

            $.post("function/rate.php" , {index:index,userid:user_id,proid:product_id},function(data){
                $("#x").html(data)
                });
    })

})