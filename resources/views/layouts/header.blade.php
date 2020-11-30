<div class=" bg-purple-600 ">
  <div class="container mx-auto ">
    <div class="flex justify-between items-center h-20">
      <div class="flex items-center ">
        <div class="mr-12 ">
          <a href="{{route('home')}}" class="hover:text-purple-300 hover:no-underline text-purple-100">
            <div class="flex items-center  ">
              <img src="{{asset('frontend/images/wisdom.png')}}" alt="" width="60px">
              <span class="font-semibold text-xl text-mono ">BEENG</span>
            </div>
          </a>
        </div>
        <div class="flex ">
          <div class="mr-8"><a href="{{route('home')}}" class=" font-semibold hover:text-purple-300 hover:no-underline text-purple-100">TRANG CHỦ</a></div>
          <div class="mr-8"><a href="{{route('site.topic')}}" class="font-semibold hover:text-purple-300 hover:no-underline text-purple-100">HỌC</a></div>
          <div><a href="{{route('home')}}" class=" font-semibold hover:text-purple-300 hover:no-underline text-purple-100">TIN TỨC</a></div>
        </div>
      </div>
      <div class="flex ">
        @guest
        <div class="mr-8">
          <a class="font-semibold hover:text-purple-300 hover:no-underline text-purple-100" href="{{ route('login') }}">{{ __('ĐĂNG NHẬP') }}</a>
        </div>
        @if (Route::has('register'))
        <div>
          <a class="font-semibold hover:text-purple-300 hover:no-underline text-purple-100" href="{{ route('register') }}">{{ __('ĐĂNG KÝ') }}</a>
        </div>
        @endif
        @else
        <a id="navbarDropdown" class="nav-link dropdown-toggle font-semibold hover:text-purple-300 hover:no-underline text-purple-100" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a id="navbarDropdown" class="dropdown-item" href="#">
            {{ __('Thông tin cá nhân') }}
          </a>
          <a id="navbarDropdown" class="dropdown-item" href="#">
            {{ __('Lịch sử học') }}
          </a>
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
            {{ __('Đăng xuất') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </div>
        @endguest
      </div>
    </div>
  </div>
</div>
<!-- <nav class="navbar navbar-expand-md navbar-light shadow-sm bg-blue-800">

  <div class="container">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="container mx-auto bg-blue-800 h-14 px-8 ">
        <div class="grid grid-cols-5 ">
          <div class="col-span-4 ">
            <div class="grid grid-cols-5  py-3">
              <div class="cols-span-3">
                <div class="flex items-center">
                  <a href="{{route('home')}}"><img src="{{asset('frontend/images/bee.png')}}" alt="" width="70px"></a>

                  <a href="{{route('home')}}"><span class="font-bold text-2xl font-mono text-white">BeeEnG</span></a>
                </div>
              </div>
              <div class="cols-span-2 ml-24">
                <div class="flex justify-center ">
                  <div class="px-4 py-3 m-2 text-xl text-white font-bold"><a href="">Home</a></div>
                  <div class="px-4 py-3 m-2 text-xl text-white font-bold"><a href="{{route('site.topic')}}">Topic</a></div>
                  <div class="px-4 py-3 m-2 text-xl text-white font-bold"><a href="">News</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-span-1 flex">
            <div class="flex justify-center items-center">
              @guest
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
              @endif
              @else
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </div>
              </li>
              @endguest
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav> -->