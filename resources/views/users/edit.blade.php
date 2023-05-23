@extends('users.layout')

@section('content')

<div class="flex h-full  pt-3 justify-center bg-white text-center text-5xl font-bold shadow-md">
    <!-- component -->
    <!-- component -->

    <form class="mt-8 w-fit h-fit space-y-6 bg-gray-100 p-4 border-gray-200 shadow-xl  rounded-xl "
        action="{{ route('users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <button type='button'
                class='flex  break-inside  rounded-3xl px-8  bg-white dark:bg-slate-800 dark:text-white'>
                <div class='flex items-center justify-between flex-1'>
                    <a class='text-lg font-medium text-white' href="/sites">Back</a>

                </div>
            </button>
        </div>
        <h3>Edit</h3>
        <input type="hidden" name="remember" value="true">
        <div class="relative">

            <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">Name</label>
            <input
                class=" w-full text-base px-4 py-2 border-b border-gray-300 focus:outline-none rounded-2xl focus:border-indigo-500"
                name="name" placeholder="Libellet" value="{{ $user->name }}">
        </div>
        <div class="mt-8 content-center">
            <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">
                description
            </label>
            <input
                class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500"
                name="email" type="email" placeholder="Enter The Description" value="{{ $user->email }}">
        </div>
        <div class="mt-8 content-center">
            <label class="ml-3 text-sm block font-bold text-gray-700 tracking-wide">
                Role
            </label>
            <select class="form-select text-base px-4 py-2 border-b rounded-2xl" name="role">
                <option value="U" {{ $user->role == 'U' ? 'selected' : '' }}>User</option>
                <option value="A" {{ $user->role == 'A' ? 'selected' : '' }}>Admin</option>

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