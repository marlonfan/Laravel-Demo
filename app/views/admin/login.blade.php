<html>
<head>
<title>无心cms后台管理</title>
<style>
.control{
	margin-bottom:10px; width:250px; height:30px; font-family:'微软雅黑'; font-size:15px;
}
#login{
	margin:150px auto 0px auto; width:500px; height:300px; background:#0066FF; box-shadow:0 0 10px 2px #888; border-radius:50px 0;
}
#loginform{
	text-align:center; padding:70px;
}
</style>
</head>
<body>
	<div id="login">
    	{{ Form::open(array('url' => 'login/islogin','id' => 'loginform')) }}
        	{{ Form::text('user','',array('class' => 'control', 'placeholder' => '请输入用户名')) }}
            {{ Form::password('password',array('class' => 'control', 'placeholder' => '请输入密码')) }}
            {{ Form::submit('Click Me Login!',array('class' => 'control'))}}
        {{ Form::close() }}
    </div>
</body>
</html>