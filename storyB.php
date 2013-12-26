<!doctype html>
<html>
<head>
<?PHP
ob_start();
@session_start();

?>
<meta charset="utf-8">
<title>無標題文件</title>
<?php
  sleep(3);
		$_SESSION['story']=10;
		
		if(isset($_SESSION['username'])){
	include("mysql.inc.php");
	
		$sql=" UPDATE member SET story= 10 where username='{$_SESSION['username']}'";
		mysql_query($sql);
		}
?> 
<style>
body{margin:0px;}
#wapper{margin:auto;
	
	position: absolute;
	width:1024px;
	left:50%;
	margin-left:-512px;}
	
	#bg{height:724px ; margin:0px;
	position: absolute;margin:auto;
	z-index:2;}
	#bg img{height:724px}
	
	#top{height:150px ; margin:0px;
	position: absolute;margin:auto;
	z-index:8;}
	#top img{height:150px}
	
	#left_box{
		position:absolute;
		left:145px;
		top:92px;
		height:500px;
		z-index:1;
		overflow:hidden;}
		#left_box #left{position:relative;
		}
		
		#right_box{
		position:absolute;
		left:495px;
		
		top:92px;
		height:500px;
		z-index:1;
		overflow:hidden;}
		#right_box #right{position:relative;}
		#downBg{
			position:absolute;
			z-index:-1;}
			#band_box{
				position:absolute;
				left:50%;
				margin-left:-150px;
				top:90px;
			z-index:3;
			overflow:hidden;}
			#band_box #band{position:relative;}
			
			
			#c1{
				position:absolute;
				left:110px;
				top:490px;
				z-index:6;
				
				}
				#c1t{
					display:none;
				position:absolute;
				left:110px;
				top:490px;
				z-index:7;
				
				}
				
					#c2{
				position:absolute;
				left:275px;
				top:495px;
				z-index:6;
				}
				
				#c2t{
					display:none;
				position:absolute;
				left:275px;
				top:495px;
				z-index:7;
				
				}
				
				
						#c3{
				position:absolute;
				left:425px;
				top:442px;
				z-index:6;
				}
				
				#c3t{
					display:none;
				position:absolute;
				left:425px;
				top:442px;
				z-index:7;
				
				}
				
						#c4{
				position:absolute;
				left:590px;
				top:460px;
				z-index:6;
				}
				
				#c4t{
					display:none;
				position:absolute;
				left:590px;
				top:460px;
				z-index:7;
				
				}
				
						#c5{
				position:absolute;
				left:720px;
				top:480px;
				z-index:6;
				}
				
				#c5t{
					display:none;
				position:absolute;
				left:720px;
				top:480px;
				z-index:7;
				
				}
				
					#light{
					display:none;
					position:absolute;
				z-index:8;
				opacity:0.15;
					}
					#movie{
					
					position:absolute;
				z-index:0;
				left:425px;
				top:260px;
				
						}
						#content{position:absolute;
							display:none;
							left:400px;
							top:200px;
							z-index:11;}
							#xx{position:absolute;
							display:none;
							left:835px;
							top:190px;
							z-index:12;}
		#logo{
		
		position:absolute;
		left:-10px;
		top:0px;
		z-index:10;
		}
		#nav{
			size:300px 600px;
			position:absolute;
			left:-100px;
			top:110px;
			z-index:11;}
		#changeCSS{
				position:absolute;
			left:800px;
			top:10px;
			z-index:11;
			}
					
</style>

<script type="application/javascript" src="jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="callNav.js"></script>
<script type="text/javascript" src="callChangeCSS.js"></script>
<script>
var click1=true;
$(document).ready(function(){
$("#band").click(function(){
	if(click1==true){
	setTimeout(function(){
		setTimeout(function(){
		$('#movie').css({"z-index":"11"});
		},300);
		},1000);
	$("#band").stop(true,false).animate({
	 top:"-180px"
	   },1500);
	   $("#left").stop(true,false).animate({left:"-350px"},1500);
	   $("#right").stop(true,false).animate({left:"+350px"},1500);
	   click1=!click1;
	   
	   }
	   else if(click1==false){
		   $('#movie').css({"z-index":"0"});
		
		
		   $("#band").stop(true,false).animate({
	 top:"0px"
	   },1500);
	   $("#left").stop(true,false).animate({left:"0px"},1500);
	   $("#right").stop(true,false).animate({left:"0px"},1500);
	   click1=!click1;
	   
	  
		   } 
	   
	   
	   
	   });
});

