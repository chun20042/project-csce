<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>

<script type="text/javascript" src="jquery-1.10.2.min.js"> </script>
<style>
#A{
	position: absolute;
	height: 10px;
	width: 10px;
	
	z-index: 2;

	border-top-color: #fFF;
	border-right-color: #fFF;
	border-bottom-color: #fFF;
	border-left-color: #fFF;
	background-repeat:repeat;
}
	

</style>

<script>
var count_style=1;
$(document).ready(function(){
	$("#A").click(function(){
		changebody(count_style%5);
		count_style++;}
		);
	
	
	});
function changebody(style){
	
	switch (style){
		
		case 0:
		$("body").css({
		"background-color":"#FFFFFF",
		"background-image":"none"
		});
		break;
		
		case 1:	
		$("body").css({
		"background-repeat":"repeat",
		"background-image":"url(pic/try1.png)"
		});
		break;
		case 2:
		$("body").css({
		"background-repeat":"repeat",
		"background-image":"url(pic/try2.png)"
		});
		break;
		case 3:
		$("body").css({
		"background-repeat":"repeat",
		"background-image":"url(pic/try3.png)"
		});
		break;
		case 4:
		$("body").css({
		"background-repeat":"repeat",
		"background-image":"url(pic/try4.png)"
		});
		break;
		}
	}
</script>
</head>

<body>
<div id="A"><img src="pic/style_change.png" width="120"></div>

</body>
</html>
