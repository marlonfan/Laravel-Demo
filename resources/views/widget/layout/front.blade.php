@extends('widget/layout/frame.blade.php')

@section('body')


{{-- widget 引用, 相对路径或者绝对路径，忽略 laravel 中的路径方式吧，太难用了 --}}
@widget('widget/header/header.blade.php')

@yield("content")

@widget('widget/footer/footer.blade.php')

@stop
@section("fis_resource")@parent @require('widget/layout/front.blade.php')@stop