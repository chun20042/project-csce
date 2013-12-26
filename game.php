<!doctype html>
<html>
<head>
<?php 
ob_start();
session_start();
 include("mysql.inc.php");
$sql="Select * from question";
   $result=mysql_query($sql);
     $row1 = mysql_fetch_array($result);
	 $row2 = mysql_fetch_array($result);
	   $row3 = mysql_fetch_array($result);
	 $row4 = mysql_fetch_array($result);
    
?>
<script>

var change=function(var1){
	
	if(var1==1){
	$('#question1').html("<?php echo $row1['question']; ?>");
	$('#ans1').html("<?php echo $row1[1]; ?>");
	$('#ans2').html("<?php echo $row1[2]; ?>");
	$('#ans3').html("<?php echo $row1[3]; ?>");
	$('#ans4').html("<?php echo $row1[4]; ?>");
	}
	if(var1==2){
		
	$('#question1').html("<?php echo $row2['question']; ?>");
	$('#ans1').html("<?php echo $row2['ans1']; ?>").attr("class","ans2");
	$('#ans2').html("<?php echo $row2['ans2']; ?>").attr("class","ans3");
	$('#ans3').html("<?php echo $row2['ans3']; ?>").attr("class","ans1");
	$('#ans4').html("<?php echo $row2['ans4']; ?>").attr("class","ans4");
	}
	if(var1==3){
	$('#question1').html("<?php echo $row1['question']; ?>");
	$('#ans1').html("<?php echo $row3['ans1']; ?>").attr("class","ans4");
	$('#ans2').html("<?php echo $row3['ans2']; ?>").attr("class","ans2");
	$('#ans3').html("<?php echo $row3['ans3']; ?>").attr("class","ans3");
	$('#ans4').html("<?php echo $row3['ans4']; ?>").attr("class","ans1");
	}
	if(var1==4){
	$('#question1').html("<?php echo $row1['question']; ?>");
	$('#ans1').html("<?php echo $row4['ans1']; ?>").attr("class","ans1");
	$('#ans2').html("<?php echo $row4['ans2']; ?>").attr("class","ans4");
	$('#ans3').html("<?php echo $row4['ans3']; ?>").attr("class","ans2");
	$('#ans4').html("<?php echo $row4['ans4']; ?>").attr("class","ans3");
	}
	}


</script>
<meta charset="utf-8">
<title>GAME</title>
<style>
body{margin:0px;}
#wapper{margin:auto;
	
	position: absolute;
	width:1200px;
	left:50%;
	margin-left:-571px;}
	#bg{height:800px; margin:0px;
	position: absolute;margin:auto;
	z-index:1;}
	#bg img{height:800px}
	#left{
		position:absolute;
		height:880px;
		top:130px;
		z-index:2;}
		#bg img{height:800px}
	#right_m{
		display:none;
		position:absolute;
		height:880px;
		width:800px;
		top:80px;
		left:260px;
		z-index:6;}
		#right{
			position:absolute;
				top:250px;
			left:780px;
		height:600px;
		width:300px;
		z-index:2;}
		#left_m{
		display:none;
		position:absolute;
		height:880px;
		width:800px;
		top:30px;
		left:240px;
		z-index:6;}
		#question{
			position:absolute;
			left:400px;
			z-index:4;
			}
			#question1{
			position:absolute;
			left:455px;
			top:80px;
			z-index:5;
			color:#FFF;
			font-size:18px;
			}
			.ans1{
	position: absolute;
	left: 100px;
	top: 150px;
	z-index: 5;
	color: #FFF;
	font-size: 28px;
	height: 34px;
			}
			.ans2{
			position:absolute;
			left:100px;
			top:200px;
			z-index:5;
			color:#FFF;
			font-size:28px;
			
			}
			.ans3{
			position:absolute;
			left:100px;
			top:250px;
			z-index:5;
			color:#FFF;
			font-size:28px;
			
			}
			.ans4{
			position:absolute;
			left:100px;
			top:300px;
			z-index:5;
			color:#FFF;
			font-size:28px;
			
			}
			
</style>
<script type="text/javascript" src="jquery-1.10.2.min.js"></script>
<script>


