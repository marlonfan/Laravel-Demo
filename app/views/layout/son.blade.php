<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
{{ HTML::style('./css/son.css')}}
{{ HTML::style('third-party/SyntaxHighlighter/shCoreDefault.css') }}
<title>无心阁-无心-专注web开发</title>
{{ HTML::script('./js/jquery-1.11.1.min.js')}}
{{ HTML::script('ueditor.config.js') }}
{{ HTML::script('ueditor.all.min.js') }}
{{ HTML::script('./lang/zh-cn/zh-cn.js')}}
{{ HTML::script('third-party/SyntaxHighlighter/shCore.js') }}
<script>
	$(document).ready(function() {
		$(".nav").fadeTo(0,0.6);
		$(".meun").fadeTo(0,0.5);
        // $(".sonlist").last().css("border","0");
        $(".pagination li").last().css("border-right","#0099ff solid 1px")
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
    window.UEDITOR_HOME_URL = "/";
</script>
<script type="text/javascript">      
    SyntaxHighlighter.all();       
</script>
<!-- 打字区特效 -->
    <style type="text/css">
body{
    font-family: Arial;
    margin-top:0px;
    background-repeat:no-repeat;
    }
    #myContent, #myContent blink{
        width:630px;
        height:467px;
        background:white;
        color: blue;
        font-family:courier;
        line-height: 30px;
    }    
    blink{
        display:inline;
    }
    </style>
    <script type="text/javascript"> 
    var charIndex = -1;
    var stringLength = 0;
    var inputText;
    function writeContent(init){
    if(init){
        inputText = document.getElementById('contentToWrite').innerHTML;
    }
        if(charIndex==-1){
            charIndex = 0;
            stringLength = inputText.length;
        }
        var initString = document.getElementById('myContent').innerHTML;
        initString = initString.replace(/<SPAN.*$/gi,"");
        
        var theChar = inputText.charAt(charIndex);
        var nextFourChars = inputText.substr(charIndex,4);
        if(nextFourChars=='<BR>' || nextFourChars=='<br>'){
            theChar  = '<BR>';
            charIndex+=3;
        }
        initString = initString + theChar + "<SPAN id='blink'>_</SPAN>";
        document.getElementById('myContent').innerHTML = initString;
        charIndex = charIndex/1 +1;
if(charIndex%2==1){
             document.getElementById('blink').style.display='none';
        }else{
             document.getElementById('blink').style.display='inline';
        }
                
        if(charIndex<=stringLength){
            setTimeout('writeContent(false)',70);
        }else{
            blinkSpan();
        }  
    }
    var currentStyle = 'inline';
    function blinkSpan(){
        if(currentStyle=='inline'){
        currentStyle='none';
        }else{
        currentStyle='inline';
        }
        document.getElementById('blink').style.display = currentStyle;
        setTimeout('blinkSpan()',0);
    }
    </script>
    <!-- 打字区结束 -->
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
                    <li><a href="/">主页</a></li>
                    @yield('nav')
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
        <div class="mainleft">
            <div class="cont">
                <h1>@yield('cat')</h1>
                <hr color="#0099FF" size="1px"/>
                <div class="soncont">
                    @yield('cont')
                    @yield('content')
                </div>
            </div>
        </div>
        <div class="mainright">
            <div class="cont">
                <h1>热门文章</h1>
                <hr color="#0099FF" size="1px"/>
                <ul>
                    @yield('upart')
                </ul>
            </div>
            <div class="cont">
                <h1>最新留言</h1>
                <hr color="#0099FF" size="1px"/>
                @yield('newsay')
            </div>
            <div class="cont">
                <h1>友情链接</h1>
                <hr color="#0099FF" size="1px"/>
                <a class="conta" href="#">无心阁</a>
                <a class="conta" href="#">花开菩提</a>
                <a class="conta" href="#">幻蓝阁</a>
                <a class="conta" href="#">半点心博客</a>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="footer">
        <span id="bq">Copyright &copy; 2014 无心 All Rights Reserved. Powered by 无心阁CMS</span>
    </div>
</div>  
</body>
</html>