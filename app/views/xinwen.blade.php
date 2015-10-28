@extends('layout.son')
@section('nav')
    @foreach($navs as $nav)
        <li><a href={{ URL::to('cat/'.$nav['short']) }}
            @if($nav['cat']==$cat)
            {{ 'class="enter"' }}
            @endif
        >{{ $nav['cat'] }}</a></li>
    @endforeach
@stop
@section('cat')
    {{ $cat }}
@stop
@section('content')
    @if(!count($article))
        {{ '无内容!' }}
    @endif
    @foreach ($article as $art)
    <div class="sonlist">
        <span class="sonbiaoti">{{ HTML::link('view/'.$curr.'/'.$art->id,$art->title)}}</span>
        <span class="sondate">{{ date('Y-m-d',$art->create_time) }}</span>
    </div>
    @endforeach
    {{ $article->links() }}
@stop
@section('upart')
    @foreach($upart as $uparts)
    <li><a href={{ URL::to('view/'.$uparts['cat'].'/'.$uparts['id']) }}>{{ $uparts['title'] }}</a></li>
    @endforeach
@stop
@section('newsay')
    <p>贺磊说：什么什么什么什么什么什么什么</p>
@stop