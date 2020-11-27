@extends('layouts.app')

@section('content')
<div class="bg-blue-800">
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
</div>

<div class="container mx-auto grid grid-cols-5 my-4 gap-4">
  <div class="col-span-1">
    <div class=" border border-blue-800 rounded px-4 py-4">
      <ul class="list-none">
        <li class="border-b-2 border-gray-300 py-2"><a href="" class="text-blue-800 font-bold">Learn History</a></li>
        <li class="border-b-2 border-gray-300 py-2"><a href="" class="text-blue-800 font-bold">Lorem ipsum dolor</a></li>
        <li class="border-b-2 border-gray-300 py-2"><a href="" class="text-blue-800 font-bold">Lorem ipsum dolor</a></li>
        <li class="border-b-2 border-gray-300 py-2"><a href="" class="text-blue-800 font-bold">Lorem ipsum dolor</a></li>
        <li class="border-b-2 border-gray-300 py-2"><a href="" class="text-blue-800 font-bold">Lorem ipsum dolor</a></li>
      </ul>
    </div>
  </div>
  <div class="col-span-4">
    <div class=" border border-gray-400 rounded px-4 py-4">
      <ul class="list-none">
        @foreach ($topics as $item)
      <li class="border-b-2 border-gray-300 py-2 flex align-items-center"><img src="{{$item->image}}" alt="" width="50" class="rounded-full mr-3"><a href="{{route('site.lesson',$item->id)}}" class="text-blue-800">{{$item->name}} </a></li>
        @endforeach
        
      </ul>
    </div>
  </div>
</div>
@endsection
