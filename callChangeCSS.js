var call_change=function() {
	 
	 var URLs="changeCSS.php";
	
	 $.ajax({
                 url:URLs,
                 success:function(msg){
                 $('#changeCSS').html(msg);
				
                 },
                 error:function(xhr, ajaxOptions, thrownError){ 
                    alert(xhr.status); 
                    alert(thrownError); 
                }
         });

    
};