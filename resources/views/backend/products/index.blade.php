@extends('backend.master')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Quản lý sản phẩm</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
            <li class="breadcrumb-item active">sản phẩm</li>
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
                <h3 class="card-title">Danh sách sản phẩm</h3>
                <p class="text-danger">@isset($msg)
                    {{$msg}}
                @endisset</p>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Tên sản phẩm</th>
                    <th>danh mục</th>
                    <th>ảnh</th>
                    <th>giá</th>
                    <th>Mô tả ngắn</th>
                    {{-- <th>Mô tả chi tiết</th> --}}
                    <th><a href="{{ route('product.create') }}" class="btn btn-sm btn-success">Thêm mới</a></th>
                  </tr>
                  </thead>
                    <tbody>
                        @foreach ($models as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->category->name}}</td>
                                <td>
                                <img src="{{asset($item->image)}}" alt="" width="100">
                                </td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->short_desc}}</td>
                                {{-- <td>{{$item->detail}}</td> --}}
                                <td class="text-center">
                                    <a href="{{route('product.edit',$item->id)}}" class="fas fa-edit text-success"></a>
                                    <form action="{{route('product.destroy',$item->id)}}" method="post">
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