<!doctype html>
<html> 
	<head>
	
	<meta charset="utf-8">
	<title>Untitled Document</title>
	
</head>

<body>
	
<script type="text/javascript">
function hide_float_right() {
    var content = document.getElementById('float_content_right');
    var hide = document.getElementById('hide_float_right');
    if (content.style.display == "none")
    {content.style.display = "block"; hide.innerHTML = '<a href="javascript:hide_float_right()"> Tắt quảng cáo [X]</a>'; }
        else { content.style.display = "none"; hide.innerHTML = '<a href="javascript:hide_float_right()">Vui lòng liên hệ với chúng tôi</a>';
    }
    }
	function myF(){
      onl.style.display = "block";
      
    }
    function un(){
        onl.style.display = "none";
    }
</script>

<script type="text/javascript">
function hide_float_left() {
    var content = document.getElementById('float_content_left');
    var hide = document.getElementById('hide_float_left');
    if (content.style.display == "none")
    {content.style.display = "block"; hide.innerHTML = '<a href="javascript:hide_float_left()"> Tắt quảng cáo [X]</a>'; }
        else { content.style.display = "none"; hide.innerHTML = '<a href="javascript:hide_float_left()">Sale cực sốc, ưu đãi cực lớn</a>';
    }
    }
	function myF(){
      onl.style.display = "block";
      
    }
    function un(){
        onl.style.display = "none";
    }
</script>	
<style>
.float-ck { position: fixed; bottom: 160px; z-index: 9000}
* html .float-ck {position:absolute;bottom:auto;top:expression(eval (document.documentElement.scrollTop+document.docum entElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,0)||0))) ;}
#float_content_right {border: 0px solid #01AEF0;}
#hide_float_right {text-align:right; font-size: 11px;}
#hide_float_right a {background: #01AEF0; padding: 2px 4px; color: #FFF;}
</style>
<body onload="myF()">
    <div class="float-ck" style="right: 0px" >
<div id="hide_float_right">
<a href="javascript:hide_float_right()">Tắt quảng cáo[X]</a></div>
<div id="float_content_right">
<!-- Start quang cao-->
<img src="images/QC/3.png" width="165" height="115" />
<!-- End quang cao -->
</div>
	</div>
	
<style>
.float-ck { position: fixed; bottom: 40px; z-index: 9000}
* html .float-ck {position:absolute;bottom:auto;top:expression(eval (document.documentElement.scrollTop+document.docum entElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0))) ;}
#float_content_left {border: 0px solid #01AEF0;}
#hide_float_left {text-align:left; font-size: 11px;}
#hide_float_left a {background: #01AEF0; padding: 2px 4px; color: #FFF;}
</style>
<body onload="myF()">
    <div class="float-ck" style="left: 0px" >
<div id="hide_float_left">
<a href="javascript:hide_float_left()">Tắt quảng cáo[X]</a></div>
<div id="float_content_left">
<!-- Start quang cao-->
<img src="images/QC/1.png" width="165" height="115" />
<!-- End quang cao -->		
</div>
    <div id="onl" style="position: fixed; bottom: 160px; top:100px;left:300px;z-index:100;">
        <div style="backgroud-color:black; width:1000px; height=200px;">
            <a href="javascript:un()" style="color:blue;"> Tắt quảng cáo [X]</a>
            <img src="images/QC/vicenzo1.png" width="750" height="500" />
        </div>
    </div>	
</body>
</html>