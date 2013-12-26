var call_nav=function() {
	 
	 var URLs="nav.php";
	
	 $.ajax({
                 url:URLs,
                 success:function(msg){
                 $('#nav').html(msg);
                 },
                 error:function(xhr, ajaxOptions, thrownError){ 
                    alert(xhr.status); 
                    alert(thrownError); 
                }
         });

    
};