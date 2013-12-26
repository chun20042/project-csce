   
      var showNews=function ()
     {
         var URLs="../news.php";
         $.ajax({
                 url:URLs,
                 type:"POST",
                 success:function(msg){
                    
                 $('#news').innerHTML=msg;
                 },
                 error:function(xhr, ajaxOptions, thrownError){ 
                    alert(xhr.status); 
                    alert(thrownError); 
                }
         });
        
      }
   

        var load=function(){
             
            var URLs="../back.php";
            $.ajax({

                url: URLs,
                type:"POST",
                success: function(msg){

                    showNews();
                    $('#news_pic').show();
                    $('#news').show();
                    $('#main').show();

                },
                beforeSend:function(){
                    $('#loadingIMG').show();

                },
                complete:function(){
                    $('#loadingIMG').hide();
                },
                error:function(xhr, ajaxOptions, thrownError){ 
                    alert(xhr.status); 
                    alert(thrownError); 
                }
            });
        }


   