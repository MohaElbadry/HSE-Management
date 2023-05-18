<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <script type="text/javascript">
        // JavaScript code
            function openPDF() {
                var url = 'risks-pdf'; // Replace with the actual URL of your PDF template
                window.open(url, 'pdfWindow', 'width=200,height=200');
            }
    </script>
</head>

<body>


    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $item)
            <li>{{ $item }}</li>
            @endforeach

        </ul>
    </div>
    @endif

    <div class="flex min-h-screen flex-row bg-gray-100 text-gray-800">
        <aside
            class="sidebar w-48 -translate-x-full transform bg-[#1B2223] p-4 transition-transform duration-150 ease-in md:translate-x-0 md:shadow-md">
            <div class="my-4">
                <!-- Left side NavBar -->

                <div>
                    <!-- App Logo -->

                    <img class="shadow-white bg" src=" {{ asset('1.png') }} " alt="">

                </div>

                <ul class="mt-2 text-gray-700 dark:text-gray-400 capitalize">
                    <!-- Links -->

                    <li class="mt-3 p-2 text-blue-600 dark:text-blue-300 rounded-lg">
                        <a href="/sites" class=" flex flex-col items-center">
                            <svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
                                <path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9
                      							17v2H5v-2h4M21 3h-8v6h8V3M11 3H3v10h8V3m10
                      							8h-8v10h8V11m-10 4H3v6h8v-6z">
                                </path>
                            </svg>
                            <span class="text-xs mt-2">SITES</span>
                        </a>

                    </li>

                    <li class="mt-3 p-2 text-blue-600 dark:text-blue-300 rounded-lg">
                        <a href="/projets" class=" flex flex-col items-center">
                            <svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
                                <path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9
                      							17v2H5v-2h4M21 3h-8v6h8V3M11 3H3v10h8V3m10
                      							8h-8v10h8V11m-10 4H3v6h8v-6z">
                                </path>
                            </svg>
                            <span class="text-xs mt-2">PROJECTS</span>
                        </a>
                    </li>

                    <li class="mt-3 p-2 hover:text-blue-600 dark-hover:text-blue-300
                      				rounded-lg">
                        <a href="/users" class=" flex flex-col items-center">
                            <svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
                                <path d="M23 3v-.5a2.5 2.5 0 00-5 0V3c-.55 0-1 .45-1 1v4c0
                      							.55.45 1 1 1h5c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1m-1
                      							0h-3v-.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5V3M6
                      							11h9v2H6v-2m0-4h9v2H6V7m16 4v5c0 1.11-.89 2-2 2H6l-4
                      							4V4a2 2 0 012-2h11v2H4v13.17L5.17 16H20v-5h2z">
                                </path>
                            </svg>
                            <span class="text-xs mt-2">USERS</span>
                        </a>

                    </li>

                    <li class="mt-3 p-2 hover:text-blue-600 dark-hover:text-blue-300
                      				rounded-lg">
                        <a href="/documents" class=" flex flex-col items-center">
                            <svg class="fill-current h-5 w-5" viewBox="0 0 512 512">
                                <path d="M505 442.7L405.3
                      							343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7
                      							44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208
                      							208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7
                      							17l99.7 99.7c9.4 9.4 24.6 9.4 33.9
                      							0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7
                      							0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128
                      							57.2 128 128 0 70.7-57.2 128-128 128z">
                                </path>
                            </svg>
                            <span class="text-xs mt-2">DOCUMENTS</span>
                        </a>

                    </li>

                    <li class="mt-3 p-2 hover:text-blue-600 dark-hover:text-blue-300
                      				rounded-lg">
                        <a href="/sensibilisations" class=" flex flex-col items-center">
                            <svg class="fill-current h-5 w-5" viewBox="0 0 512 512">
                                <path d="M505 442.7L405.3
                      							343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7
                      							44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208
                      							208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7
                      							17l99.7 99.7c9.4 9.4 24.6 9.4 33.9
                      							0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7
                      							0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128
                      							57.2 128 128 0 70.7-57.2 128-128 128z">
                                </path>
                            </svg>
                            <span class="text-xs mt-2">SENSIBILISATIONS</span>
                        </a>

                    </li>

                    <li class="mt-3 p-2 hover:text-blue-600 dark-hover:text-blue-300
                      				rounded-lg">
                        <a href="/tasks" class=" flex flex-col items-center">
                            <svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
                                <path d="M19 19H5V8h14m0-5h-1V1h-2v2H8V1H6v2H5a2 2 0 00-2
                      							2v14a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0 00-2-2m-2.47
                      							8.06L15.47 10l-4.88 4.88-2.12-2.12-1.06 1.06L10.59
                      							17l5.94-5.94z">
                                </path>
                            </svg>
                            <span class="text-xs mt-2">TASKS</span>
                        </a>
                    </li>

                    <li class="mt-3 p-2 hover:text-blue-600 dark-hover:text-blue-300
                                				rounded-lg">
                        <a href="/users_lists" class=" flex flex-col items-center">
                            <svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
                                <path d="M19 19H5V8h14m0-5h-1V1h-2v2H8V1H6v2H5a2 2 0 00-2
                                							2v14a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0 00-2-2m-2.47
                                							8.06L15.47 10l-4.88 4.88-2.12-2.12-1.06 1.06L10.59
                                							17l5.94-5.94z">
                                </path>
                            </svg>
                            <span class="text-xs mt-2">TASKS-USERS</span>
                        </a>
                    </li>

                    <li class="mt-3 p-2 hover:text-blue-600 rounded-lg">
                        <a href="/emergencies" class=" flex flex-col items-center">
                            <svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
                                <path d="M17 10.5V7a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0
                      							001 1h12a1 1 0 001-1v-3.5l4 4v-11l-4 4z">
                                </path>
                            </svg>
                            <span class="text-xs mt-2">EMERGENCIES</span>
                        </a>
                    </li>

                    <li class="mt-3 p-2 hover:text-blue-600 rounded-lg">
                        <a href="/risks" class=" flex flex-col items-center">
                            <svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
                                <path d="M17 10.5V7a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0
                      							001 1h12a1 1 0 001-1v-3.5l4 4v-11l-4 4z">
                                </path>
                            </svg>
                            <span class="text-xs mt-2">RISKS</span>
                        </a>
                    </li>

                    <li class="mt-3 p-2 hover:text-blue-600 rounded-lg">
                        <a href="/incidents" class=" flex flex-col items-center">
                            <svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
                                <path d="M17 10.5V7a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0
                      							001 1h12a1 1 0 001-1v-3.5l4 4v-11l-4 4z">
                                </path>
                            </svg>
                            <span class="text-xs mt-2">INCIDENTS</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <main class="main -ml-48 flex flex-grow flex-col p-4 transition-all duration-150 ease-in md:ml-0">
            <div class="flex h-full  pt-3 justify-center bg-white text-center text-5xl font-bold shadow-md">
                <!-- component -->
                <div class="bg-white px-8 rounded-md w-full">
                    <div class=" flex items-center justify-between pb-6">
                        <div>
                            <h2 class="text-gray-600 font-semibold">Risks </h2>
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
                                <a class=" mr-4" href="/risks/create">
                                    <img class="shadow-white w-8 h-8 mt-5" src=" {{ asset('/icons/plus.png') }} "
                                        alt="ADD">
                                </a>
                                <a href="risks-pdf" onclick="openPDF(); return false;">
                                    <button type="button"
                                        class="inline-block rounded-full bg-yellow-400 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-neutral-800 shadow-[0_4px_9px_-4px_#cbcbcb] transition duration-150 ease-in-out hover:bg-neutral-100 hover:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:bg-neutral-100 focus:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:outline-none focus:ring-0 active:bg-neutral-200 active:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(251,251,251,0.3)] dark:hover:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:focus:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)]">
                                        PDF
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
                                                Description
                                            </th>
                                            <th
                                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                Created at
                                            </th>
                                            <th
                                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                PROJET_ID
                                            </th>
                                            <th
                                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                ACTIONS
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- list des ....!-->
                                        @foreach ($risks as $item)
                                        <tr>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <div class="flex items-center">
                                                    <div class="ml-3">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            {{ $item->lib }}
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
                                                    {{ $item->created_at }}

                                                </p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ $item->projet_id }}
                                                </p>
                                            </td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <span
                                                    class="relative  px-3 py-1 flex font-semibold text-green-900 leading-tight">


                                                    <a class="relative" href="{{ route('risks.edit', $item->id) }}">
                                                        <img class="shadow-white w-8 h-8"
                                                            src=" {{ asset('/icons/editer.png') }} " alt="EDITe">
                                                    </a>
                                                    <form action="{{ route('risks.destroy', $item->id) }}"
                                                        method="post">
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

        </main>
    </div>

</body>

</html>