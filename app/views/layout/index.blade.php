<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
{{ HTML::style('./css/index.css')}}
<title>无心阁-无心-专注web开发</title>
{{ HTML::script('./js/jquery-1.11.1.min.js')}}
<script>
	$(document).ready(function() {
        $(".main").animate({right:'+200px'},"300");
        $(".main").animate({right:'-200px'},"300");
        $(".main").animate({right:'+200px'},"700");
        $(".main").animate({right:'-50px'},"700");
        $(".main").animate({right:'0px'},"900");
		$(".nav").fadeTo(0,0.6);
		$(".meun").fadeTo(0,0.4);
		$(".meun").mouseenter(function(event) {
			$(this).css({"font-size":"35px"}).fadeTo("slow",1);
		});
		$(".meun").mouseleave(function(event) {
			$(this).css({"font-size":"30px"}).fadeTo("fast",0.5);
		});
		$("#icon").click(function(event) {
			$("#title").fadeToggle('fast');
		});
	});
</script>
</head>
<body>
<div class="return">
<a href="#top"><!--<img src="./img/top.jpg"/>--></a>
</div>
<a id="top"/>
<div class="content">
	<div class="header">
		<div class="nav">
        	<div id="navul">
            	<ul>
                	<li><a href="/" class="enter">主页</a></li>
                    @yield('nav');
                </ul>
            </div>
        </div>
        <div class="log">
        	<div id="icon">
            	{{ HTML::image('./img/icon.jpg')}}            
            </div>
            <div id="title">
            	<h1>无心阁</h1>
            	<p>我是一个php初学者,正在向攻城狮的路上不断前行！            
            </div>
        </div>
    </div>
        <div class="main">
        <div id="mainleft">
            <div class="meun" id="m1">
                <a href="{{URL::to('cat/jishu')}}">技术</a>          
            </div>
            <div class="meun" id="m2">
                <ol>
                    @yield('news')
                </ol>         
            </div>
            <div class="meun" id="m3">          
                <a href="{{URL::to('cat/ziyuan')}}">资源下载</a>  
            </div>
            <div class="meun" id="m4">          
                <a href="{{URL::to('cat/liuyan')}}">留言板</a>  
            </div>
        </div>
        <div id="mainright">
            <div id="m5">
                <div class="meun" id="m51">     
                    <span>倒计时关闭,已毕业</span>           
                </div>
                <div class="meun" id="m52">         
                    <a href="{{URL::to('cat/code')}}">code分享</a>      
                </div>
            </div>
            <div class="meun" id="m6">            
                <a href="{{URL::to('cat/suibi')}}">随笔</a>
            </div>
            <div class="meun" id="m7">          
                <span>=></span>
            </div>
            <div class="meun" id="m8">          
                <a href="{{URL::to('cat/asme')}}">关于我</a>  
            </div>
        </div>
    </div>
    <div class="footer">
        <span id="bq">Copyright &copy; 2014 无心 All Rights Reserved. Powered by 无心阁CMS</span>
    </div>
</div>  
</body>
</html>