@extends('sites.layout')

@section('content')

<div class="flex h-full  pt-3 w-full justify-center bg-white text-center text-5xl font-bold shadow-md">
    <!-- component -->
    @csrf
    <form class=" self-center space-y-6 w-1/3 h-fit bg-gray-200 p-4 rounded-xl border-black"
        action="{{ route('users_lists.store') }}" method="POST">
        @csrf
        <div>
            <button type='button'
                class='flex  break-inside  rounded-3xl px-8  bg-white dark:bg-slate-800 dark:text-white'>
                <div class='flex items-center justify-between flex-1'>
                    <a class='text-lg font-medium text-white' href="/sites">Back</a>

                </div>
            </button>
        </div>
        <h3>Create</h3>
        <input type="hidden" name="remember" value="true">
        <div class="mt-8 content-center">
            <p class="ml-3 text-sm font-bold text-gray-700 tracking-wide">
                PROJET
            </p>
            <select class="form-select text-base px-4 py-2 border-b rounded-2xl" name="user_id">
                @foreach ($users as $user)
                @if ($user->role !== 'A')
                <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="mt-8 content-center">
            <p class="ml-3 text-sm font-bold text-gray-700 tracking-wide">
                PROJET
            </p>
            <select class="form-select text-base px-4 py-2 border-b rounded-2xl" name="task_id">
                @foreach ($tasks as $task)
                <option value="{{ $task->id }}" @if ($task->id == request('task_id'))  selected @endif>
                    {{ $task->lib }}
                </option>
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