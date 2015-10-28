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
    <h2>{{ $article['title'] }}</h2>
    <div class="ziyecont">{{ $article['content'] }}</div>
@stop
@section('upart')
    @foreach($upart as $uparts)
    <li><a href={{ URL::to('view/'.$uparts['cat'].'/'.$uparts['id']) }}>{{ $uparts['title'] }}</a></li>
    @endforeach
@stop
@section('newsay')
    <p>贺磊说：什么什么什么什么什么什么什么</p>
@stop