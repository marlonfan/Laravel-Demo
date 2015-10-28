<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>醉无心-后台管理</title>
	{{ HTML::style('./css/admin.css')}}
	{{ HTML::script('./js/jquery-1.11.1.min.js')}}
	{{ HTML::script('ueditor.config.js') }}
	{{ HTML::script('ueditor.all.min.js') }}
	{{ HTML::script('./lang/zh-cn/zh-cn.js')}}
	{{ HTML::script('third-party/SyntaxHighlighter/shCore.js') }}
	<script>
	$(document).ready(function() {
        $(".pagination li").last().css("border-right","#0099ff solid 1px");
    });
	</script>
	<script type="text/javascript">      
	window.UEDITOR_HOME_URL = "/";
    SyntaxHighlighter.all();       
	</script>
</head>
<body>
	<div id="content">
		<div id="header">
			<div id="top"><span id="user">当前管理员:无心</span><span id="out"><a href="{{ URL::to('out') }}">退出</a></span></div>
			<div class="clear"></div>
			<hr color="blue">
			<div id="nav">
				<ul>
					<li class="navli"><a href={{ URL::to('admin') }}>文章管理</a></li>
					<li class="navli"><a href={{ URL::to('admin/add') }}>添加文章</a></li>
				</ul>
			</div>
		</div>
		<div class="clear"></div>
		<div id="main">
		@yield('content')
		</div>
		<div class="clear"></div>
		<hr color="blue">
		<div id="footer">
			无心CMS后台管理
		</div>
	</div>
</body>
</html>