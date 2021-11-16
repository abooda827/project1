$(document).ready(function(){
    
      $(document).on("keyup","#search_text",function(){
       var search = $(this).val(); 
       
            $.post("function/search.php" , {search:search},function(data){
                $("#search-result").html(data)
                });
    })

})