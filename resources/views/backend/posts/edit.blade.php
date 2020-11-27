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
              <h1>Quản lý bài viết</h1>
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
                <form action="{{route('post.update',$model->id)}}" method="post" class="p-4">
                  @csrf
                  @method('PATCH','PUT')
                  <div class="form-group ">
                      <label for="">Tiêu đề</label>
                      <input type="text" name="title" class="form-control" value="{{$model->title}}">
                  </div>
                  <label for="thumbnail" class="">Ảnh bài viết</label>
                  <div class="input-group">
                    
                    
                      <span class="input-group-btn">
                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                          <i class="fa fa-picture-o"></i> Choose
                        </a>
                      </span>
                      <input id="thumbnail" class="form-control" type="text" name="image" value="{{$model->image}}">
                  </div>
                    <img id="holder" style="margin-top:15px;max-height:100px;">
                    <!--up ảnh-->
                  <div class="form-group">
                    <label for="" class="mb-2">Nội dung</label>
                      <textarea name="content" id="my-editor" rows="10">{{$model->content}}</textarea>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
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