<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<style>
#nav_btn{
	position:absolute; 
	z-index:3;
	
	}
#navlist{
	left:60px;
	top:30px;
	
	position:absolute;
	height:200px;
	width:800px;
	display:none;
	z-index:1;
	
	}
	#btn1{
		
		display:none;
	position:absolute;
	top:10px;
	left:50px;
	
	z-index:2;
		}
		#btn2{
		
		display:none;
	position:absolute;
	top:-45px;
	left:240px;
	
	z-index:2;
		}
		
		#btn3{
		
		display:none;
	position:absolute;
	top:10px;
	left:390px;
	
	z-index:2;
		}
		#btn4{
		display:none;
	position:absolute;
	top:10px;
	left:560px;
	
	z-index:2;
		}

</style>
 <script type="text/javascript" src="jquery-1.10.2.min.js"> 
</script><script>
$(document).ready(function(){
  $("#nav_btn").click(function(){
    $("#navlist").animate({
      width:'toggle'
	  
    },2000);
	$("#btn1").animate({
		height:'toggle'
		},3000);
		$("#btn2").animate({
		height:'toggle'
		},3000);
		$("#btn3").animate({
		height:'toggle'
		},3000);
		$("#btn4").animate({
		height:'toggle'
		},3000);
	
  });
});
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script> 
</head>
<div id="nav_btn" ><img src="pic/devil.png" height="150" id="Image1" onmouseover="MM_swapImage('Image1','','pic/devil2.png',1)" onmouseout="MM_swapImgRestore()"></div>
<div  id="navlist"  ><div id="btn1">
<object  height="200"; type="application/x-shockwave-flash" wmode="transparent"    > 
         <param name="movie"  value="pic/bt01.swf"></param>
         </object>
         </div>
         <div id="btn2">
         <object " height="260"; type="application/x-shockwave-flash" wmode="transparent"   > 
         <param name="movie"  value="pic/bt02.swf"></param>
         </object>
         </div>
         <div id="btn3">
         <object  height="200"; type="application/x-shockwave-flash" wmode="transparent"   > 
         <param name="movie"  value="pic/bt03.swf"></param>
         </object>
         </div><div id="btn4">
         <object height="220"; type="application/x-shockwave-flash" wmode="transparent"   > 
         <param name="movie"  value="pic/bt04.swf"></param>
         </object>
        </div><img src="pic/nav.png"></div>


      
<body onload="MM_preloadImages('pic/devil2.png')">
</body>
</html>
