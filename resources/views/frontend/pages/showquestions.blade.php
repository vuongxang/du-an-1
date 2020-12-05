<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.headerhtml')
</head>

<body>
  <div class="bg-gray-100 h-screen w-screen	">
    <div class="container mx-auto ">


      <div class="  px-4 py-4 mx-auto" style="width:768px">
        <!-- <div class=" pt-1 inline-flex">
          <a href="#" class="text-2xl  w-8  h-8 border rounded hover:no-underline hover:text-black  flex justify-center items-center">&times</a>
        </div> -->

        <!--quizz form-->
        <form action="{{route('site.quizz')}}" method="post">
          @csrf
          <input type="hidden" name="topic_id" value="{{$lesson->topic_id}}">
          <input type="hidden" name="lesson_id" value="{{$lesson->id}}">
          <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
          @foreach ($questions as $item)
          <div class="text-3xl text-center font-mono	font-bold">
            <p>{!!$item->content!!}</p>
          </div>
          <div class="">
            <div class="my-2 group">
              <input type="radio" name="{{$item->id}}" value="a" class=" " id="ans-a">
              <label class="  " for="ans-a">{{$item->a}}</label>
            </div>
            <div class="my-2">
              <input type="radio" name="{{$item->id}}" value="b" class="" id="ans-b">
              <label class="  " for="ans-b">{{$item->b}}</label>
            </div>
            <div class="my-2">
              <input type="radio" name="{{$item->id}}" value="c" class="" id="ans-c">
              <label class="  " for="ans-c">{{$item->c}}</label>
            </div>
            <div class="my-2">
              <input type="radio" name="{{$item->id}}" value="d" class="" id="ans-d">
              <label class=" " for="ans-d">{{$item->d}}</label>
            </div>
          </div>
          @endforeach
          
          <button type="submit" class="btn btn-success">Finish</button>
        </form>
        <div class="flex justify-center	 mt-3">
          @if ($questions->hasPages())
          <nav style="width:768px">
            <ul class="pagination flex justify-between">
              {{-- Previous Page Link --}}
              @if ($questions->onFirstPage())
              <li class="page-item  " aria-disabled="true">
                <a class="rounded-full bg-purple-600 text-gray-50  px-3 py-2 hover:no-underline hover:bg-purple-700 hover:text-gray-50" href="{{route('site.lesson',$lesson->id)}}">Quay Lại</a>
              </li>
              @else
              <li class="page-item ">
                <a class="rounded-full bg-indigo-600 text-gray-50  px-3 py-2 hover:no-underline hover:bg-indigo-700 hover:text-gray-50 " href="{{ $questions->previousPageUrl() }}" rel="prev">Câu hỏi Trước</a>
              </li>
              @endif

              {{-- Next Page Link --}}
              @if ($questions->hasMorePages())
              <li class="page-item">
                <a class="rounded-full bg-indigo-600 text-gray-50  px-3 py-2 hover:no-underline hover:bg-indigo-700 hover:text-gray-50" href="{{ $questions->nextPageUrl() }}" rel="next">Tiếp Tục</a>
              </li>
              @else
              <li class="page-item disabled" aria-disabled="true">
                <a href="{{route('site.quizz')}}" class="rounded-full bg-purple-600 text-gray-50  px-3 py-2 hover:no-underline hover:bg-purple-700 hover:text-gray-50">Kết thúc</a>
              </li>
              @endif
            </ul>
          </nav>
          @endif
        </div>
      </div>
    </div>
</body>

</html>