<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>故事內容</title>

<style>body{margin:0px;}
#wapper{margin:auto;

	position: absolute;
	width:1024px;
	left:50%;
	margin-left:-512px;}
	#loadingIMG{


position: absolute;
    left: 250pt;
    top: 100pt;
	z-index: 7;

}
</style>
<script type="text/javascript" src="jquery-1.10.2.min.js"> 

        </script>
<script>
var load=function(){
              
            var URLs="storyB.php";
			
            $.ajax({

                url: URLs,
                type:"POST",
                success: function(msg){
					$('#loadingIMG').hide();
					  			$('#wapper').html(msg);	   
				  call_change();
					call_nav();
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
</script>
</head>
<body onload="load();">
<div id="wapper">
<div height="300" width="300" id="loadingIMG" style= "display:none" ><object type="application/x-shockwave-flash"   height="300" > 
         <param name="movie"  value="pic/loading.swf"></param> 
      </object></div>

</div>
</body>
</html>
