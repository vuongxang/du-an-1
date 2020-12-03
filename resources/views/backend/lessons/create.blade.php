@extends('backend.master')
@section('content')
<div class="wrapper">


    <!-- Main Sidebar Container -->
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <ol class="breadcrumb ">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="#">Bài học</a></li>
                <li class="breadcrumb-item active">Thêm mới</li>
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
                            <h3 class="card-title text-gray-50">Thêm bài học mới</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="post" action="{{ route('lesson.store') }}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="lesson-name">Tên bài học</label>
                                    <input type="text" name="name" class="form-control" id="lesson-name" placeholder="Tên bài học">
                                    @error('name')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <textarea class="form-control" name="desc" rows="3" placeholder="Mô tả" id="my-editor"></textarea>
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
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="video">Đường dẫn video</label>
                                    <input type="text" name="video" class="form-control" id="video" placeholder="Đường dẫn video">
                                    @error('video')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-lg btn-block bg-indigo-700">Thêm mới</button>
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