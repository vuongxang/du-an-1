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
              <h1>Quản lý danh mục</h1>
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
                <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="form-group">
                        <label for="">Tiêu đề</label>
                        <input type="text" name="name" class="form-control" value="{{old('name', '12345')}}" placeholder="">
                        @if($errors->first('name'))
                            <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Ảnh</label>
                        <input type="file" name="image" class="form-control" value="" placeholder="">
                        @if($errors->first('image'))
                            <span class="text-danger">{{$errors->first('image')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Giá</label>
                        <input type="text" name="price" class="form-control" value="{{old('price', '12345')}}" placeholder="">
                        @if($errors->first('price'))
                            <span class="text-danger">{{$errors->first('price')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Danh mục</label>
                        <select name="cate_id" id="">
                            @foreach ($cates as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Mô tả ngắn</label>
                        <textarea name="short_desc" rows="30" class="form-control">{{old('short_desc')}}</textarea>
                        @if($errors->first('short_desc'))
                            <span class="text-danger">{{$errors->first('short_desc')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Detail</label>
                        <textarea name="detail" rows="5" class="form-control">{{old('detail')}}</textarea>
                        @if($errors->first('detail'))
                            <span class="text-danger">{{$errors->first('detail')}}</span>
                        @endif
                    </div>
                    <div>
                        <button type="submit" class="btn btn-sm btn-success">Lưu</button>
                        <a href="{{route('admin')}}" class="btn btn-sm btn-danger">Hủy</a>
                    </div>
                
                </form>
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