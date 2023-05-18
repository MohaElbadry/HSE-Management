@extends('projets.layout')

@section('content')
<div class="flex h-full  pt-3 items-center justify-center bg-white text-center text-5xl font-bold shadow-md">
    <!-- component -->
    <!-- component -->
    @csrf
    <form class="mt-2 h-fit space-y-6 bg-gray-200 p-4 rounded-xl border-black" action="{{ route('projets.store') }}"
        method="POST">
        @csrf
        <div>
            <button type='button'
                class='flex  break-inside  rounded-3xl px-8  bg-white dark:bg-slate-800 dark:text-white'>
                <div class='flex items-center justify-between flex-1'>
                    <a class='text-lg font-medium text-white' href="/projets">Back</a>
                </div>
            </button>
        </div>
        <h5>Create</h5>
        <input type="hidden" name="remember" value="true">
        <div class="relative">

            <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">Name</label>
            <input
                class=" w-full text-base px-4 py-2 border-b border-gray-300 focus:outline-none rounded-2xl focus:border-indigo-500"
                name="name" placeholder="Libellet">
        </div>
        <div class="mt-2 content-center">
            <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">
                Description
            </label>
            <input
                class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500"
                name="description" placeholder="Enter The Description" type="text">
        </div>
        <div class="mt-2 content-center">
            <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">
                Projet start
            </label>
            <input
                class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500"
                name="proj_start" placeholder="Enter Une sate" type="date">
        </div>

        <div class="mt-2 content-center">
            <p class="ml-3 text-sm font-bold text-gray-700 tracking-wide">
                Sites
            </p>
            <select class="form-select text-base px-4 py-2 border-b rounded-2xl" name="site_id">
                @foreach($sites as $site)
                <option value="{{ $site->id }}">{{ $site->name }}</option>
                @endforeach
            </select>

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