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
                <a href="/tasks/create">
                    <button type="button"
                        class="inline-block rounded-full bg-yellow-400 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-neutral-800 shadow-[0_4px_9px_-4px_#cbcbcb] transition duration-150 ease-in-out hover:bg-neutral-100 hover:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:bg-neutral-100 focus:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:outline-none focus:ring-0 active:bg-neutral-200 active:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(251,251,251,0.3)] dark:hover:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:focus:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)]">
                        NEW TASK
                    </button>
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

                    <div class="card mb-3">
                        <a href="{{route('tasks.show',$i->id)}}">
                            <div class="img">
                                <div class="save">
                                    <svg class="svg" width="683" height="683" viewBox="0 0 683 683" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_993_25)">
                                            <mask id="mask0_993_25" style="mask-type:luminance"
                                                maskUnits="userSpaceOnUse" x="0" y="0" width="683" height="683">
                                                <path d="M0 -0.00012207H682.667V682.667H0V-0.00012207Z" fill="white">
                                                </path>
                                            </mask>
                                            <g mask="url(#mask0_993_25)">
                                                <path
                                                    d="M148.535 19.9999C137.179 19.9999 126.256 24.5092 118.223 32.5532C110.188 40.5866 105.689 51.4799 105.689 62.8439V633.382C105.689 649.556 118.757 662.667 134.931 662.667H135.039C143.715 662.667 151.961 659.218 158.067 653.09C186.451 624.728 270.212 540.966 304.809 506.434C314.449 496.741 327.623 491.289 341.335 491.289C355.045 491.289 368.22 496.741 377.859 506.434C412.563 541.074 496.752 625.242 524.816 653.348C530.813 659.314 538.845 662.667 547.308 662.667C563.697 662.667 576.979 649.395 576.979 633.019V62.8439C576.979 51.4799 572.48 40.5866 564.447 32.5532C556.412 24.5092 545.489 19.9999 534.133 19.9999H148.535Z"
                                                    stroke="#CED8DE" stroke-width="40" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_993_25">
                                                <rect width="682.667" height="682.667" fill="white"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>

                            <div class="text">
                                <p class=" text-xl">{{$i->lib}}</p>
                                <p class="p mt-1"> {{$i->description}}
                                    </br>
                                </p>
                                <p class="p text-gray-600">
                                    Show all User Affected to this Task
                                </p>

                                <div class="w-8 h-8">
                                    <form action="{{ route('tasks.destroy', $i->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="" type="submit">
                                            <img class="shadow-white mt-3 w-8 h-8"
                                                src=" {{ asset('/icons/poubelle.png') }} " alt="EDITe">
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </a>
                    </div>

                    @endforeach
                </div>
            </section>
        </div>

        {{--
        --}}
    </div>
</div>
</div>



@endsection