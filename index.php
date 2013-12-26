<!DOCTYPE html>
<html lang="en" >
<head><?PHP
sleep(2);
ob_start();
@session_start();
 if(!isset($_SESSION['us'])){
		$_SESSION['us']=0;
		
		}
		 if(!isset($_SESSION['studying'])){
		$_SESSION['studying']=0;
		
		}
		
    if(!isset($_SESSION['story'])){
		$_SESSION['story']=0;
		}
 if(!isset($_SESSION['joinme'])){
		$_SESSION['joinme']=0;
		}

?>
 <script type="text/livescript" src="callInformation.js"></script>
	  
	 <script>
   var check=function () { <?php
    if(isset($_SESSION['username'])){
		$_SESSION['joinme']=10;
		 echo "$('#clickLogin').hide();";
		 	echo"call_information();";}
			else{echo "$('#clickLogin').delay(2000).animate({ opacity:'toggle'},1000); ";}
?> }
</script>
	<title>爆肝吧!勇者</title>

	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <link rel="stylesheet" type="text/css" href="css/homepage.css">
        <script type="text/javascript" src="jquery-1.10.2.min.js"> 

        </script>
       <script type="text/javascript" src="homepage.js">
       </script>
      
       
       
	
	<script type="text/javascript">
function MM_callJS(jsStr) { //v2.0
  return eval(jsStr)
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
    </script>
</head>
<body onLoad="load();" style="margin:0px;">
    <div id="wapper">
    <div height="300" width="300" id="loadingIMG" style= "display:none" ><object type="application/x-shockwave-flash"   height="300" > 
         <param name="movie"  value="pic/loading.swf"></param> 
      </object></div>

    <div id="main">
      <img src="pic/homepage.png">
</div>
      <div id ="news_pic">
        <img src="pic/news.png">
          <div id="news" ></div>
      </div>
      
  
<div id="login" ></div>

      <div id="clickLogin"><img src="pic/login_btn.png " id="clickLogin_img" onClick="MM_callJS('showLogin()')" > </div>

      <div id="loadingIMG2" >
		<object height="300"
			width="300"  type="application/x-shockwave-flash" wmode="transparent"   > 
         <param  name="movie"  value="pic/load02.swf"></param>
         </object></div>
     <div id="succes"><img src="pic/login_succes.png"></div>
	<div id="fail"><img src="pic/login_fail.png"></div>
    <div id="register_succes"><img src="pic/register_succes.png"></div>
    <div id="information_box"></div>
    <div id="homepage_p"><img src="pic/homepage_p.png"></div>
    
    <div id="btn1" height="170" width="200">
<object  height="170"; type="application/x-shockwave-flash" wmode="transparent"    > 
         <param name="movie"  value="pic/bt01.swf"></param>
         </object>
         </div>
         <div id="btn2"  height="260" width="200">
         <object  height="260px"; type="application/x-shockwave-flash" wmode="transparent"   > 
         <param name="movie"  value="pic/bt02.swf"></param>
         </object>
         </div>
         <div id="btn3"  height="200" width="200">
         <object  height="200px"; type="application/x-shockwave-flash" wmode="transparent"   > 
         <param name="movie"  value="pic/bt03.swf"></param>
         </object>
         </div>
         <div id="btn4"  height="220" width="200">
         <object height="220"; type="application/x-shockwave-flash" wmode="transparent"   > 
         <param name="movie"  value="pic/bt04.swf"></param>
         </object></div>
         
        <div id="logo"><object type="application/x-shockwave-flash" wmode="transparent"   > 
         <param name="movie"  value="pic/logo.swf"></param>
         </object>
         </div>

    
</div>

</body>
</html>