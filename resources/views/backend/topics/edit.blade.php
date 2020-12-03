@extends('backend.master')
@section('content')
<div class="wrapper">
    <!-- Main Sidebar Container -->
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="#">Chủ đề</a></li>
                <li class="breadcrumb-item active">Sửa chủ đề</li>
            </ol>
        </div>
        <!-- /.container-fluid -->
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
                        <form role="form" method="post" action="{{ route('topic.update', $topic->id) }}">
                            @csrf
                            @method('PATCH','PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="topic-name">Tên chủ đề</label>
                                    <input type="text" name="name" class="form-control" id="topic-name" placeholder="Tên chủ đề" value="{{$topic->name}}">
                                    @error('name')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <textarea class="form-control" name="desc" rows="3" placeholder="Mô tả" >{{$topic->desc}}</textarea>
                                    @error('desc')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="price">Giá </label>
                                    <input type="text" name="price" class="form-control" id="price" placeholder="Mặc định miễn phí" value="{{$topic->price}}">
                                    @error('name')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Show_menu</label>
                                    <select name="show_menu" id="" class="form-control">
                                        <option value="1" {{ $topic->show_menu==1? "selected":null }}>Có</option>
                                        <option value="0" {{ $topic->show_menu==0? "selected":null }}>Không</option>
                                    </select>

                                </div>
                                <label for="">Hình ảnh</label><br>
                                <div class="input-group ">
                                    <span class="input-group-btn ">
                                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                                            <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                    </span>

                                    <input id="thumbnail" class="form-control" type="text" name="image" value="{{$topic->image}}">
                                </div>
                                <img id="holder" style="margin-top:15px;max-height:100px;">
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-lg btn-block bg-indigo-700">Cập nhật </button>
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