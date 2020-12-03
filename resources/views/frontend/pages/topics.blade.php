@extends('layouts.app')

@section('content')
<!-- <div class="bg-blue-800">
  <div class="container mx-auto bg-blue-800  px-8 py-4">
    <div class="grid grid-cols-2 mx-16 ">
      <div class="p-4 flex justify-center">
        <img src="{{asset('frontend/images/owl-png-transparent-images-png-only-2.png')}}" alt="" width="200px">
      </div>
      <div class="p-4 flex flex-col items-center justify-center">
        <p class="text-white text-3xl font-bold font-sans">Welcome to BeeEngLish</p>
        <p class="text-white text-sm  font-sans">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis recusandae est voluptate obcaecati, nesciunt amet, quasi repudiandae in qui sint totam cum excepturi accusamus incidunt repellendus vitae aliquid vero deleniti.</p>
      </div>
    </div>
  </div>
</div> -->

<div class="container mx-auto ">
  <nav class="bg-grey-light mt-4 rounded font-sans w-full ">
    <ol class="list-reset flex text-grey-dark">
      <li><a href="{{route('home')}}" class="text-blue font-bold">Trang Chủ</a></li>
      <li><span class="mx-2">/</span></li>
      <li><a href="{{route('site.topic')}}" class="text-blue font-bold">Chủ Đề</a></li>
    </ol>
  </nav>
  <div class="grid grid-cols-5 my-4 gap-4">
    <div class="col-span-1">
      <div class=" border border-blue-800 rounded px-4 py-4">
        <h3 class=" font-semibold text-xl">Danh sách chủ đề</h3>
        <ul class="list-none">
          @foreach ($topics as $item)
          <li class="border-b-2 border-gray-300 py-2 flex align-items-center">
            <a href="{{route('site.lesson',$item->id)}}" class="text-blue-800">Chủ đề: {{$item->name}} </a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
    <!-- <div class="col-span-4">
    <div class=" border border-gray-400 rounded px-4 py-4">
      <ul class="list-none">
        @foreach ($topics as $item)
        <li class="border-b-2 border-gray-300 py-2 flex align-items-center">
          <img src="{{$item->image}}" alt="" width="50" class="rounded-full mr-3">
          <a href="{{route('site.lesson',$item->id)}}" class="text-blue-800">{{$item->name}} </a>
        </li>
        @endforeach

      </ul>
    </div>
  </div> -->
    <div class="col-span-4">
      <div class=" border border-gray-400 rounded px-4 py-4">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">

          @foreach ($topics as $item)
          <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

              <a href="#">
                <img alt="Placeholder" class="block h-64 w-full " src="{{$item->image}}">
              </a>

              <header class="flex items-center justify-between leading-tight p-3 md:p-4">
                <h1 class="text-lg">
                  <a class="no-underline text-black font-semibold hover:underline hover:text-black   " href="">
                    Chủ đề: {{$item->name}}
                  </a>
                </h1>
                <p class="text-grey-darker text-sm">
                  
                </p>
              </header>

              <body>
                <p class="p-3">
                {{$item->desc}}
              </p>
              </body>
              <footer class="flex items-center justify-between leading-none p-3 md:p-4 ">
                <!-- <a class="flex items-center no-underline hover:underline text-black" href="#">
                <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                <p class="ml-2 text-sm">
                  Author Name
                </p>
              </a> -->
                <a class="ring ring-2 ring-indigo-300 px-3 py-2 rounded-full text-indigo-500 hover:bg-indigo-500 hover:no-underline hover:text-gray-50" href="{{route('site.topic-detail',$item->id)}}">
                  <span class="">Xem Thêm</span>
                </a>
                <p class="bg-purple-600 px-3 py-2 rounded-full text-gray-50" href="#">
                  <span class="">{{$item->price==0?"Miễn Phí":"$item->price"}}</span>
                </p>
              </footer>

            </article>
            <!-- END Article -->

          </div>
          @endforeach
        </div>

      </div>
    </div>
  </div>

</div>
@endsection