var a=1;
$(document).ready(function(){
	change(a);
	$('#ans1').click(function(){
		a++;
		if($(this).attr('value')==1){
			
			$('#left_m').show();
			$('#left_m').delay(2700).animate({
					opacity:0
					},1000);
				$('#left_m').css(
					"opacity","1"
					);	
				$('#left_m').hide(2000);	
				$('#wapper').delay(2700).animate({opacity:0.3});
				$('#wapper').delay(10).animate({opacity:1});
				setTimeout(function(){change(a);},3500);
			}
			else{
				
				$('#right_m').show();
			$('#right_m').delay(4200).animate({
					opacity:0
					},1000);
				$('#right_m').css(
					"opacity","1"
					);	
				$('#right_m').hide(2000);	
				$('#wapper').delay(3500).animate({opacity:0.3});
				$('#wapper').delay(10).animate({opacity:1});
				setTimeout(function(){change(a);},3500);
				}	
		});
	
	
	$('#ans2').click(function(){
		a++;
		if($(this).attr('value')==1){
			$('#left_m').show();
			$('#left_m').delay(2700).animate({
					opacity:0
					},1000);
				$('#left_m').css(
					"opacity","1"
					);	
				$('#left_m').hide(2000);	
				$('#wapper').delay(2700).animate({opacity:0.3});
				$('#wapper').delay(10).animate({opacity:1});
				setTimeout(function(){change(a);},3500);
			}
			else{
				
				$('#right_m').show();
			$('#right_m').delay(4200).animate({
					opacity:0
					},1000);
				$('#right_m').css(
					"opacity","1"
					);	
				$('#right_m').hide(2000);	
				$('#wapper').delay(3500).animate({opacity:0.3});
				$('#wapper').delay(10).animate({opacity:1});
				setTimeout(function(){change(a);},3500);
				}	
		});
		
		$('#ans3').click(function(){
		a++;
		if($(this).attr('value')==1){
			$('#left_m').show();
			$('#left_m').delay(2700).animate({
					opacity:0
					},1000);
				$('#left_m').css(
					"opacity","1"
					);	
				$('#left_m').hide(2000);	
				$('#wapper').delay(2700).animate({opacity:0.3});
				$('#wapper').delay(10).animate({opacity:1});
				setTimeout(function(){change(a);},3500);
			}
			else{
				
				$('#right_m').show();
			$('#right_m').delay(4200).animate({
					opacity:0
					},1000);
				$('#right_m').css(
					"opacity","1"
					);	
				$('#right_m').hide(2000);	
				$('#wapper').delay(3500).animate({opacity:0.3});
				$('#wapper').delay(10).animate({opacity:1});
				setTimeout(function(){change(a);},3500);
				}	
		});
		
		$('#ans4').click(function(){
		a++;
		if($(this).attr('value')==1){
			$('#left_m').show();
			$('#left_m').delay(2700).animate({
					opacity:0
					},1000);
				$('#left_m').css(
					"opacity","1"
					);	
				$('#left_m').hide(2000);	
				$('#wapper').delay(2700).animate({opacity:0.3});
				$('#wapper').delay(10).animate({opacity:1});
				setTimeout(function(){change(a);},3500);
			}
			else{
				
				$('#right_m').show();
			$('#right_m').delay(4200).animate({
					opacity:0
					},1000);
				$('#right_m').css(
					"opacity","1"
					);	
				$('#right_m').hide(2000);	
				$('#wapper').delay(3500).animate({opacity:0.3});
				$('#wapper').delay(10).animate({opacity:1});
				
				setTimeout(function(){change(a);},3500);
				}	
		});
		
		
	
	});

</script>
</head>

<body>
<div id="wapper">
<div id="left" ><img src="pic/player.png"> </div>
<div id="right"> <img src="pic/ms.png"></div>
<div id="bg"><img src="pic/game_bg.jpg"></div>
<div id="right_m"  >
<object  height="600px"  width="600px" type="application/x-shockwave-flash" wmode="transparent"   > 
         <param  name="movie"  value="pic/ms_m.swf"></param>
         </object></div>
 <div id="left_m"  >
<object  height="700px"  width="700px" type="application/x-shockwave-flash" wmode="transparent"   > 
         <param  name="movie"  value="pic/player_m.swf"></param>
         </object></div>
        
          
         
</div><div id="question1">asdasdasdssssasdasdsd?</div>
 <div id="question"><img src="pic/question.png"><div  id="ans"></div>
          <div id="ans1" class="ans1" value="1">123123123222</div>
          <div id="ans2" class="ans2" value="0">1231231232</div>
          <div id="ans3" class="ans3" value="0">123123123</div>
          <div id="ans4" class="ans4" value="0">123123123123</div>
          </div>
</body>
</html>
