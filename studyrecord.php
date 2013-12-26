<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?PHP
ob_start();
@session_start();

?>
<?php
   $mark= $_SESSION['story']+$_SESSION['studying']+$_SESSION['us']+$_SESSION['joinme'];
   
?> 
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>學習記錄</title>

<style>
#wapper{margin:auto;
	
	position: absolute;
	width:850px;
	left:50%;
	margin-left:-425px;}
#bg{
	margin: 0px auto;
	text-align: center;	
	display:none;
	}
	#pe{
	display:none;
position: absolute;
 left: 600pt;
    top: 80pt;

	z-index: 2;
}
#nav{position: absolute;
z-index:4;
size:300px 600px;
left:0px;
top:120px;

}
#changeCSS{
				position:absolute;
				left:650px;
				top:60px;
				z-index:3;
				}
#loadingIMG{


position: absolute;
    left: 230pt;
    top: 100pt;
	z-index: 7;

}
#l1 ,#u1{
	position:absolute;
	left:60px;
	top:220px;
	z-index:3;
	display:none;}
	#l2,#u2{
	position:absolute;
	left:310px;
	top:220px;
	z-index:3;
	display:none;}
	#l3,#u3{
	position:absolute;
	left:60px;
	top:370px;
	z-index:3;
	display:none;}
	#l4,#u4{
	position:absolute;
	left:310px;
	top:370px;
	z-index:3;
	display:none;}
	#u1,#u2,#u3,#u4{
		display:none;}
		
		#ps{display:none;position:absolute;
	left:310px;
	top:600px;
	z-index:3;
	display:none;}
	#logo{
		display:none;
		position:absolute;
		left:0px;
		top:0px;
		z-index:5;
		}
</style>

 <script type="text/javascript" src="jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="callNav.js"> </script>
<script type="text/javascript" src="callChangeCSS.js">

</script>
<script>
var mark=<?php echo "$mark";?>;

</script>



<script>
var load=function(){
              
            var URLs="back.php";
			
            $.ajax({

                url: URLs,
                type:"POST",
                success: function(msg){
					$(document).ready(function(e) {
					call_change();
					call_nav();
						 $('#loadingIMG').hide();
                   		 $('#changeCSS').animate({height:"toggle"});
						  $('#changeCSS').delay(1500).animate({"height":"toggle"},1000);
						  $('#logo').animate({width:"toggle"});
						$('#bg').show(3000);
						$('#pe').show(3000);
					
						console.log(mark);
						if(mark<40){
							
						$('#l4').delay(2500).animate({ opacity:"toggle",height:"toggle"},1500);
				
						if(mark<30){
						$('#l3').delay(2500).animate({ opacity:"toggle",height:"toggle"},1500);
						if(mark<20){
						$('#l2').delay(2500).animate({ opacity:"toggle",height:"toggle"},1500);
						if(mark<10){
						$('#l1').delay(2500).animate({ opacity:"toggle",height:"toggle"},1500);
						}
						}
						}
						}
						if(mark>=10){
							
						$('#u1').delay(2500).animate({ opacity:"toggle",height:"toggle"},1500);
						
						if(mark>=20){
						$('#u2').delay(2500).animate({ opacity:"toggle",height:"toggle"},1500);
						if(mark>=30){
						$('#u3').delay(2500).animate({ opacity:"toggle",height:"toggle"},1500);
						if(mark>=40){
						$('#u4').delay(2500).animate({ opacity:"toggle",height:"toggle"},1500);
						}
						}
						}
						}
						$('#ps').show(3000);
						
				//  check();
                   
					  });
				   
				   
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
<script>
$(document).ready(function() {

$("#u1").mouseover(function(){
	$("#u1 img").attr("src","pic/unlock1_2.png");
	});
$("#u1" ).mouseout(function(){$("#u1 img").attr("src","pic/unlock1.png");
});

$("#u2").mouseover(function(){
	$("#u2 img").attr("src","pic/unlock2_2.png");
	});
$("#u2" ).mouseout(function(){$("#u2 img").attr("src","pic/unlock2.png");
});
$("#u3").mouseover(function(){
	$("#u3 img").attr("src","pic/unlock3_2.png");
	});
$("#u3" ).mouseout(function(){$("#u3 img").attr("src","pic/unlock3.png");
});

$("#u4").mouseover(function(){
	$("#u4 img").attr("src","pic/unlock4_2.png");
	});
$("#u4" ).mouseout(function(){$("#u4 img").attr("src","pic/unlock4.png");
});



});

</script>
</head>

<body onload="load()">
<div id="wapper">
 <div height="300" width="300" id="loadingIMG" style= "display:none" ><object type="application/x-shockwave-flash"   height="300" wmode="transparent" > 
         <param name="movie"  value="pic/loading2.swf"></param> 
      </object></div>
<div  id="bg">
<img  src="pic/studyrecordbg.png" width="850">


</div>

<div id="pe"> <object type="application/x-shockwave-flash" height="600" wmode="transparent" > 
          <param name="movie" value="pic/walk.swf"></param> 
          
</object></div>
<div id="nav"></div>
<div id="changeCSS"></div>
<div id="l1"><img src=pic/lock1.png /></div>
<div id="l2"><img src=pic/lock2.png /></div>
<div id="l3"><img src=pic/lock3.png /></div>
<div id="l4"><img src=pic/lock4.png /></div>
<div id="u1"><a href="pic/comic.jpg" target="_blank"><img src=pic/unlock1.png /></a></div>
<div id="u2"><a href="pic/gift1.png" target="_blank"><img src=pic/unlock2.png /></a></div>
<div id="u3"><a href="pic/gift2.png" target="_blank"><img src=pic/unlock3.png /></a></div>
<div id="u4"><a href="game.php" target="_blank"><img src=pic/unlock4.png /></div>
<div id="ps">PS.隨著使用網站的不同行為會讓以上的東西解鎖</div>
<div id="logo"><object type="application/x-shockwave-flash" wmode="transparent"   > 
         <param name="movie"  value="pic/logo.swf"></param>
         </object>
         </div>
</div>

</body>
</html>
