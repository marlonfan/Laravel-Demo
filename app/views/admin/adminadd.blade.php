@extends('layout.administrator')
@section('content')
		<form action={{ URL::to('admin/addsubmit') }} method="post">
			title: <input name="title" type="text" class="formstyle"}>
			分类：<select name="cat" class="formstyle">
					<option value="suibi">随笔</option>
					<option value="xinwen">新闻</option>
					<option value="jishu">技术</option>
					<option value="ziyuan">资源</option>
					<option value="code">code</option>
				   </select>
				<input type="submit" class="formstyle" value="submit">
				<script id="editor" type="text/plain" style="width:999px;height:280px;">
				</script>
				<script>
                    var ue = UE.getEditor('editor');
                </script>
		</form>
@stop