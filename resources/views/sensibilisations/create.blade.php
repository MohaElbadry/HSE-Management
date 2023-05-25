@extends('sensibilisations.layout')

@section('content')

<div class="flex h-fit  pt-3  justify-center bg-white text-center text-5xl font-bold shadow-md">
    <!-- component -->
    <!-- component -->
    @csrf
    <form class="mt-8 space-y-6 bg-gray-200 p-4 rounded-xl border-black" action="{{ route('sensibilisations.store') }}"
        method="POST">
        @csrf
        
        <h3>Create</h3>
        <input type="hidden" name="remember" value="true">
        <div class="relative">

            <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">Libellet</label>
            <input
                class=" w-full text-base px-4 py-2 border-b border-gray-300 focus:outline-none rounded-2xl focus:border-indigo-500"
                name="titre" placeholder="Libellet">
        </div>
        <div class="mt-8 content-center">
            <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">
                description
            </label>
            <input
                class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500"
                name="description" placeholder="Enter The Description">
        </div>

        <div class="flex items-center justify-center">
            <button type="submit"
                class=" flex h-20 text-3xl self-center w-54 justify-center bg-gradient-to-r from-indigo-500 to-blue-600  hover:bg-gradient-to-l hover:from-blue-500 hover:to-indigo-600 text-gray-100 p-4  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">
                Create
            </button>
        </div>

    </form>
</div>

@endsection