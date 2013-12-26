<!doctype html>
<html>
<head>
<?PHP
ob_start();
@session_start();

?>


<?php
		$_SESSION['studying']=10;
			if(isset($_SESSION['username'])){
	include("mysql.inc.php");
	
		$sql=" UPDATE member SET STUDYING= 10 where username='{$_SESSION['username']}'";
		mysql_query($sql);
		}
?> 
<meta charset="utf-8">
<title>學習章節</title>

<style>
#wapper{
	margin: auto;
	text-align: center;	
	left:50%;
	margin-left:-512px;
}

#nav{position: absolute;
z-index:10;
size:300px 600px;
left:30px;
top:150px;

}
#main{
	display:none;
	position:absolute;
	height:665px;
	width:1024px;
	margin:0px ;
	left:50%;
	
	margin-left:-512px;
	
	}
	
	#teaching{
		display:none;
		position:absolute;
	left:900px;
	top:265px;
	z-index:3;
		}
		#choose{position:absolute;
		display:none;
		left:800px;
	top:250px;
		z-index:4;
			}

#ch1{position:absolute;
	display:none;
top:80px;
left:400px;
	z-index:5;
	}
	
#ch2{
	display:none;
	position:absolute;
top:80px;
left:750px;
z-index:5;
	}
	
	#context{position:absolute;
	display:none;
		top:50px;
		left:50px;
		z-index:4;
		
		}
		#changeCSS{
			
				position:absolute;
				left:1050px;
				top:10px;
				z-index:11;
				}
#loadingIMG{
position: absolute;
    left: 350pt;
    top: 100pt;
	z-index: 7;
}
	#logo{
		display:none;
		position:absolute;
		left:10px;
		top:0px;
		z-index:10;
		}
</style>

<script  type="text/javascript" src="jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="callNav.js"></script>
<script type="text/javascript" src="callChangeCSS.js"></script>
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
					$('#logo').animate({ opacity:'toggle'},1000);
						 $('#loadingIMG').hide();
						$('#choose').animate({ opacity:'toggle'},1000);
						$('#main').animate({ opacity:'toggle'},1000);

						$('#teaching').animate({ opacity:'toggle'},1000);
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
var count=0;
$(document).ready(function(){
  $("#choose").click(function(){
	  
	$("#ch1").animate({
		opacity:'toggle',
	  height:'toggle'
	   },2000);
	   $("#ch2").animate({
		   opacity:'toggle',
	  height:'toggle'
	   },2000);
	count=!count;
	if(count%2!=0){
		 
		
	$("#main").animate({	
	opacity:0.33
	},1000);
	$("#teaching").animate({
		left:80
		
		},2000);
		$("#choose").animate({
		left:0
		},2000);
		
	
	

		
		
		
	}
	else if(count%2==0){
	$("#main").animate({	
	opacity:1
	},1000);
		$("#teaching").animate({
		left:900
		
		},2000);
		$("#choose").animate({
		left:800
		},2000);
	}
  });
  
});


$(document).ready(function(){
$("#ch1").click(function(){
	$("#ch1").animate({
	  height:'toggle',
	  opacity:'toggle'
	   },1000);
	   $("#ch2").animate({
	  height:'toggle',
	  opacity:'toggle'
	   },1000);
	$("#context").animate({
	  height:'toggle'
	 
	   },2000);
	   setTimeout(function(){
		   window.open("book2/index.html","_self");}
		   ,2000);
	});
});

$(document).ready(function(){
$("#ch2").click(function(){
	 
	$("#ch1").animate({
	  height:'toggle',
	  opacity:'toggle'
	   },500);
	   $("#ch2").animate({
	  height:'toggle',
	  opacity:'toggle'
	   },500);
	$("#context").animate({
	  height:'toggle'
	 
	   },2000);
	   setTimeout(function(){
		   window.open("book/index.html","_self");}
		   ,2000);
	   });
});
</script>

</head>

<body onLoad="load()">
<div id="wapper">
 <div height="300" width="300" id="loadingIMG" style= "display:none" ><object type="application/x-shockwave-flash"   height="300" > 
         <param name="movie"  value="pic/loading4.swf"></param> 
      </object></div>


<div height ="400" width="400" id='teaching'>
<object id="ya" height="400"; type="application/x-shockwave-flash" wmode="transparent"   > 
         <param name="movie"  value="pic/teaching.swf"></param>
         </object>
</div>
<div id='nav'></div>
<div id='main' ><img  height="665px" width="1024px" src="pic/studying.png"></div>
<div id='choose'><img  height=200 src="pic/choose.png"></div>
<div id="ch1"><img  height=300 src="pic/book.png"></div>
<div id="ch2"><img  height=300 src="pic/book2.png"></div>
<div height="640"
width="1200" id="context"><object height="640"
width="1200"  type="application/x-shockwave-flash" wmode="transparent"   > 
         <param  name="movie"  value="pic/book.swf"></param>
         </object>
</div>
        <div id="logo"><object type="application/x-shockwave-flash" wmode="transparent"   > 
         <param name="movie"  value="pic/logo.swf"></param>
         </object>
         </div>

<div id="changeCSS"></div>
<div id="book"></div>
</div>
</body>
</html>
