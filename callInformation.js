var call_information=function() {
	 
	 var URLs="information.php";
	
	 $.ajax({
                 url:URLs,
                 success:function(msg){
					 $('#information_box').show();
                 $('#information_box').html(msg);
                 },
                 error:function(xhr, ajaxOptions, thrownError){ 
                    alert(xhr.status); 
                    alert(thrownError); 
                }
         });

    
};
