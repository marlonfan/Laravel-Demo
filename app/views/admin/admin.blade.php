@extends('layout.administrator')
@section('content')
			<table id="cont">
				<thead>
					<tr>
						<td class="title">标题(点击编辑)</td>
						<td class="user">用户</td>
						<td class="cat">分类</td>
						<td class="date">时期</td>
						<td class="del">操作</td>
					</tr>
				</thead>
				<hr color="blue">
				@foreach($art as $a)
				<tbody>
					<tr>
						<td class="title"><a href={{ URL::to('admin/edit/'.$a['id']) }}>{{ $a['title'] }}</a></td>
						<td class="user">{{ $a['user'] }}</td>
						<td class="cat">{{ $a['cat'] }}</td>
						<td class="date">{{ date('Y-m-d',$a['create_time']) }}</td>
						<td class="del"><a href={{ URL::to('admin/del/'.$a['id']) }}>删除</a></td>
					</tr>
				</tbody>
				@endforeach
			</table>
			{{ $art->links() }}
@stop