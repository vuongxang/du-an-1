@extends('backend.master')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <ol class="breadcrumb ">
      <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
      <li class="breadcrumb-item "><a href="#">Chủ đề</a></li>
      <li class="breadcrumb-item "><a href="#">Bài học</a></li>
      <li class="breadcrumb-item active">Chi tiết câu hỏi</li>
    </ol>
  </div><!-- /.container-fluid -->
</section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header bg-indigo-500">
            <h3 class="card-title font-semibold font-sans text-gray-50">Chi tiết bài học: {{$lesson->name}}</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <h3 class="mb-4 font-semibold text-medium ">Chủ đề: <span class="font-bold text-lg font-mono">{{$lesson->topic->name}}</span></h3>
            <div>
              <h3  class="mb-4 font-semibold text-medium">Mô tả</h3>
              <p class=" mb-4 font-mono">{{$lesson->desc}}</p>
            </div>
            <div>
              <h4  class="mb-4 font-semibold text-medium">Câu hỏi</h4>
              <table id="" class="table table-bordered table-hover table-fixed ">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tên câu hỏi</th>
                    <th>Tên bài học</th>
                    <th>Nội dung câu hỏi</th>
                    <th>Đáp án A</th>
                    <th>Đáp án B</th>
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