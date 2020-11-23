@extends('backend.master')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản lý Topic</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Topic</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Chi tiết: {{$topic->name}}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <label for="">Mô tả</label>
                <p>{{$topic->desc}} <a href="#" class="fas fa-edit text-success"></a></p>
                <div>
                    <label for="">Ảnh</label>
                    <img src="#" alt="">
                </div>
                <div>
                    <p>Show menu: {{$topic->show_menu==1? "có":"không"}}</p>
                </div>
                <div>
                    <h4>Bài học</h4>
                    <table id="" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>ID</th>
                          <th>Tên</th>
                          <th>topic</th>
                          <th>mô tả</th>
                          <th>Nội dung 1</th>
                          <th>Nội dung 2</th>
                          <th>Nội dung 3</th>
                          <th><a href="{{ route('lesson.create') }}" class="btn btn-sm btn-success">Thêm mới</a></th>
                        </tr>
                        </thead>
                          <tbody>
                              @foreach ($lessons as $item)
                                  <tr>
                                      <td>{{$item->id}}</td>
                                      <td>{{$item->name}}</td>
                                      <td>{{$item->topic->name}}</td>
                                      <td>{{$item->desc}}</td>
                                      <td>{{$item->content_1}}</td>
                                      <td>{{$item->content_2}}</td>
                                      <td>{{$item->content_3}}</td>
                                      
                                      <td class="text-center">
                                          <a href="{{route('lesson.edit',$item->id)}}" class="fas fa-edit text-success"></a>
                                          <form action="{{route('lesson.destroy',$item->id)}}" method="post">
                                              @csrf
                                              @method('delete')
                                              <button class="btn"><i class="fas fa-times text-danger"></i></button>
                                          </form>
                                      </td>
                                  </tr>
                              @endforeach
                             
                          </tbody>
                          
                      </table>
                </div>
            </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
@endsection