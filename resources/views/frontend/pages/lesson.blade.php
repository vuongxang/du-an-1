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
      {{ $lessonspag->links() }}
    </div>
    </header>

  </div>

</body>

</html>