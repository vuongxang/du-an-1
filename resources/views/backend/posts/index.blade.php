@extends('backend.master')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản lý bài viết</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">post</li>
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
                <h3 class="card-title">Danh sách bài viết</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tiêu đề</th>
                    <th>Ảnh</th>
                    <th>Nội dung</th>
                    <th>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                            Add new
                        </button>
                    </th>
                    {{-- <th><a href="{{ route('post.create') }}" class="btn btn-sm btn-success">Thêm mới</a></th> --}}
                  </tr>
                  </thead>
                    <tbody>
                        @foreach ($models as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->title}}</td>
                                <td><img src="{{$item->image}}" alt="" width="100"></td>
                                <td>{!!$item->content!!}</td>
                                
                                <td class="text-center">
                                    <a href="{{route('post.edit',$item->id)}}" class="fas fa-edit text-success"></a>
                                    <form action="{{route('post.destroy',$item->id)}}" method="post">
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
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm mới bài viết</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('post.store')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Tiêu đề</label>
                                    <input type="text" name="title" class="form-control">
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
                                  <!--up ảnh-->
                                <div class="form-group">
                                    <textarea name="content" id="my-editor" rows="10"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        
                        </div>
                    </div>
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