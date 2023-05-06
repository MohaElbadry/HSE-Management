@extends('tasks.layout')


@section('content')

<div class="flex h-full bg-viollet-300  pt-3 justify-center bg-white text-center text-5xl font-bold shadow-md">
    <div class="bg-white px-8 rounded-md w-full">
        <div class=" flex items-center justify-between pb-6">
            <div>
                <h2 class="text-gray-600 font-semibold">Tasks </h2>
                @if ($message = Session::get('success'))
                <div class="max-w-lg mx-auto">
                    <div class="flex bg-blue-100 rounded-lg p-4 mb-4 text-sm text-blue-700" role="alert">
                        <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <span class="font-medium">Info alert!</span> {{ $message }}
                        </div>
                    </div>
                </div>
                @endif
                {{-- this is the icone Plus for creation --}}
                <a class="" href="/tasks/create">
                    <img class="shadow-white w-8 h-8 mt-5" src=" {{ asset('/icons/plus.png') }} " alt="ADD">
                </a>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center p-2 rounded-md">
                    <input class="outline-none ml-1 block " type="text" name="" id="" placeholder="">
                </div>
                <div class="lg:ml-40 ml-10 space-x-8">

                    <button
                        class=" px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer"></button>
                    <button
                        class=" px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer"></button>
                </div>
            </div>
        </div>
        <div>
            <table class="min-w-full leading-normal">
                <thead>
                    <tr>
                        <th
                            class="px-5 py-3 border-b-2 text-center border-gray-200 bg-gray-100 text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Tasks List
                        </th>
                    </tr>
                </thead>
            </table>


            {{-- list --}}
            <section class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
                {{-- item --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-2">
                    @foreach ($tasks as $item =>$i)
                    <div
                        class="w-full relative bg-gray-500 rounded-lg sahdow-lg overflow-hidden flex flex-col justify-center items-center">

                        <a class="text-center pt-3  pb-2" href="{{ route('tasks.show', $i->id) }}">
                            {{-- //TODO:show all the users in the list --}}
                            <p class="text-xl text-white font-bold mb-2">Task [{{ $item+1 }}] <br> {{ $i->lib }}</p>
                            <p class="text-lg text-gray-200  font-normal">{{ $i->description }}</p>
                            <p class="text-sm text-gray-300 font-normal p-1">{{ $i->task_start }}---->{{
                                $i->task_end }}
                            </p>
                        </a>
                        <span class="absolute bottom-1 left-2 p- scale-50 hover:scale-100"
                            class="text-gray-400 mr-3 inline-flex  lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 ">
                            <a href="{{ route('tasks.edit', $i->id) }}">
                                <img class="shadow-white w-8 h-8" src=" {{ asset('/icons/editer.png') }} " alt="trach">
                            </a>
                        </span>

                        <form class="absolute scale-50 hover:scale-125 hover:bg-red-400 bottom-0 right-1 p-1"
                            action="{{ route('tasks.destroy', $i->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                                <img class="shadow-white  w-7 h-7" src=" {{ asset('/icons/poubelle33.png') }} "
                                    alt="EDITe">
                            </button>
                        </form>
                    </div>

                    @endforeach
                </div>
        </div>
        </section>

        {{--
        --}}
    </div>
</div>
</div>



@endsection