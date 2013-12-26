<html><?PHP
@session_start();
?>



<head>
<style>
#ui{
	z-index:0;}
#register{
	display:none
	z-index:1;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


	<script type="text/javascript" src="jquery-1.10.2.min.js"	>  </script>
<title></title>
	<script type="text/javascript">
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




function MM_callJS(jsStr) { //v2.0
  return eval(jsStr)
}





        var login=function(){
			$('#loadingIMG2').show();
			$('#ui').fadeTo("fast",0.66)
            
            var URLs="check_login.php";
            $.ajax({
                url: URLs,
				data:{username:$('#username').val(),password:$('#password').val()},
                type:"POST",
                success: function(msg){
				$('#re').html(msg);
       $('#loadingIMG2').hide();
	  $('#ui').fadeTo("slow",1)           
	   },
                error:function(xhr, ajaxOptions, thrownError){ 
                    alert(xhr.status); 
                    alert(thrownError); 
                }
            });
        }



        var registing=function(){
			
			$('#loadingIMG2').show();
			$('#register').fadeTo("fast",0.66)
            
            var URLs="set_register.php";
            $.ajax({
                url: URLs,
				data:{username:$('#username1').val(),password:$('#password1').val(),email:$('#email').val(),re_password:$('#re_password').val(),name:$('#name').val()},
                type:"POST",
                success: function(msg){
				$('#re2').html(msg);
		       $('#loadingIMG2').hide();
	  			           
	   },
                error:function(xhr, ajaxOptions, thrownError){ 
                    alert(xhr.status); 
                    alert(thrownError); 
                }
            });
        }




  


var hide=function(){
	$('#login').hide(2000);
  $('#news_pic').fadeTo(2000, 1);
$('#news').fadeTo(2000, 1);
$('#main').fadeTo(2000,1);
 $('#clickLogin').fadeTo(2000,1);
	}
	
	var register=function(){
		$('#ui').hide();
		$('#register').show('slow');
	
		
	}
	
    </script>
    
    
    
    
</head>
<body onLoad="MM_preloadImages('pic\登入btn4.png','pic\sign_up_btn2.png','pic\sign_up_btn3.png','pic\登入btn1.png','pic\XX2.png','pic/sign_up_btn3.png','pic/sign_up_btn2.png','pic/XX2.png','pic/登入btn1.png','pic/登入btn4.png','pic/確定btn3.png','pic/確定btn2.png')" >
<div id="ui"><form action="" method="post">
<table width="645" height="575" border="0" cellspacing="3" cellpadding="3" background="pic\login.png">
  <tr>
    <td width="91" height="195">&nbsp;</td>
   
    <td width="390">&nbsp;</td>
     <td width="122"><img src="pic\xx.png" height="100" id="Image3" onMouseDown="MM_swapImage('Image3','','pic/XX2.png',1)" onMouseOut="MM_swapImgRestore()" onClick="hide()">&nbsp;</td>
  </tr>
   <tr> 
    <td height="86">&nbsp;</td>
    <td id="register_box" rowspan="2" ><p>帳號:
      <label for="username" ></label>
      <input  height="20" type="text" name="username" id="username">
      <br> <br>
      密碼:
      <label for="password"></label>
      <input  height="20" type="password" name="password" id="password">
    </p>
    <div id="re" style=" color:#F00"> </div>
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="68">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td height="105">&nbsp;</td>
    <td><img src="pic\login_btn1.png" height="90" id="Image1" onClick="MM_callJS('login()')" onMouseDown="MM_swapImage('Image1','','pic/login_btn3.png',1)" onMouseOver="MM_swapImage('Image1','','pic/login_btn2.png',1)" onMouseOut="MM_swapImgRestore()"><img src="pic\sign_up_btn1.png" height="100" id="Image2" onClick="MM_callJS('register()')" onMouseDown="MM_swapImage('Image2','','pic/sign_up_btn3.png',1)" onMouseOver="MM_swapImage('Image2','','pic/sign_up_btn2.png',1)" onMouseOut="MM_swapImgRestore()" ></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="86">&nbsp;</td>
    <td>&nbsp;
		
	</td>
    <td id='test'>&nbsp;</td>
  </tr>
</table>
</form>

</div>
<div id="register"><form action="" method="post">
<table width="645" height="556" border="0" cellspacing="3" cellpadding="3" background="pic\login.png">
  <tr>
    <td width="91" height="228">&nbsp;</td>
   
    <td width="390" rowspan="3"><p>&nbsp;</p><br>
      <p>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      帳號:
        <label for="username" ></label>
        <input  height="20" type="text" name="username1" id="username1">
        <br> <br>
        
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 密碼:
        <label for="password"></label>
        <input  height="20" type="password" name="password1" id="password1">
      <p> 確認密碼:
        <label for="re_password"></label>
        <input  height="20" type="password" name="re_password" id="re_password">
         <p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;暱稱:
           <label for="name"></label>
        <input  height="20" type="text" name="name" id="name">
      </p>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;e-mail:
        <label for="email"></label>
        <input  height="20" type="text" name="email" id="email"> 
    <br><div id="re2"></div>   </td>
     <td width="122"><img src="pic\xx.png" height="100" id="Image3" onMouseDown="MM_swapImage('Image3','','pic/XX2.png',1)" onMouseOut="MM_swapImgRestore()" onClick="hide()">&nbsp;</td>
  </tr>
   <tr> 
    <td height="63">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="37">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td height="25">&nbsp;</td>
    <td><img src="pic/ok_btn1.png" id="Image4" onClick="MM_swapImage('Image4','','pic/ok_btn3.png',1);MM_callJS('registing()')" onMouseOver="MM_swapImage('Image4','','pic/ok_btn2.png',1)" onMouseOut="MM_swapImgRestore()"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="86">&nbsp;</td>
    <td>&nbsp;</td>
    <td id='test'>&nbsp;</td>
  </tr>
</table>
</form>

</div>


</body>
</html>