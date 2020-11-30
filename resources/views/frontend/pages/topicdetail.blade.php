@extends('layouts.app')

@section('content')

<div class="container mx-auto my-3">
  <nav class="bg-grey-light py-3 rounded font-sans w-full ">
    <ol class="list-reset flex text-grey-dark">
      <li><a href="{{route('home')}}" class="text-blue font-bold">Trang Chủ</a></li>
      <li><span class="mx-2">/</span></li>
      <li><a href="{{route('site.topic')}}" class="text-blue font-bold">Chủ Đề</a></li>
      <li><span class="mx-2">/</span></li>
      <li><a href="#" class="text-blue font-bold">{{$topicDetail->name}}</a></li>
    </ol>
  </nav>
  <div class="flex">
    <div class="flex-grow mr-16">
      <h3 class="font-bold text-3xl mb-4 text-black">{{$topicDetail->name}}</h3>
      <p class="text-lg mb-4">{{$topicDetail->desc}} <br> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus voluptate quod ea. Quas ut veniam dolore dolorum earum officia. Obcaecati et a dolorem odit, voluptates facere totam nisi! Dicta, cumque. </p>
      <div class="flex justify-between items-center mb-4">
      <h4 class="font-semibold text-xl  text-black">Nội Dung Bài Học</h4>
      <p>Tổng số bài học : {{count($lessons)}}</p>
      </div>
      @if(count($lessons)>0)
      <ul class="list-group">
        @foreach ($lessons as $item)

        <li class="list-group-item  group hover:bg-indigo-600 ">
          <div class="flex justify-between">
            <div>
              <a href="{{route('site.lesson',$item->id)}}" class="group-hover:text-gray-100 ">Tên Bài Học : {{$item->name}} </a>
            </div>
            <div>
              <p class="group-hover:text-gray-100">Thời gian học:</p>
            </div>
          </div>
        </li>
        @endforeach


      </ul>
      @else
      <p>Chưa có bài học nào thuộc chủ đề này!</p>
      @endif
    </div>
    <div class="" style="width:700px">
      <div class="max-w-xs rounded overflow-hidden shadow-lg my-2  ">
        <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
        <div class="px-16 py-4 text-center">
          <div class="font-bold text-2xl mb-2 "><p href="#" class="text-blue font-bold">{{$topicDetail->name}}</p></div>
          <div class="font-bold text-xl mb-3 ">Miễn Phí</div>
          
          <p class="text-gray-800 text-base mb-2">
          Trình độ cơ bản 
          </p>
          <p class="text-gray-800 text-base mb-2 ">Tổng số bài học : {{count($lessons)}}</p>
          <p class="text-gray-800 text-base mb-2">
            Học mọi lúc, mọi nơi 
          </p>
          <div class="mt-4 ">
          <a href="#" class=" px-3 py-2 bg-indigo-600 text-gray-50 rounded-full shadow-xs cursor-pointer  border hover:no-underline hover:bg-indigo-200 hover:text-indigo-900  font-bold">Học Ngay</a>
          </div>
        </div>
        <!-- <div class="px-6 py-4">
          <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#photography</span>
          <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#travel</span>
          <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#winter</span>
        </div> -->
      </div>
    </div>
  </div>
  @endsection