$(document).ready(function(){
	var selector=0;
	
	$("#c1 ").mouseover(function(){
		if($("#c1 img").attr("src")=="pic/black_c1.png")
		$("#c1 img").attr("src","pic/black_c1_2.png")
		});
	$("#c1").mouseout(function(){
		if($("#c1 img").attr("src")=="pic/black_c1_2.png")
		$("#c1 img").attr("src","pic/black_c1.png")
		});
		
	$("#c1").click(function(){
		selector=1;
				show(selector);		
		});	
		
		
	$("#c2 ").mouseover(function(){
		if($("#c2 img").attr("src")=="pic/black_c2.png")
		$("#c2 img").attr("src","pic/black_c2_2.png")
		});
	$("#c2").mouseout(function(){
		if($("#c2 img").attr("src")=="pic/black_c2_2.png")
		$("#c2 img").attr("src","pic/black_c2.png")
		});
	$("#c2").click(function(){
		selector=2;
				show(selector);		
		});		
		
		$("#c3 ").mouseover(function(){
		if($("#c3 img").attr("src")=="pic/black_c3.png")
		$("#c3 img").attr("src","pic/black_c3_2.png")
		});
	$("#c3").mouseout(function(){
		if($("#c3 img").attr("src")=="pic/black_c3_2.png")
		$("#c3 img").attr("src","pic/black_c3.png")
		});
		
	$("#c3").click(function(){
		selector=3;
				show(selector);		
		});	
		
			$("#c4 ").mouseover(function(){
		if($("#c4 img").attr("src")=="pic/black_c4.png")
		$("#c4 img").attr("src","pic/black_c4_2.png")
		});
	$("#c4").mouseout(function(){
		if($("#c4 img").attr("src")=="pic/black_c4_2.png")
		$("#c4 img").attr("src","pic/black_c4.png")
		});
		
	$("#c4").click(function(){
		selector=4;
				show(selector);		
		});	
		
		
		$("#c5 ").mouseover(function(){
		if($("#c5 img").attr("src")=="pic/black_c5.png")
		$("#c5 img").attr("src","pic/black_c5_2.png")
		});
	$("#c5").mouseout(function(){
		if($("#c5 img").attr("src")=="pic/black_c5_2.png")
		$("#c5 img").attr("src","pic/black_c5.png")
		});
		
	$("#c5").click(function(){
		selector=5;
				show(selector);		
		});	
		
	$("#bg").click(function(){
		hide(selector);	
		});
		$("#xx").click(function(){hide(selector)});
		
		
	});
