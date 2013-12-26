<!doctype html>
<html>
<head>
<?PHP
ob_start();
@session_start();

?>
<?php
    
		$_SESSION['us']=10;
			if(isset($_SESSION['username'])){
	include("mysql.inc.php");
	
		$sql=" UPDATE member SET us= 10 where username='{$_SESSION['username']}'";
		mysql_query($sql);
		}
		
?> 
<meta charset="utf-8">
<title>關於我們</title>
<style>
#wapper{position:absolute;
	margin: auto;	
	left:50%;
	margin-left:-523px;
}
#bg {display:none;
	position:absolute;
	
	height:740px;}
#bg img{
	height:740px;
	}
	#title {
		display:none;
	position:absolute;
	top:100px;
	left:51px;
	height:140px;
	
	z-index:2;}
#title img{
	
	height:140px;
	}
	
	#b,#g1,#g2,#g3{
		display:none;
		z-index:2}
		#g3-1,#g3-2,#g3-3{
			display:none;
			z-index:3}
	#b,#g1,#g2,#g3,#g3-1,#g3-2,#g3-3{
		
		height:250px;
		}
#b img,#g1 img,#g2 img,#g3 img,#g3-1 img,#g3-2 img,#g3-3 img{
	
		height:250px;
		}
		#b,#g3-1{
			position:absolute;
			top:250px;
			left:170px;
			
			}
		#g1,#g3-2{position:absolute;
			top:250px;
			left:360px;
			}
		#g2,#g3-3{position:absolute;
			top:250px;
			left:550px;
			}
		#g3{position:absolute;
			top:250px;
			left:740px;
			}
			
		#b_d,#g1_d,#g2_d,#g3_d	{
			display:none;
			position:absolute;
			top:250px;
			left:460px;
			height:400px;
			}
				
		#b_d img,#g1_d img, #g2_d img,#g3_d img	{
			height:400px;
			}
			#back{
				height:200px;
				top:450px;
			left:800px;
				position:absolute;
				z-index:3;
				display:none;}
				#back img{
				height:200px;}
			#changeCSS{
				
				position:absolute;
				left:1050px;
				top:30px;
				z-index:3;
				
				}
				#nav{position: absolute;
				z-index:3;
				size:300px 600px;
				left:50px;
				top:50px;

}
#loadingIMG{


position: absolute;
    left:360px;
    top: 100pt;
	z-index: 7;

}
#logo{
		display:none;
		position:absolute;
		left:0px;
		top:0px;
		z-index:5;
		}
</style>
<script type="text/javascript" src="jquery-1.10.2.min.js"> 
       </script>

         <script type="text/javascript" src="jQueryRotate.js"></script>
