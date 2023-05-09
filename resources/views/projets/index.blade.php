@extends('projets.layout')


@section('content')

<div class="flex h-full bg-viollet-300  pt-3 justify-center bg-white text-center text-5xl font-bold shadow-md">
    <div class="bg-white px-8 rounded-md w-full">
        <div class=" flex items-center justify-between pb-6">
            <div>
                <h2 class="text-gray-600 font-semibold">Projets </h2>
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
                <div class="flex justify-center align-middle">
                    <a class="mr-4" href="/projets/create">
                        <img class="shadow-white w-8 h-8 mt-5" src=" {{ asset('/icons/plus.png') }} " alt="ADD">
                    </a>
                    <a class="mr-4" href="projets-pdf" onclick="openPDF(); return false;">
                        <button type="button"
                            class="inline-block rounded-full bg-yellow-400 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-neutral-800 shadow-[0_4px_9px_-4px_#cbcbcb] transition duration-150 ease-in-out hover:bg-neutral-100 hover:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:bg-neutral-100 focus:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:outline-none focus:ring-0 active:bg-neutral-200 active:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(251,251,251,0.3)] dark:hover:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:focus:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)]">
                            Projet List
                        </button>
                    </a>
                    <a href="pdf_Globale" onclick="openPDF2(); return false;">
                        <button type="button"
                            class="inline-block rounded-full bg-yellow-400 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-neutral-800 shadow-[0_4px_9px_-4px_#cbcbcb] transition duration-150 ease-in-out hover:bg-neutral-100 hover:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:bg-neutral-100 focus:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:outline-none focus:ring-0 active:bg-neutral-200 active:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(251,251,251,0.3)] dark:hover:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:focus:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)]">
                            Global Report
                        </button>
                    </a>
                </div>
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
                                    Name
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    deascription
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    user_ID
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Site_id
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Projet start at
                                </th>

                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    ACTIONS
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- list des ....!-->
                            @foreach ($projets as $item)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $item->name }}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 text-start whitespace-no-wrap">
                                        {{ $item->description }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200  bg-white text-sm">
                                    <p class="text-gray-900 text-start">
                                        {{ $item->user_id }}

                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200  bg-white text-sm">
                                    <p class="text-gray-900 text-start">
                                        {{ $item->site_id }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200  bg-white text-sm">
                                    <p class="text-gray-900 text-start">
                                        {{ $item->proj_start }}
                                    </p>
                                </td>

                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <span class="relative  px-3 py-1 flex font-semibold text-green-900 leading-tight">
                                        <a class="relative" href="{{ route('projets.show', $item->id) }}">
                                            <img class="shadow-white w-8 h-8" src=" {{ asset('/icons/oeil2.png') }} "
                                                alt="trach">
                                        </a>
                                        <a class="relative" href="{{ route('projets.edit', $item->id) }}">
                                            <img class="shadow-white w-8 h-8" src=" {{ asset('/icons/editer.png') }} "
                                                alt="EDITe">
                                        </a>
                                        <form action="{{ route('projets.destroy', $item->id) }}" method="post">
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


<script type="text/javascript">
    // JavaScript code
            function openPDF() {
                var url = 'projets-pdf'; // Replace with the actual URL of your PDF template
                window.open(url, 'pdfWindow', 'width=200,height=200');
            }
            // JavaScript code
            function openPDF2() {
                var url = 'pdf_Globale'; // Replace with the actual URL of your PDF template
                window.open(url, 'pdfWindow', 'width=200,height=200');
            }
</script>

@endsection