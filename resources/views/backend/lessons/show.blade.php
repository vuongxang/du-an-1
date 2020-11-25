@extends('backend.master')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản lý Lesson</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">lesson</li>
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
                <h3 class="card-title">Chi tiết: {{$lesson->name}}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <label for="">Topic</label>
                <p>{{$lesson->topic->name}}</p>
                <div>
                    <label for="">Mô tả</label>
                    <p>{{$lesson->desc}}</p>
                </div>
                <div>
                    <h4>Câu hỏi</h4>
                    <table id="" class="table table-bordered table-hover table-fixed ">
                        <thead>
                        <tr>
                          <th>ID</th>
                          <th>Tên</th>
                          <th>lesson_id</th>
                          <th>câu hỏi</th>
                          <th>Đáp án A</th>
                          <th>Đáp án A</th>
                          <th>Đáp án C</th>
                          <th>Đáp án D</th>
                          <th>Đáp án đúng</th>
                          <th><a href="{{ route('question.create') }}" class="btn btn-sm btn-success">Thêm mới</a></th>
                        </tr>
                        </thead>
                          <tbody class="overflow-hidden h-4">
                              @foreach ($questions as $item)
                                  <tr>
                                      <td>{{$item->id}}</td>
                                      <td>{{$item->name}}</td>
                                      <td>{{$item->lesson_id}}</td>
                                      <td>{{$item->content}}</td>
                                      <td>{{$item->a}}</td>
                                      <td>{{$item->b}}</td>
                                      <td>{{$item->c}}</td>
                                      <td>{{$item->d}}</td>
                                      <td>{{$item->dap_an_dung}}</td>
                                      
                                      <td class="text-center">
                                          <a href="{{route('question.edit',$item->id)}}" class="fas fa-edit text-success"></a>
                                          <form action="{{route('question.destroy',$item->id)}}" method="post">
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