@extends('layouts.app')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="bg-pink-300 h-96">
        <div class="container mx-auto ">
          <div class="flex h-48 justify-between  px-24 py-16">
            <div class="flex-1 mr-16">
              <h3 class="text-xl font-bold font-mono">Học tiếng anh với Beeng</h3>
              <p class="my-8">
                Nền tảng học tập ngôn ngữ phổ biến nhất thế giới nay đã sử dụng được cho các lớp học. Hàng nghìn thành viên đã sử dụng nó để tăng cường cho các bài học của mình.
              </p>
              <button class="bg-indigo-900 border-1 rounded-full py-2 px-3 text-pink-100 font-semibold">Xem Thêm</button>
              <button class="border-indigo-900 border-2 rounded-full py-2 px-3  text-indigo-900 font-bold">Học Ngay</button>
            </div>
            <div class="flex-1">
              <img src="{{asset('frontend/images/Untitled-3.png')}}" class="d-block  w-96 " alt="...">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="bg-gray-300 h-96">
        <div class="container mx-auto ">
          <div class="flex h-48 justify-between  px-24 py-16">
            <div class="flex-1 mr-16">
              <img src="{{asset('frontend/images/Untitled-4.png')}}" class="d-block   " alt="..." width="400px">
            </div>
            <div class="flex-1 ">
              <h3 class="text-xl font-bold font-mono">Beeng trang web tốt nhất để học tiếng anh</h3>
              <p class="my-8">
                Học tập cùng Duolingo sẽ vô cùng vui nhộn và gây nghiện. Kiếm điểm khi trả lời đúng, chạy đua cùng thời gian, hay lên cấp độ với những bài học nhỏ gọn nhưng thực sự hiệu quả.
              </p>
              <button class="bg-indigo-900 border-1 rounded-full py-2 px-3 text-pink-100 font-semibold">Xem Thêm</button>
              <button class="border-indigo-900 border-2 rounded-full py-2 px-3  text-indigo-900 font-bold">Học Ngay</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="bg-purple-300 h-96">
        <div class="container mx-auto ">
          <div class="flex h-48 justify-between  px-24 py-16">
            <div class="flex-1 mr-16">
              <h3 class="text-xl font-bold font-mono">Beeng diễn đàn ngôn ngữ </h3>
              <p class="my-8">
                Trong công cuộc học tiếng Anh, từ mới,ngữ pháp hằn là một trong những phần nan giải nhất,
                do đó người học cần tăng cường sử dụng tiếng anh trong các tình huống hàng ngày,
                luyện tập thảo luận bằng tiếng Anh qua các chủ đề cùng với beeng bất cứ thời gian nào. <br>
                Hãy cùng với Beeng thảo luận về các chủ đề tiếng anh mới nhất.
              </p>
              <button class="bg-indigo-900 border-1 rounded-full py-2 px-3 text-pink-100 font-semibold">Xem Thêm</button>
              <button class="border-indigo-900 border-2 rounded-full py-2 px-3  text-indigo-900 font-bold">Học Ngay</button>
            </div>
            <div class="flex-1">
              <img src="{{asset('frontend/images/Untitled-5.png')}}" class="d-block  w-96 " alt="...">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <section>
    <div class="title">
      <h2 class="text-center my-4">BÀI VIẾT</h2>
    </div>
    <div class="container">
      <div class="row">
        @foreach ($posts as $item)
        <div class="col-sm-6 col-md-6 col-lg-3">
          <div class="card">
            <img src="{{$item->image}}" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">{{$item->title}}</h5>
              <p class="card-text">{!!$item->content!!}</p>
              <a href="{{route('site.post',$item->id)}}" class="btn btn-primary">Chi tiết</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      {{$posts->links()}}
    </div>
  </section><!--End Posts-->
  <section>
    <div class="container">
      <div class="title">
        <h2 class="text-center my-4">TOPIC</h2>
      </div>
      <div class="col-span-4">
        <div class=" border border-gray-400 rounded px-4 py-4">
          <div class="flex flex-wrap -mx-1 lg:-mx-4">
  
            @foreach ($topics as $item)
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
  
              <!-- Article -->
              <article class="overflow-hidden rounded-lg shadow-lg">
  
                <a href="{{route('site.topic-detail',$item->id)}}">
                  <img alt="Placeholder" class="block h-auto w-full" src="{{$item->image}}">
                </a>
  
                <header class="flex items-center justify-between leading-tight p-3 md:p-4">
                  <h1 class="text-lg">
                    <a class="no-underline text-black font-semibold hover:underline hover:text-black" href="{{route('site.topic-detail',$item->id)}}">
                      {{$item->name}}
                    </a>
                  </h1>
                  <p class="text-grey-darker text-sm">
                    <!-- 14/4/19 -->
                  </p>
                </header>
  
                <body>
                  <p class="p-3">
                    {{$item->desc}}
                  </p>
                </body>
                <footer class="flex items-center justify-between leading-none p-3 md:p-4 ">
  
                  <a class="ring ring-2 ring-indigo-300 px-3 py-2 rounded-full text-indigo-500 hover:bg-indigo-500 hover:no-underline hover:text-gray-50" href="{{route('site.topic-detail',$item->id)}}">
                    <span class="">Xem Thêm</span>
                  </a>
                  <span class="bg-purple-600 px-3 py-2 rounded-full text-gray-50" href="#">
                    <span class="">Miễn Phí</span>
                  </span>
                </footer>
  
              </article>
              <!-- END Article -->
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section><!--End topics-->
@endsection