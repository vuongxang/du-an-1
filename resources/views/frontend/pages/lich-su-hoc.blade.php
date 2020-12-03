@extends('layouts.app')

@section('content')

<div class="container mx-auto my-3">
  <nav class="bg-grey-light py-3 rounded font-sans w-full ">
    <ol class="list-reset flex text-grey-dark">
      <li><a href="{{route('home')}}" class="text-blue font-bold">Trang Chủ</a></li>
      <li><span class="mx-2">/</span></li>
      <li><a href="#" class="text-blue font-bold">user</a></li>
    </ol>
  </nav>
  <div class="container">
        <div class="row">
            <div class="col-12">
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Topic</th>
                                <th>Trạng thái</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($topics as $index => $item)
                                <tr>
                                    <td>{{$index+1}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>
                                        @foreach ($userDangKyHoc as $a)
                                            @if ($a->topic_id==$item->id)
                                                @if ($a->trang_thai ==1)
                                                    <span class="">Đang học</span>
                                                @endif
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{route('site.topic-detail',$item->id)}}" class="btn btn-success rounded">Tiếp tục</a>
                                    </td>
                                </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
  </div>
  @endsection