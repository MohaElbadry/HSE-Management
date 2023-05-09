@extends('sites.layout')

@section('content')



<div class="flex h-full w-full  pt-3 justify-center bg-white text-center text-5xl font-bold shadow-md">
  <!-- component -->
  <!-- component -->
  <div class="max-w-md py-4 h-1/3 w-2/3 px-8 bg-cyan-200 shadow-lg rounded-lg my-20">

    <div>
      <h2 class="text-gray-900 text-3xl font-semibold">Name : {{ $site->lib }}</h2>
      <p class="mt-2 text-gray-600 text-xl ">description : {{ $site->description }}
      </p>
    </div>
    <div class="flex justify-end mt-6">
      <a href="#" class="text-xl font-medium text-indigo-500">{{ $site->created_at }}</a>
    </div>
  </div>
</div>




@endsection