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
            class="flex flex-col w-80 h-screen px-5 pt-3 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">
            <div>
                <!-- App Logo -->

                <img class="shadow-white  bg" src=" {{ asset('1.png') }} " alt="">


            </div>

            <div class="flex flex-col justify-between flex-1 mt-2">
                <nav class="-mx-3 space-y-6 ">
                    <div class="space-y-3 ">
                        <label class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400">content</label>

                        <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                            href="/sites">
                            <img class="shadow-white caret-white outline-white w-6 h-6"
                                src=" {{ asset('./icons/icons8-location-50 (1).png') }} " alt="">


                            <span class="mx-2 text-sm font-medium">Sites</span>
                        </a>

                        <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                            href="/projets">
                            <img class="shadow-white caret-white outline-white w-6 h-6"
                                src=" {{ asset('./icons/icons8-construction-50.png') }} " alt="">


                            <span class="mx-2 text-sm font-medium">Projets</span>
                        </a>


                        <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                            href="/users">
                            <img class="shadow-white caret-white outline-white w-6 h-6"
                                src=" {{ asset('./icons/icons8-users-50.png') }} " alt="">

                            <span class="mx-2 text-sm font-medium">USERS</span>
                        </a>

                        <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                            href="/documents">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>

                            <span class="mx-2 text-sm font-medium">DOCUMENTS</span>
                        </a>

                        <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                            href="/sensibilisations">
                            <img class="shadow-white caret-white outline-white w-6 h-6"
                                src=" {{ asset('./icons/icons8-info-50.png') }} " alt="">


                            <span class="mx-2 text-sm font-medium">SENSIBILISATIONS</span>
                        </a>


                        <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                            href="/tasks">
                            <img class="shadow-white caret-white outline-white w-6 h-6"
                                src=" {{ asset('./icons/icons8-task-50 (1).png') }} " alt="">
                            <span class="mx-2 text-sm font-medium">TASKS</span>
                        </a>

                        <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                            href="/users_lists">
                            <img class="shadow-white caret-white outline-white w-6 h-6"
                                src=" {{ asset('./icons/icons8-task-50.png') }} " alt="">
                            <span class="mx-2 text-sm font-medium">TASKS-USERS</span>
                        </a>
                        <div class="space-y-3 ">
                            <label class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400">Alerts</label>

                            <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                                href="/emergencies">
                                <img class="shadow-white caret-white outline-white w-6 h-6"
                                    src=" {{ asset('./icons/icons8-siren-50.png') }} " alt="">

                                <span class="mx-2 text-sm font-medium">EMERGENCIES</span>
                            </a>
                            <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                                href="/risks">
                                <img class="shadow-white caret-white outline-white w-6 h-6"
                                    src=" {{ asset('./icons/icons8-risk-50.png') }} " alt="">


                                <span class="mx-2 text-sm font-medium">RISKS</span>
                            </a>
                            <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                                href="/incidents">
                                <img class="shadow-white caret-white outline-white w-6 h-6"
                                    src=" {{ asset('./icons/icons8-electricity-hazard-64.png') }} " alt="">


                                <span class="mx-2 text-sm font-medium">INCIDENTS</span>
                            </a>

                            <a class=" mt-3 flex flex-col items-center" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                <button type="button"
                                    class=" rounded-full  bg-[#FCA311] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-neutral-800 shadow-[0_4px_9px_-4px_#cbcbcb] transition duration-150 ease-in-out hover:bg-neutral-100 hover:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:bg-neutral-100 focus:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:outline-none focus:ring-0 active:bg-neutral-200 active:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(251,251,251,0.3)] dark:hover:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:focus:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)]">
                                    {{ __('Logout') }}
                                </button>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                </nav>
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
                                    <div class="flex bg-blue-100 rounded-lg p-4 mb-4 text-sm text-blue-700"
                                        role="alert">
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
                                <input class="outline-none ml-1 block " type="text" name="" id=""
                                    placeholder="">
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


                                                        <a class="relative"
                                                            href="{{ route('risks.edit', $item->id) }}">
                                                            <img class="shadow-white w-8 h-8"
                                                                src=" {{ asset('/icons/editer.png') }} "
                                                                alt="EDITe">
                                                        </a>
                                                        <form action="{{ route('risks.destroy', $item->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="relative" type="submit">
                                                                <img class="shadow-white w-8 h-8"
                                                                    src=" {{ asset('/icons/poubelle.png') }} "
                                                                    alt="EDITe">
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
