@extends('layouts.app')

@section('content')

<div class="container mx-auto my-3">
  <nav class="bg-grey-light py-3 rounded font-sans w-full ">
    <ol class="list-reset flex text-grey-dark">
      <li><a href="{{route('home')}}" class="text-blue font-bold">Trang Chủ</a></li>
      <li><span class="mx-2">/</span></li>
      <li><a href="#" class="text-blue font-bold">user</a></li>
    </ol>
  </nav>
  <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3 border rounded">
                <div>
                    <p>Name: {{$user->name}}</p>
                    <p>email: {{$user->email}}</p>
                    <p>phone: {{$user->phone_number}}</p>
                    <p>avatar:
                      <img src="{{$user->avatar}}" alt="" width="100" class="">
                    </p>

                </div>
            </div>
        </div>
  </div>
  @endsection