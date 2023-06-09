@extends('projets.layout')


@section('content')

<div class="flex h-full bg-viollet-300  pt-3 justify-center bg-white text-center text-5xl font-bold shadow-md">
    <div class="bg-white px-8 rounded-md w-full">
        <div class=" flex items-center justify-between pb-6">
            <div>
                <h2 class="text-gray-600 font-semibold">Documents </h2>
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
                <a class="" href="/documents/create">
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
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>

                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Libellet
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    deascription
                                </th>
                                {{-- //TODO:here a small preiew of the pdf --}}
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Dawnload
                                </th>

                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    ACTIONS
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- list des ....!-->
                            @foreach ($documents as $item)
                            
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $item->titre }}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 text-start whitespace-no-wrap">
                                        {{ $item->description }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b  border-gray-200 bg-white text-sm">
                                    <a class="relative" href="{{ route('documents.show', $item) }}">
                                        <img class="shadow-white   w-8 h-8" src=" {{ asset('/icons/download.png') }} "
                                            alt="trach">
                                    </a>
                                </td>



                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <span class="relative  px-3 py-1 flex font-semibold text-green-900 leading-tight">

                                        <a class="relative" href="{{ route('documents.edit', $item->id) }}">
                                            <img class="shadow-white w-8 h-8" src=" {{ asset('/icons/editer.png') }} "
                                                alt="EDITe">
                                        </a>
                                        <form action="{{ route('documents.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="relative" type="submit">
                                                <img class="shadow-white w-8 h-8"
                                                    src=" {{ asset('/icons/poubelle.png') }} " alt="EDITe">
                                            </button>
                                        </form>
                                    </span>
                                </td>
                            </tr>
                            @endforeach

                            <!--  FIN de list des ....!-->

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection