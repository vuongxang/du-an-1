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
                        <h1>Quản lý Topics</h1>
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
                            <form role="form" method="post" action="{{ route('topic.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="topic-name">Tên topic</label>
                                        <input type="text" name="name" class="form-control" id="topic-name"
                                            placeholder="topic...">
                                        @error('name')
                                            <span class="text-danger" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <textarea class="form-control" name="desc" rows="3"
                                            placeholder="Mô tả..." id="my-editor"></textarea>
                                        @error('desc')
                                            <span class="text-danger" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Show_menu</label>
                                        <select name="show_menu" id="">
                                            <option value="1">Có</option>
                                            <option value="0">Không</option>
                                        </select>

                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                          <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                            <i class="fa fa-picture-o"></i> Choose
                                          </a>
                                        </span>
                                        <input id="thumbnail" class="form-control" type="text" name="image">
                                      </div>
                                      <img id="holder" style="margin-top:15px;max-height:100px;">
                                      
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
