@extends('widget/layout/frame.blade.php')

@section('body')


{{-- widget 引用, 相对路径或者绝对路径，忽略 laravel 中的路径方式吧，太难用了 --}}
@widget('widget/header/header.blade.php')

<div id="middle" class="container">
    <div class="row">
        <div class="col-md-3">@widget('widget/sidebar/sidebar.blade.php')</div>
        <div class="col-md-9">
            <div id="content">@yield("content")</div>
        </div>
    </div>
</div>

@widget('widget/footer/footer.blade.php')

@stop
@section("fis_resource")@parent @require('widget/layout/2-cols-with-left.blade.php')@stop