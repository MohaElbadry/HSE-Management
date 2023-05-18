@extends('projets.layout')

@section('content')
<div class="flex items-center ">
    <h1 class="w-full font-extrabold text-3xl text-gray-900 p-3  pl-10 bg-white ">Edit Page</h1>
    <div class="p-4   bg-white ">
        <button type='button' class='flex break-inside  rounded-3xl px-8  bg-white dark:bg-slate-800 dark:text-white'>
            <div class='flex items-center justify-between flex-1'>
                <a class='text-lg font-medium text-white' href="/projets">Back</a>
                <svg width='17' height='17' viewBox='0 0 17 17' fill='none' xmlns='http://www.w3.org/2000/svg'>
                    <path fillRule='evenodd' clipRule='evenodd'
                        d='M0 8.71423C0 8.47852 0.094421 8.25246 0.262491 8.08578C0.430562 7.91911 0.658514 7.82547 0.896201 7.82547H13.9388L8.29808 2.23337C8.12979 2.06648 8.03525 1.84013 8.03525 1.60412C8.03525 1.36811 8.12979 1.14176 8.29808 0.974875C8.46636 0.807989 8.6946 0.714233 8.93259 0.714233C9.17057 0.714233 9.39882 0.807989 9.5671 0.974875L16.7367 8.08499C16.8202 8.16755 16.8864 8.26562 16.9316 8.3736C16.9767 8.48158 17 8.59733 17 8.71423C17 8.83114 16.9767 8.94689 16.9316 9.05487C16.8864 9.16284 16.8202 9.26092 16.7367 9.34348L9.5671 16.4536C9.39882 16.6205 9.17057 16.7142 8.93259 16.7142C8.6946 16.7142 8.46636 16.6205 8.29808 16.4536C8.12979 16.2867 8.03525 16.0604 8.03525 15.8243C8.03525 15.5883 8.12979 15.362 8.29808 15.1951L13.9388 9.603H0.896201C0.658514 9.603 0.430562 9.50936 0.262491 9.34268C0.094421 9.17601 0 8.94995 0 8.71423Z'
                        fill='white' />
                </svg>
            </div>
    </div>
    </button>
</div>
<div class="flex h-full  pt-3 items-center justify-center bg-white text-center text-5xl font-bold shadow-md">
    <!-- component -->
    <!-- component -->

    <form class="mt-8 space-y-6 bg-gray-100 p-4 border-gray-200 shadow-xl  rounded-xl "
        action="{{ route('projets.update', $projet->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="hidden" name="remember" value="true">
        <div class="relative">

            <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">NAME</label>
            <input
                class=" w-full text-base px-4 py-2 border-b border-gray-300 focus:outline-none rounded-2xl focus:border-indigo-500"
                name="name" placeholder="Libellet" value="{{ $projet->name }}">
        </div>
        <div class="mt-8 content-center">
            <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">
                description
            </label>
            <input
                class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500"
                name="description" placeholder="Enter The Description" value="{{ $projet->description }}">
        </div>
        <div class="mt-8 content-center">
            <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">
                proj_start
            </label>
            <input
                class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500"
                name="proj_start" type="date" placeholder="Enter The Description" value="{{ $projet->proj_start }}">
        </div>

        <div class="mt-8 content-center">
            {{-- ID_site --}}
            <p class="ml-3 text-sm font-bold text-gray-700 ">
                site
            </p>

            <select class="form-select text-base px-4 py-2 border-b rounded-2xl" name="site_id">
                @foreach ($sites as $site)
                <option value="{{ $site->id }}" {{ $site->id == $projet->user_id ? 'selected' : '' }}>
                    {{ $site->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex items-center justify-center">
            <button type="submit"
                class=" flex h-20 text-3xl self-center w-54 justify-center bg-gradient-to-r from-indigo-500 to-blue-600  hover:bg-gradient-to-l hover:from-blue-500 hover:to-indigo-600 text-gray-100 p-4  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">
                Edit
            </button>
        </div>

    </form>
</div>

@endsection