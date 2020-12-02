@extends('layouts.app')

@section('content')

<div class="container mx-auto my-4 gap-4">
   @if ($point>8)
        <div class="jumbotron">
                <h1 class="display-4">Chúc mừng</h1>
                <p class="lead">Bạn đã hoàn thành bài học</p>
                <hr class="my-4">
                <p>Điểm của bạn là: {{$point}}</p>
                <a class="btn btn-primary btn-lg" href="{{route('site.topic-detail',$topic->id)}}" role="button">Tiếp tục</a>
        </div>
    @else
        <div class="jumbotron">
            <h1 class="display-4">Rất tiếc</h1>
            <p class="lead">Bạn chưa đạt điểm hoàn thành khóa học(Điểm cần đạt: 8)</p>
            <hr class="my-4">
            <p>Điểm của bạn là: {{$point}}</p>
            <a class="btn btn-primary btn-lg" href="{{route('site.get-question',$lesson->id)}}" role="button">Làm lại</a>
            <a class="btn btn-primary btn-lg" href="{{route('site.topic-detail',$topic->id)}}" role="button">Thoát</a>

        </div>
    @endif
</div>
@endsection
