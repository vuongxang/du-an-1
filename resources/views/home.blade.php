@extends('layouts.app')

@section('content')
<div class="bg-blue-800">
    <div class="container mx-auto bg-blue-800  px-8 py-4">
      <div class="grid grid-cols-2 mx-16 ">
        <div class="p-4 flex justify-center">
          <img src="./images/owl-png-transparent-images-png-only-2.png" alt="" width="200px">
        </div>
        <div class="p-4 flex flex-col items-center justify-center">
          <p class="text-white text-3xl font-bold font-sans">Learn English Free </p>
          <div class="grid grid-cols-2 my-4">
            <button class="mx-4 border rounded px-4 py-2 text-blue-800 bg-white font-bold">Start Now</button>
            <button class="mx-4 border rounded px-4 py-2 text-blue-800 bg-white font-bold">Login</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="">
    <div class="container mx-auto grid grid-cols-2 gap-4">
      <div class="">
        <div class="grid grid-cols-2 gap-1 p-4">
          <img src="./images/photo-1531537571171-a707bf2683da.jpg" width="200px" alt="">
          <div class="">
            <h3 class="text-lg font-bold">Tiếng Anh Đỉnh Cao Mãi Mãi</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus quis ... </p>
            <button class=" border rounded px-4 py-1 text-white bg-blue-800 font-bold">More</button>
          </div>
        </div>
        <div class="grid grid-cols-2 gap-1 p-4">
          <img src="./images/photo-1531537571171-a707bf2683da.jpg" width="200px" alt="">
          <div class="">
            <h3 class="text-lg font-bold">Tiếng Anh Đỉnh Cao Mãi Mãi</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus quis ... </p>
            <button class=" border rounded px-4 py-1 text-white bg-blue-800 font-bold">More</button>
          </div>
        </div>
        <div class="grid grid-cols-2 gap-1 p-4">
          <img src="./images/photo-1531537571171-a707bf2683da.jpg" width="200px" alt="">
          <div class="">
            <h3 class="text-lg font-bold">Tiếng Anh Đỉnh Cao Mãi Mãi</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus quis ... </p>
            <button class=" border rounded px-4 py-1 text-white bg-blue-800 font-bold">More</button>
          </div>
        </div>
      </div>
      <div class="">
        <div class="p-4  flex justify-center">
          <div class="border rounded p-4  bg-blue-800 shadow-md">
            <h3 class="text-white text-center font-bold text-xl">Register Now</h3>
            <form class=" px-16 pt-6 pb-8 mb-2">
              <div class="mb-4">
                <label class="block text-white text-sm font-bold mb-2" for="username">
                  Username
                </label>
                <input
                  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  id="username" type="text" placeholder="Username">
              </div>
              <div class="mb-4">
                <label class="block text-white text-sm font-bold mb-2" for="username">
                  Email
                </label>
                <input
                  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  id="username" type="text" placeholder="Username">
              </div>
              <div class="mb-4">
                <label class="block text-white text-sm font-bold mb-2" for="username">
                  Password
                </label>
                <input
                  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  id="username" type="password" placeholder="******************">
              </div>
              <div class="mb-6">
                <label class="block text-white text-sm font-bold mb-2" for="password">
                  Confirm Password
                </label>
                <input
                  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                  id="password" type="password" placeholder="******************">
              </div>
              <div class="flex items-center justify-between">
                <button
                  class="bg-white  text-blue-800 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                  type="button">
                  Register Now
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
