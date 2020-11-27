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
                        <h1>Quản lý question</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">edit</li>
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
                                <h3 class="card-title">Cập nhật</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" method="post" action="{{ route('question.update',$model->id) }}">
                                @csrf
                                @method('PUT','PATCH')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="question-name">Tên câu hỏi</label>
                                        <input type="text" name="name" class="form-control" id="question-name"
                                            placeholder="question..." value="{{ $model->name }}">
                                        @error('name')
                                            <span class="text-danger" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Bài học</label>
                                        <select name="lesson_id" id="">
                                            @foreach ($lessons as $item)
                                                <option value="{{ $item->id }}" {{ $item->id==$model->id? 'selected':null }}>{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="question-name">Nội dung câu hỏi</label>
                                        <textarea class="form-control" name="content" id="my-editor" rows="3">{{ $model->content }}</textarea>
                                        @error('content')
                                            <span class="text-danger" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="question-name">Đáp án A</label>
                                        <input class="form-control" name="a" id="" value="{{ $model->a }}">
                                        @error('a')
                                            <span class="text-danger" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="question-name">Đáp án B</label>
                                        <input class="form-control" name="b" id="" value="{{ $model->b }}">
                                        @error('a')
                                            <span class="text-danger" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="question-name">Đáp án C</label>
                                        <input class="form-control" name="c" id="" value="{{ $model->c }}">
                                        @error('a')
                                            <span class="text-danger" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="question-name">Đáp án D</label>
                                        <input class="form-control" name="d" id="" value="{{ $model->d }}">
                                        @error('a')
                                            <span class="text-danger" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="question-name">Đáp án đúng</label>
                                        <select name="dap_an_dung" id="">
                                            <option value="a">A</option>
                                            <option value="b">B</option>
                                            <option value="c">C</option>
                                            <option value="d">D</option>
                                        </select>
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
