<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.headerhtml')
</head>

<body>
  <div class="bg-gray-100 h-screen w-screen	">
    <div class="container mx-auto ">
      <header class="">

        <div class=" flex justify-center p-3">
          @foreach ($lessonspag as $item)
          <iframe width="768" height="500" src="{{$item->video}}" frameborder="0" allow="  " allowfullscreen></iframe>
          @endforeach
        </div>

    </div>

    <div class="flex justify-center	 mt-3">
      @if ($lessonspag->hasPages())
      <nav style="width:768px">
        <ul class="pagination flex justify-between">
          {{-- Previous Page Link --}}
          @if ($lessonspag->onFirstPage())
          <li class="page-item  " aria-disabled="true">
            <a class="rounded-full bg-purple-600 text-gray-50  px-3 py-2 hover:no-underline hover:bg-purple-700 hover:text-gray-50" href="{{route('site.topic-detail',$lesson->id)}}">Quay Lại</a>
          </li>
          @else
          <li class="page-item ">
            <a class="rounded-full bg-indigo-600 text-gray-50  px-3 py-2 hover:no-underline hover:bg-indigo-700 hover:text-gray-50 " href="{{ $lessonspag->previousPageUrl() }}" rel="prev">Bài Học Trước</a>
          </li>
          @endif

          {{-- Next Page Link --}}
          @if ($lessonspag->hasMorePages())
          <li class="page-item">
            <a class="rounded-full bg-indigo-600 text-gray-50  px-3 py-2 hover:no-underline hover:bg-indigo-700 hover:text-gray-50" href="{{ $lessonspag->nextPageUrl() }}" rel="next">Tiếp Tục</a>
          </li>
          @else
          <li class="page-item disabled" aria-disabled="true">
            <a href="{{route('site.get-question',$lesson->id)}}" class="rounded-full bg-purple-600 text-gray-50  px-3 py-2 hover:no-underline hover:bg-purple-700 hover:text-gray-50">Làm Kiểm tra</a>
          </li>
          @endif
        </ul>
      </nav>
      @endif


    </div>
    </header>

  </div>

</body>

</html>