
     $(document).ready(function(){	 
$("#b").mouseover(function(){
	$("#b img").animate({
	  height:"110%"
	   },500);  
});
$("#b").mouseout(function(){
	$("#b img").animate({
	  height:"100%"
	   },500);  
});

$("#g1").mouseover(function(){
	$("#g1 img").animate({
	  height:"110%"
	   },500);  
});
$("#g1").mouseout(function(){
	$("#g1 img").animate({
	  height:"100%"
	   },500);  
});

$("#g2").mouseover(function(){
	$("#g2 img").animate({
	  height:"110%"
	   },500);  
});
$("#g2").mouseout(function(){
	$("#g2 img").animate({
	  height:"100%"
	   },500);  
});

$("#g3").mouseover(function(){
	$("#g3 img").animate({
	  height:"110%"
	   },500);  
});
$("#g3").mouseout(function(){
	$("#g3 img").animate({
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
		animateTo:1080});
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
			"left":"290px"
			});
			$("#g1").css({"top":"250px","left":"480px"
			});
			$("#g2").css({"top":"250px","left":"670px","height":"250px"
			});
			$("#g2 img").css({"height":"250px"
			});
			$("#g3").css({"top":"250px","left":"860px"
			});
			$("#g3-2").css({"top":"250px","left":"480px"
			});
			$("#g3-3").css({"top":"250px","left":"670px"
			});
			$("#g3-1").css({"top":"250px","left":"290px"
			});
		},1000);
		
		$("#b").delay(2000).fadeTo("slow",1);
		$("#g1").delay(2000).fadeTo("slow",1);
		$("#g2").delay(2000).fadeTo("slow",1);
		$("#g3").delay(2000).fadeTo("slow",1);
		$("#back").delay(1000).hide("slow");
		});
   });
