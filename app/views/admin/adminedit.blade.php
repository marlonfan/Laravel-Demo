@extends('layout.administrator')
@section('content')
		<form action={{ URL::to('admin/update/'.$a['id']) }} method="post">
			title: <input name="title" type="text" class="formstyle" value={{ $a['title'] }}>
			分类：<select name="cat" class="formstyle">
					<option value="suibi" @if($a['cat']=='随笔'){{ 'selected="true"' }} @endif>随笔</option>
					<option value="xinwen" @if($a['cat']=='新闻'){{ 'selected="true"' }} @endif>新闻</option>
					<option value="jishu" @if($a['cat']=='技术'){{ 'selected="true"' }} @endif>技术</option>
					<option value="ziyuan" @if($a['cat']=='资源'){{ 'selected="true"' }} @endif>资源</option>
					<option value="code" @if($a['cat']=='code'){{ 'selected="true"' }} @endif>code</option>
				</select>
				
				<input type="submit" class="formstyle" value="submit">
				<script id="editor" type="text/plain" style="width:999px;height:280px;">
				{{ $a['content'] }}
				</script>
				<script>
                    var ue = UE.getEditor('editor');
                </script>
		</form>
@stop