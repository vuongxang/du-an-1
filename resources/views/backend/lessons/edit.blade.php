@extends('backend.master')
@section('content')
<div class="wrapper">
    <!-- Main Sidebar Container -->
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <ol class="breadcrumb ">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Bài học</a></li>
                <li class="breadcrumb-item active">Sửa bài học</li>
            </ol>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row container">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card ">
                        <div class="card-header bg-indigo-500">
                            <h3 class="card-title text-gray-50">Cập nhật bài học mới</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="post" action="{{ route('lesson.update',$model->id) }}">
                            @csrf
                            @method('PATCH','PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="lesson-name">Tên bài học</label>
                                    <input type="text" name="name" class="form-control" id="lesson-name" placeholder="Tên bài hóc" value="{{$model->name}}">
                                    @error('name')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <textarea class="form-control" name="desc" rows="3" placeholder="Mô tả" id= "my-editor">{{$model->desc}}</textarea>
                                    @error('desc')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Chọn chủ đề</label>
                                    <select name="topic_id" id="" class="form-control">
                                        @foreach ($topic as $item)
                                        <option value="{{ $item->id }}" {{$item->id==$model->topic_id? 'selected':null}}>{{ $item->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="video">Đường dẫn video</label>
                                    <input type="text" name="video" class="form-control" id="video" placeholder="Đường dẫn ảnh" value="{{ $model->video }}">
                                    @error('video')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <!-- <div class="form-group">
                                    <label for="lesson-name">Link video 3</label>
                                    <input type="text" name="content_3" class="form-control" id="lesson-name" placeholder="link..." value="{{ $model->content_3 }}">
                                    @error('content_3')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div> -->
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-lg btn-block bg-indigo-700">Sửa</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
@endsection