@extends('backend.master')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản lý bài học</h1>
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
                <h3 class="card-title">Danh sách bài học</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover table-fixed">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>topic</th>
                    <th>mô tả</th>
                    {{-- <th>Nội dung 1</th>
                    <th>Nội dung 2</th>
                    <th>Nội dung 3</th> --}}
                    <th>Chi tiết</th>
                    <th><a href="{{ route('lesson.create') }}" class="btn btn-sm btn-success">Thêm mới</a></th>
                  </tr>
                  </thead>
                    <tbody>
                        @foreach ($models as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->topic->name}}</td>
                                <td>{{$item->desc}}</td>
                                {{-- <td>{{$item->content_1}}</td>
                                <td>{{$item->content_2}}</td>
                                <td>{{$item->content_3}}</td> --}}
                                <td><button class="btn btn-primary" data-toggle="modal" data-target="#lesson-{{$item->id}}">{{count($item->questions)}} Question</button></td>
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
                {{$models->links()}}
              </div>
              <!-- /.card-body -->
            </div>
              <!-- Modal -->
              @foreach ($models as $item)
              <div class="modal fade" id="lesson-{{$item->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" id="staticBackdropLabel">Lesson: {{$item->name}}</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <table id="example2" class="table table-bordered table-hover table-fixed">
                        <thead>
                        <tr>
                          <th>ID</th>
                          <th>Tên</th>
                          <th>Content</th>
                          <th><a href="{{ route('question.create') }}" class="btn btn-sm btn-success">Thêm mới</a></th>
                        </tr>
                        </thead>
                          <tbody>
                              @foreach ($item->questions as $question)
                                  <tr>
                                      <td>{{$question->id}}</td>
                                      <td>{{$question->name}}</td>
                                      <td>{{$question->content}}</td>
                                      <td class="text-center">
                                          <a href="{{route('question.edit',$question->id)}}" class="fas fa-edit text-success"></a>
                                          <form action="{{route('question.destroy',$question->id)}}" method="post">
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
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <a href="{{route('lesson.show',$item->id)}}" class="btn btn-primary text-white">detail</a>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
@endsection