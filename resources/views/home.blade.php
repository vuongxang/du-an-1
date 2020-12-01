@extends('layouts.app')

@section('content')
<div class="bg-blue-800">
    <div class="container mx-auto bg-blue-800  px-8 py-4">
      <div class="grid grid-cols-2 mx-16 ">
        <div class="p-4 flex justify-center">
            <img src="{{asset('frontend/images/owl-png-transparent-images-png-only-2.png')}}" alt="" width="200px">
        </div>
        <div class="p-4 flex flex-col items-center justify-center">
          <p class="text-white text-3xl font-bold font-sans">Learn English Free </p>
          <div class="grid grid-cols-2 my-4">
          <a href="{{route('site.topic')}}" class="mx-4 border rounded px-4 py-2 text-blue-800 bg-white font-bold">Start now</a>
            {{-- <button class="mx-4 border rounded px-4 py-2 text-blue-800 bg-white font-bold">Start Now</button> --}}
            {{-- <button class="mx-4 border rounded px-4 py-2 text-blue-800 bg-white font-bold">Login</button> --}}
          </div>
        </div>
      </div>
    </div>
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
      <div class="">
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
                    <input
                      class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') is-invalid @enderror"
                      id="username" type="text" name="name" placeholder="Username" value="{{ old('name') }}" required autocomplete="name" autofocus>
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
                    <input
                      class="@error('email') is-invalid @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                      id="username" type="text" placeholder="Username" name="email" value="{{ old('email') }}" required autocomplete="email">
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
                    <input
                      class="@error('password') is-invalid @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                      id="username" type="password" name="password" required autocomplete="new-password">
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
                    <input
                      class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                      id="password" type="password" name="password_confirmation" required autocomplete="new-password">
                  </div>
                  <div class="flex items-center justify-between">
                    <button
                      class="bg-white text-blue-800 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                      type="submit">
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
      </div>
    </div>
  </div>
@endsection
