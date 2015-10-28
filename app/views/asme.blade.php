@extends('layout.son')
@section('nav')
    @foreach($navs as $nav)
        <li><a href={{ URL::to('cat/'.$nav['short']) }}
            @if($nav['short']==$cat)
            {{ 'class="enter"' }}
            @endif
        >{{ $nav['cat'] }}</a></li>
    @endforeach
@stop
@section('cat')
    {{ $cat }}
@stop
@section('cont')
                    <!-- 打字区特效 -->
                    <div id="myContent">
                    </div>
                    <div id="contentToWrite" style="display:none">
                        MyName : fanfan<br>
                        Birthday : 1995-02-24<br>
                        Specialty : PHP,MYSQL,HTML+CSS,JQUERY<br>
                        -----------------------------<br>
                        上面的英文是为了感觉更加像DOS环境....进入正题吧:<br>
                        樊凡,男,90后码农！从12年开始逐渐接触web开发,已在此行业水深火热两三年,从开始的懵懵懂懂到现在。还没有正式工作,偶尔可以给自己放个小假,关掉计算机出去走走,轻装旅行。<br>
                        人生就是一个得与失的过程，而我却是一个幸运者，得到的永远比失去的多。虽有些蓬头垢面的工作，但是我仍然很享受那些熬得只剩下黑眼圈的日子，因为我在学习使用html,css,javascript,php,mysql,jQuery...中激发了兴趣，然后越走越远....<br>
                        我的座右铭:种一棵树最好的时间是十年前，其次就是现在。学习永远不晚。
                    </div>
                    <script type="text/javascript">
                    writeContent(true);
                    </script>
                    <!-- end打字区 -->
@stop
@section('upart')
    @foreach($upart as $uparts)
    <li><a href={{ URL::to('view/'.$uparts['cat'].'/'.$uparts['id']) }}>{{ $uparts['title'] }}</a></li>
    @endforeach
@stop
@section('newsay')
    <p>贺磊说：什么什么什么什么什么什么什么</p>
@stop