<script type="text/javascript">
var load=function(){
              
            var URLs="back.php";
			
            $.ajax({

                url: URLs,
                type:"POST",
                success: function(msg){
					$(document).ready(function(e) {
					
						 $('#loadingIMG').hide();
          $('#bg').show(3000);
						$('#title').show(3000);
						$('#g1').delay(3000).animate({ opacity:'toggle'},1000);
						$('#g2').delay(3000).animate({ opacity:'toggle'},1000);
						$('#g3').delay(3000).animate({ opacity:'toggle'},1000);
						$('#b').delay(3000).animate({ opacity:'toggle'},1000);
						
					$('#logo').delay(3000).animate({ opacity:'toggle'},1000);	
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



     $(document).ready(function(){	 
	$("#b").mouseover(function(){
		$("#b img").animate({
	  	height:"110%"
	   	},500);  
	});
	$("#b").mouseout(function(){
		$("#b img").stop(true,false).animate({
	  	height:"100%"
	   },500);  
	});

	$("#g1").mouseover(function(){
		$("#g1 img").animate({
	  	height:"110%"
	   },500);  
	});
	$("#g1").mouseout(function(){
		$("#g1 img").stop(true,false).animate({
	  	height:"100%"
	   	},500);  
	});

	$("#g2").mouseover(function(){
		$("#g2 img").animate({
	  	height:"110%"
	   	},500);  
	});
	$("#g2").mouseout(function(){
		$("#g2 img").stop(true,false).animate({
	  	height:"100%"
	   	},500);  
	});

	$("#g3").mouseover(function(){
		$("#g3 img").animate({
	  	height:"110%"
	   	},500);  
	});
	$("#g3").mouseout(function(){
		$("#g3 img").stop(true,false).animate({
	  	height:"100%"
	   	},500);  
	});



	$("#b").click(function(){
	
		$("#b").animate({
			left:"-=100"
		},800);
		$("#b").animate({
			left:"+=800"
		},300);
		$("#g1").delay(800).animate({
			left:"+=700",
			top:"-=200"
		},600).fadeTo("fast",0);
		$("#g2").delay(900).animate({
			left:"+=510",
			top:"-=200"
		},600).fadeTo("fast",0);
		$("#g3").delay(1000).animate({
			left:"+=320",
			top:"-=200"
		},600).fadeTo("fast",0);
		$("#b").animate({
			left:"-=700"
		},3000);
		$("#b_d").delay(3500).show("slow");
		$("#back").delay(4200).show("slow");
});


$("#g1").click(function(){
	$("#g1").rotate({
		angle:0,
		animateTo:1080
		});
		$("#g1").animate({left:"280"},3000);
		$("#b").delay(300).animate({
			left:"-=200",
			top:"-=200"
			},600).fadeTo("fast",0);
		$("#g2").delay(300).animate({
			left:"+=510",
			top:"-=200"
			},600).fadeTo("fast",0);
			$("#g3").delay(400).animate({
			left:"+=320",
			top:"-=200"
			},600).fadeTo("fast",0);
	$("#g1_d").delay(2500).show("slow");
	$("#back").delay(3200).show("slow");
});

	$("#g2").click(function(){
		$("#g2").animate({
			height:"200px",
			width:"155px"
			},300);
		$("#g2").delay(100).animate({
			top:"190px",
			left:"590px",
			height:"350px",
			width:"271px"
		},300);
	
	setTimeout(function(){
		$("#g1").rotate({
			angle:0,
			animateTo:1080
		});
		$("#g1").animate({
			left:"100",
			top:"200"
		});
		$("#g1").fadeTo("slow",0);
		$("#g3").rotate({
			angle:0,
			animateTo:1080});
		$("#g3").animate({
			left:"1050",
			top:"200"
		});
		$("#g3").fadeTo("slow",0);
	},700);
	setTimeout(function(){
		$("#b").rotate({
			angle:0,
			animateTo:1080
		});
		$("#b").animate({
			left:"100",
			top:"200"
		});
		$("#b").fadeTo("slow",0);
	},900);
	$("#g2").delay(1000).animate({
		height:"250px",
		width:"194px",
		left:"270"
	},1000);
		$("#g2_d").delay(2500).show("slow");
		$("#back").delay(3200).show("slow");
			
});
$("#g3").click(function(){
	$("#g3").fadeTo("slow",0);
	$("#g3").animate({left:"250"});
	setTimeout(function(){
		$("#b").rotate({
			angle:0,
			animateTo:-90
		});
		$("#g3-1").show("slow");
		$("#g3-1").animate({left:"50"});
		$("#b").delay("slow").animate({left:"50"});
		$("#g3-1").hide("slow");
		$("#b").fadeTo("slow",0);	
		$("#g1").rotate({
			angle:0,
			animateTo:-90
		});
		$("#g3-2").show("slow");
		$("#g3-2").animate({left:"50"});
		$("#g1").delay("slow").animate({left:"50"});
		$("#g3-2").hide("slow");
		$("#g1").fadeTo("slow",0);
		$("#g2").rotate({
			angle:0,
			animateTo:90
		});
		$("#g3-3").show("slow");
		$("#g3-3").animate({left:"1050"});
		$("#g2").delay("slow").animate({left:"1050"});
		$("#g3-3").hide("slow");
		$("#g2").fadeTo("slow",0);
	},300)
	$("#g3").delay(2000).fadeTo("slow",1);
		$("#g3_d").delay(3000).show("slow");
		$("#back").delay(3500).show("slow");
		
		setTimeout(function(){
			$("#b").delay().rotate({
			angle:0,
			animateTo:0
		});
		$("#g1").rotate({
			angle:0,
			animateTo:0
		});
		$("#g2").rotate({
			angle:0,
			animateTo:0
		});},3000)
		
});


});

   $(document).ready(function(){
$("#back").click(function(){
	
		$("#b_d").hide("slow");
		$("#g1_d").hide("slow");
		$("#g2_d").hide("slow");
		$("#g3_d").hide("slow");
		$("#b").fadeTo("slow",0);
		$("#g1").fadeTo("slow",0);
		$("#g2").fadeTo("slow",0);
		$("#g3").fadeTo("slow",0);
	setTimeout(function(){
		$("#b").css({"top":"250px",
			"left":"170px"
			});
			$("#g1").css({"top":"250px","left":"360px"
			});
			$("#g2").css({"top":"250px","left":"550px","height":"250px"
			});
			$("#g2 img").css({"height":"250px"
			});
			$("#g3").css({"top":"250px","left":"740px"
			});
			$("#g3-2").css({"top":"250px","left":"360px"
			});
			$("#g3-3").css({"top":"250px","left":"550px"
			});
			$("#g3-1").css({"top":"250px","left":"170px"
			});
		},1000);
		
		$("#b").delay(2000).fadeTo("slow",1);
		$("#g1").delay(2000).fadeTo("slow",1);
		$("#g2").delay(2000).fadeTo("slow",1);
		$("#g3").delay(2000).fadeTo("slow",1);
		$("#back").delay(1000).hide("slow");
		})
   });
 </script>


</head>

<body onLoad="load()">
<div id="wapper">
 <div height="300" width="300" id="loadingIMG" style= "display:none" ><object type="application/x-shockwave-flash"   height="300" > 
         <param name="movie"  value="pic/loading5.swf"></param> 
      </object></div>
<div id="bg"><img src="pic/us_bg.png"></div>
<div id="title"><img src="pic/title.png"></div>
<div id="b"><img src="pic/b.png"></div>
<div id="g1"><img src="pic/g1.png"></div>
<div id="g2"><img src="pic/g2.png"></div>
<div id="g3"><img src="pic/g3.png"></div>
<div id="g3-1"><img src="pic/g3.png"></div>
<div id="g3-2"><img src="pic/g3.png"></div>
<div id="g3-3"><img src="pic/g3.png"></div>
<div id="b_d"><img src="pic/b_d.png"></div>
<div id="g1_d"><img src="pic/g1_d.png"></div>
<div id="g2_d"><img src="pic/g2_d.png"></div>
<div id="g3_d"><img src="pic/g3_d.png"></div>
<div id="back"> <img src="pic/back.png"></div>
<div id="changeCSS"></div>
<div id="nav"></div>
<div id="logo"><object type="application/x-shockwave-flash" wmode="transparent"   > 
         <param name="movie"  value="pic/logo.swf"></param>
         </object>
  </div>
</div>
</body>
</html>
