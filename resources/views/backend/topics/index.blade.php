@extends('backend.master')
@section('content')
<section class="content-header">
  <div class="container-fluid">

    <ol class="breadcrumb ">
      <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
      <li class="breadcrumb-item active">Chủ đề</li>
    </ol>
  </div>
  <!-- /.container-fluid -->
</section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title text-lg font-semibold ">Danh sách chủ đề</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Tên</th>
                  <th>Mô tả</th>
                  <th>Giá</th>
                  <th>Ảnh</th>
                  <th>Chi tiết</th>
                  <th>Hiển thị ở menu</th>
                  <th><a href="{{ route('topic.create') }}" class="btn btn-sm btn-success">Thêm mới</a></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($models as $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->name}}</td>
                  <td>{!!$item->desc!!}</td>
                  <td>{{$item->price==0?"Miễn phí":$item->price}}</td>
                  <td><img src="{{$item->image}}" alt="" width="50px"></td>
                  <td><button class="btn btn-primary" data-toggle="modal" data-target="#lesson-{{$item->id}}">{{count($item->lesson)}} bài học</button></td>
                  {{-- <td><a href="{{route('topic.show',$item->id)}}" class="btn btn-success">Show</a></td> --}}
                  <td class="text-center">
                    {{ $item->show_menu==1?"Có":"Không" }}
                  </td>
                  <td class="text-center">
                    <a href="{{route('topic.edit',$item->id)}}" class="fas fa-edit text-success"></a>
                    <form action="{{route('topic.destroy',$item->id)}}" method="post">
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
          <!-- Modal -->
          @foreach ($models as $item)
          <div class="modal fade" id="lesson-{{$item->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title font-weight-bold" id="staticBackdropLabel">Chủ đề: {{$item->name}}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <table id="example2" class="table table-bordered table-hover table-fixed">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Tên bài học</th>
                        <th>Mô tả</th>
                        <th><a href="{{ route('lesson.create') }}" class="btn btn-sm btn-success">Thêm mới</a></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($item->lesson as $les)
                      <tr>
                        <td>{{$les->id}}</td>
                        <td>{{$les->name}}</td>
                        <td>{{$les->desc}}</td>
                        <td class="text-center">
                          <a href="{{route('lesson.edit',$les->id)}}" class="fas fa-edit text-success"></a>
                          <form action="{{route('lesson.destroy',$les->id)}}" method="post">
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
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                  <button type="button" class="btn btn-primary">Understood</button>
                </div>
              </div>
            </div>
          </div>
          @endforeach
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