var hide=function(str){
	switch (str){
		case 1:
	$("#light").animate({"height":"toggle",opacity:"toggle"},1500);
		$("#c1t").delay(300).animate({"opacity":"toggle"},1000);
		$("#c1 img").animate({"opacity":1},1000);
		$("#content").delay(300).animate({"opacity":"toggle"},1750);
		$("#xx").delay(300).animate({"opacity":"toggle"},1750);
		break;
		case 2:
		$("#light").animate({"height":"toggle",opacity:"toggle"},1500);
		$("#c2t").delay(300).animate({"opacity":"toggle"},1000);
		$("#c2 img").animate({"opacity":1},1000);
		$("#c2").delay(2000).animate({left:"275px"});
		$("#c1").delay(2000).animate({left:"110px"});
		$("#c2t").delay(2500).animate({left:"275px"});
		$("#content").delay(300).animate({"opacity":"toggle"},1750);
		$("#xx").delay(300).animate({"opacity":"toggle"},1750);
		break;
		case 3:
		$("#light").animate({"height":"toggle",opacity:"toggle"},1500);
		$("#c3t").delay(300).animate({"opacity":"toggle"},1000);
		$("#c3 img").animate({"opacity":1},1000);
		$("#c3").delay(2000).animate({left:"425px"});
		$("#c1").delay(2000).animate({left:"110px"});
		$("#c3t").delay(2500).animate({left:"425px"});
		$("#content").delay(300).animate({"opacity":"toggle"},1750);
		$("#xx").delay(300).animate({"opacity":"toggle"},1750);
		break;
		case 4:
		$("#light").animate({"height":"toggle",opacity:"toggle"},1500);
		$("#c4t").delay(300).animate({"opacity":"toggle"},1000);
		$("#c4 img").animate({"opacity":1},1000);
		$("#c4").delay(2000).animate({left:"590px"});
		$("#c1").delay(2000).animate({left:"110px"});
			$("#c4t").delay(2500).animate({left:"590px"});
			$("#content").delay(300).animate({"opacity":"toggle"},1750);
		$("#xx").delay(300).animate({"opacity":"toggle"},1750);
		break;
		case 5:
		$("#light").animate({"height":"toggle",opacity:"toggle"},1500);
		$("#c5t").delay(300).animate({"opacity":"toggle"},1000);
		$("#c5 img").animate({"opacity":1},1000);
		$("#c5").delay(2000).animate({left:"720px"});
		$("#c1").delay(2000).animate({left:"110px"});
		$("#c5t").delay(2500).animate({left:"720px"});
		$("#content").delay(300).animate({"opacity":"toggle"},1750);
		$("#xx").delay(300).animate({"opacity":"toggle"},1750);
		
		break;
	}
	
	}
	
	var show= function(str){
		
		switch (str){
		case 1:
				$("#light").css({"left":"90px","top":"90px"});
				$("#c1 img").animate({"opacity":0.5},1000);
				$("#light").delay(600).animate({"height":"toggle",opacity:"toggle"},800);
				$("#c1t").delay(1000).animate({"opacity":"toggle"},1750);
				$("#content img").attr("src","pic/c1c.png");
				$("#content").delay(3000).animate({"opacity":"toggle"},1750);
				$("#xx").delay(3000).animate({"opacity":"toggle"},1750);
				selector=1;
		break;
		case 2:
			$("#light").css({"left":"255px","top":"90px"});
			$("#c2 img").animate({"opacity":0.5},1000);
			$("#light").delay(600).animate({"height":"toggle",opacity:"toggle"},800);
			$("#c2t").delay(1000).animate({"opacity":"toggle"},1750);
			$("#c2").delay(2700).animate({left:"110px"},1000);
			$("#c2t").animate({left:"110px"},1000);
			$("#light").delay(1300).animate({left:"90px"},1000);
			$("#c1").delay(2700).animate({left:"275px"},1000);
			$("#content img").attr("src","pic/c2c.png");
				$("#content").delay(3000).animate({"opacity":"toggle"},1750);
				$("#xx").delay(3000).animate({"opacity":"toggle"},1750);
			selector=2;
			break;
			case 3:
				$("#light").css({"left":"405px","top":"90px"});
				$("#c3 img").animate({"opacity":0.5},1000);
				$("#light").delay(600).animate({"height":"toggle",opacity:"toggle"},800);
				$("#c3t").delay(800).animate({"opacity":"toggle"},1750);
				$("#c3").delay(2550).animate({left:"110px"},1000);
				$("#c3t").animate({left:"110px"},1000);
				$("#light").delay(1150).animate({left:"90px"},1000);
				$("#c1").delay(2700).animate({left:"425px"},1000);
				$("#content img").attr("src","pic/c3c.png");
				$("#content").delay(3000).animate({"opacity":"toggle"},1750);
				$("#xx").delay(3000).animate({"opacity":"toggle"},1750);
				selector=3;
		break;
		case 4:
				$("#light").css({"left":"570px","top":"90px"});
				$("#c4 img").animate({"opacity":0.5},1000);
				$("#light").delay(600).animate({"height":"toggle",opacity:"toggle"},800);
				$("#c4t").delay(900).animate({"opacity":"toggle"},1750);
				$("#c4").delay(2670).animate({left:"110px"},1000);
				$("#c4t").animate({left:"110px"},1000);
				$("#light").delay(1300).animate({left:"90px"},1000);
				$("#c1").delay(2700).animate({left:"590px"},1000);
				$("#content img").attr("src","pic/c4c.png");
				$("#content").delay(3000).animate({"opacity":"toggle"},1750);
				$("#xx").delay(3000).animate({"opacity":"toggle"},1750);
				selector=4;
		break;
			case 5:
				$("#light").css({"left":"720px","top":"90px"});
				$("#c5 img").animate({"opacity":0.5},1000);
				$("#light").delay(600).animate({"height":"toggle",opacity:"toggle"},800);
				$("#c5t").delay(900).animate({"opacity":"toggle"},1750);
				$("#c5").delay(2670).animate({left:"110px"},1000);
				$("#c5t").animate({left:"110px"},1000);
				$("#light").delay(1300).animate({left:"90px"},1000);
				$("#c1").delay(2700).animate({left:"720px"},1000);
				$("#content img").attr("src","pic/c5c.png");
				$("#content").delay(3000).animate({"opacity":"toggle"},1750);
				$("#xx").delay(3000).animate({"opacity":"toggle"},1750);
				
				selector=4;
			
		}
		
		}

</script>
</head>

<body>
<div id="wapper">
<div id="light"><img src="pic/light.png"></div>
<div id="top"><img src="pic/story_top.png"></div>
<div id="downBg"><img src="pic/story_downBg.png"></div>
<div id="bg"><img src="pic/story_bg.png"></div>
<div id="band_box">
<div id="band"><img src="pic/band.png"></div>
</div>
<div id="left_box">
<div id="left"><img src="pic/left.png"></div>
</div>
<div id="right_box">
<div id="right"><img src="pic/right.png"></div>
</div>
<div id="c1"><img src="pic/black_c1.png"></div>
<div id="c1t"><img src="pic/c1.png"></div>
<div id="c2"><img src="pic/black_c2.png"></div>
<div id="c2t"><img src="pic/c2.png"></div>
<div id="c3"><img src="pic/black_c3.png"></div>
<div id="c3t"><img src="pic/c3.png"></div>
<div id="c4"><img src="pic/black_c4.png"></div>
<div id="c4t"><img src="pic/c4.png"></div>
<div id="c5"><img src="pic/black_c5.png"></div>
<div id="c5t"><img src="pic/c5.png"></div>
<div id="movie"><iframe width="200" height="215" src="//www.youtube.com/embed/AmFpFFbmf58" frameborder="0" allowfullscreen></iframe></div>
<div id="content"><img src=""></div>
<div id="xx"><img src="pic/x.png"></div>
<div id='nav'></div><div id="changeCSS"></div>
<div id="logo"><object type="application/x-shockwave-flash" wmode="transparent"   > 
         <param name="movie"  value="pic/logo.swf"></param>
         </object>
         </div>
  <div id="nav"></div>
<div id="changeCSS"></div>
</div>

</body>
</html>