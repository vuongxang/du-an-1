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
              <h3 class="text-xl font-bold font-mono">English Course</h3>
              <p class="my-8">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Rerum cumque pariatur delectus blanditiis libero obcaecati, consectetur,
                voluptatem minima dignissimos mollitia tenetur! Laudantium quisquam libero
                expedita minus, unde nostrum! Exercitationem, dignissimos!
              </p>
              <button class="border-black border-2 rounded-full py-1 px-2">Xem Thêm</button>
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
              <h3 class="text-xl font-bold font-mono">English Course</h3>
              <p class="my-8">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Rerum cumque pariatur delectus blanditiis libero obcaecati, consectetur,
                voluptatem minima dignissimos mollitia tenetur! Laudantium quisquam libero
                expedita minus, unde nostrum! Exercitationem, dignissimos!
              </p>
              <button class="border-black border-2 rounded-full py-1 px-2">Xem Thêm</button>
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
              <h3 class="text-xl font-bold font-mono">English Course</h3>
              <p class="my-8">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Rerum cumque pariatur delectus blanditiis libero obcaecati, consectetur,
                voluptatem minima dignissimos mollitia tenetur! Laudantium quisquam libero
                expedita minus, unde nostrum! Exercitationem, dignissimos!
              </p>
              <button class="border-black border-2 rounded-full py-1 px-2">Xem Thêm</button>
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
<div class="">
  <div class="container mx-auto grid grid-cols-2 gap-4">
    <div class="">
      @foreach ($posts as $item)
      <div class="grid grid-cols-2 gap-1 p-4">
        <img src="{{$item->image}}" width="200px" alt="">
        <div class="">
          <h3 class="text-lg font-bold">{{$item->title}}</h3>
          <p>{!!$item->content!!}</p>
          <a class=" border rounded px-4 py-1 text-white bg-blue-800 font-bold">More</a>
        </div>
      </div>
      @endforeach
      {{$posts->links()}}
      <!--End Posts-->

    </div>
    <!-- <div class="">
      <div class="p-4  flex justify-center">
        @guest
        @if (Route::has('register'))
        <div class="border rounded p-4  bg-blue-800 shadow-md">
          <h3 class="text-white text-center font-bold text-xl">Register Now</h3>
          <form class=" px-16 pt-6 pb-8 mb-2" action="{{ route('register')}}">
            @csrf
            <div class="mb-4">
              <label class="block text-white text-sm font-bold mb-2" for="username">
                {{ __('Name') }}
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') is-invalid @enderror" id="username" type="text" name="name" placeholder="Username" value="{{ old('name') }}" required autocomplete="name" autofocus>
              @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="mb-4">
              <label class="block text-white text-sm font-bold mb-2" for="username">
                {{ __('E-Mail Address') }}
              </label>
              <input class="@error('email') is-invalid @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username" name="email" value="{{ old('email') }}" required autocomplete="email">
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="mb-4">
              <label class="block text-white text-sm font-bold mb-2" for="username">
                {{ __('Password') }}
              </label>
              <input class="@error('password') is-invalid @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="password" name="password" required autocomplete="new-password">
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="mb-6">
              <label class="block text-white text-sm font-bold mb-2" for="password">
                {{ __('Confirm Password') }}
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password_confirmation" required autocomplete="new-password">
            </div>
            <div class="flex items-center justify-between">
              <button class="bg-white text-blue-800 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                {{ __('Register') }}
              </button>
            </div>
          </form>
        </div>
        @endif
        @else
        <div class="bg-blue-800 w-full">
          <h3 class="text-white">Quản lý học tập</h3>
        </div>
        @endguest
      </div>
    </div> -->
  </div>
</div>
@endsection