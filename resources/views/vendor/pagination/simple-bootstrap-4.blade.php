@if ($paginator->hasPages())
    <nav style="width:768px">
        <ul class="pagination flex justify-between">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item  " aria-disabled="true">
                    <a class="rounded-full bg-purple-600 text-gray-50  px-3 py-2 hover:no-underline hover:bg-purple-700 hover:text-gray-50" href="{{route('site.topic')}}">Quay Lại</a>
                </li>
            @else
                <li class="page-item ">
                    <a class="rounded-full bg-indigo-600 text-gray-50  px-3 py-2 hover:no-underline hover:bg-indigo-700 hover:text-gray-50 " href="{{ $paginator->previousPageUrl() }}" rel="prev">Bài Học Trước</a>
                </li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="rounded-full bg-indigo-600 text-gray-50  px-3 py-2 hover:no-underline hover:bg-indigo-700 hover:text-gray-50" href="{{ $paginator->nextPageUrl() }}" rel="next">Tiếp Tục</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true">
                    <span class="rounded-full bg-purple-600 text-gray-50  px-3 py-2 hover:no-underline hover:bg-purple-700 hover:text-gray-50">Làm Kiểm tra</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
