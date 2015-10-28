@extends('layout.index')
@section('nav')
    @foreach($navs as $nav)
        <li><a href={{ URL::to('cat/'.$nav['short']) }}>{{ $nav['cat'] }}</a></li>
    @endforeach
@stop
@section('news')
    @foreach($news as $new)
        <li><a href={{ URL::to('view/xinwen/'.$new['id']) }}>{{ $new['title'] }}</a></li>
    @endforeach
@stop