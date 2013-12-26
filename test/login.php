<html><?PHP
session_start();
?>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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




        var login=function(){
            
            var URLs="check_login.php";
            $.ajax({
                url: URLs,
				data:{username:$('#username').val(),password:$('#password').val()},
                type:"POST",
                success: function(msg){
				$('#test').html(msg);
                 
                },
                error:function(xhr, ajaxOptions, thrownError){ 
                    alert(xhr.status); 
                    alert(thrownError); 
                }
            });
        }
function MM_callJS(jsStr) { //v2.0
  return eval(jsStr)
}


var hide=function(){
	$('#login').hide();
	}
    </script>
</head>
<body onLoad="MM_preloadImages('登入btn4.png','sign_up_btn2.png','sign_up_btn3.png','登入btn1.png','XX2.png')" >
<div id=login;><form action="" method="post">
<table width="645" height="591" border="0" cellspacing="3" cellpadding="3" background="login.png">
  <tr>
    <td width="91" height="195">&nbsp;</td>
   
    <td width="390">&nbsp;</td>
     <td width="122"><img src="xx.png" height="100" id="Image3" onMouseDown="MM_swapImage('Image3','','XX2.png',1)" onMouseOut="MM_swapImgRestore()" onClick="hide()">&nbsp;</td>
  </tr>
   <tr> 
    <td height="86">&nbsp;</td>
    <td rowspan="2"><p>帳號:
      <label for="username" ></label>
      <input  height="20" type="text" name="username" id="username">
      <br> <br>
      密碼:
      <label for="password"></label>
      <input  height="20" type="text" name="password" id="password">
    </p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="82">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td height="105">&nbsp;</td>
    <td><img src="login_btn32.png" height="90" id="Image1" onClick="MM_callJS('login()')" onMouseDown="MM_swapImage('Image1','','登入btn1.png',1)" onMouseOver="MM_swapImage('Image1','','登入btn4.png',1)" onMouseOut="MM_swapImgRestore()"><img src="sign_up_btn1.png" height="100" id="Image2" onMouseDown="MM_swapImage('Image2','','sign_up_btn3.png',1)" onMouseOver="MM_swapImage('Image2','','sign_up_btn2.png',1)" onMouseOut="MM_swapImgRestore()"></td>
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
</body>
</html>