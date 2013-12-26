
var showLogin=function(){

 var URLs="login.php";

         $.ajax({
                 url:URLs,
                 type:"POST",
                 success:function(msg){
					 
                    $('#login').show("slow");
					
                 $('#login').html(msg);
				 $('#register').hide();
                  $('#news_pic').fadeTo("slow", 0.33);
                    $('#news').fadeTo("slow", 0.33);
                    $('#main').fadeTo("slow", 0.33);
                   $('#clickLogin').fadeTo(1000, 0.33);
				   
                 },
                 error:function(xhr, ajaxOptions, thrownError){ 
                    alert(xhr.status); 
                    alert(thrownError); 
                }
         });
			
   }



    
  var showNews=function ()
     {
         var URLs="news.php";
         $.ajax({
                 url:URLs,
                 type:"POST",
                 success:function(msg){
                    
                 $('#news').html(msg);
                 },
                 error:function(xhr, ajaxOptions, thrownError){ 
                    alert(xhr.status); 
                    alert(thrownError); 
                }
         });
        
      }
var load=function(){
              
            var URLs="back.php";
			
            $.ajax({
                url: URLs,
                type:"POST",
                success: function(msg){
					$('#loadingIMG').hide();
                    showNews();
                    $('#main').show();
				   $('#homepage_p').animate({ opacity:"toggle",width:"toggle",left:"750px"},1000);
				   $('#btn1').delay(500).animate({height:"toggle",top:"10"},1500);
				   $('#btn2').delay(500).animate({height:"toggle",top:"60"},1500);
					$('#btn3').delay(500).animate({height:"toggle",top:"10"},1500);
					$('#btn4').delay(500).animate({height:"toggle",top:"80"},1500);
					$('#news_pic').delay(1500).animate({ opacity:"toggle",height:"toggle"},1000);
					
					 $('#logo').delay(1500).animate({ opacity:"toggle",width:"toggle"},2000);
                    $('#news').show();
				  check();
                   	   
				   
                },
                beforeSend:function(){
                    $('#loadingIMG').show();

                },
                complete:function(){
                   
                },
                error:function(xhr, ajaxOptions, thrownError){ 
                    alert(xhr.status); 
                    alert(thrownError); 
                }
            });
			
	
        }
var is_login=function(){
	
	
	$('#clickLogin').hide()}
     