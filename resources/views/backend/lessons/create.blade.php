@extends('backend.master')
@section('content')
    <div class="wrapper">


        <!-- Main Sidebar Container -->
        <!-- Content Wrapper. Contains page content -->
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Quản lý Lesson</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">add new</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row container">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Thêm mới</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" method="post" action="{{ route('lesson.store') }}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="lesson-name">Tên lesson</label>
                                        <input type="text" name="name" class="form-control" id="lesson-name"
                                            placeholder="lesson...">
                                        @error('name')
                                            <span class="text-danger" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <textarea class="form-control" name="desc" rows="3"
                                            placeholder="Mô tả..."></textarea>
                                        @error('desc')
                                            <span class="text-danger" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Chọn topic</label>
                                        <select name="topic_id" id="">
                                            @foreach ($topic as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label for="lesson-name">Content 1</label>
                                        <textarea type="text" name="content_1" class="form-control" id="editor"
                                            placeholder="link..."></textarea>
                                        @error('content_1')
                                            <span class="text-danger" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="lesson-name">Link video 2</label>
                                        <input type="text" name="content_2" class="form-control" id="lesson-name"
                                            placeholder="link...">
                                        @error('content_2')
                                            <span class="text-danger" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="lesson-name">Link video 3</label>
                                        <input type="text" name="content_3" class="form-control" id="lesson-name"
                                            placeholder="link...">
                                        @error('content_3')
                                            <span class="text-danger" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
