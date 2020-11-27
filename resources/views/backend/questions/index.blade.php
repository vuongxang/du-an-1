@extends('backend.master')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản lý câu hỏi</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">question</li>
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
                <h3 class="card-title">Danh sách câu hỏi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Bài học</th>
                    <th>nội dung</th>
                    <th>Đáp án A</th>
                    <th>Đáp án B</th>
                    <th>Đáp án C</th>
                    <th>Đáp án D</th>
                    <th>Đáp án đúng</th>
                    <th><a href="{{ route('question.create') }}" class="btn btn-sm btn-success">Thêm mới</a></th>
                  </tr>
                  </thead>
                    <tbody>
                        @foreach ($models as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>5</td>
                                <td>{!!$item->content!!}</td>
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
                {{$models->links()}}
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