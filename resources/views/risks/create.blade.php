<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
</head>

<body>
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
            <div
                class="flex h-full  pt-3 items-center justify-center bg-white text-center text-5xl font-bold shadow-md">
                <!-- component -->
                <!-- component -->
                @csrf
                <form class="mt-8 space-y-6 bg-gray-200 p-4 rounded-xl border-black"
                    action="{{ route('risks.store') }}" method="POST">
                    @csrf
                    <div>
                        <button type='button'
                            class='flex  break-inside  rounded-3xl px-8  bg-white dark:bg-slate-800 dark:text-white'>
                            <div class='flex items-center justify-between flex-1'>
                                <a class='text-lg font-medium text-white' href="/risks">Back</a>

                            </div>
                        </button>
                    </div>
                    <input type="hidden" name="remember" value="true">
                    <div class="relative">
                        <h3>Create</h3>

                        <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">Libellet</label>
                        <input
                            class=" w-full text-base px-4 py-2 border-b border-gray-300 focus:outline-none rounded-2xl focus:border-indigo-500"
                            name="lib" placeholder="Libellet">
                    </div>
                    <div class="mt-8 content-center">
                        <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">
                            description
                        </label>
                        <input
                            class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500"
                            name="description" placeholder="Enter The Description">
                    </div>
                    <div class="mt-8 content-center">
                        <p class="ml-3 text-sm font-bold text-gray-700 tracking-wide">
                            PROJET
                        </p>
                        <select class="form-select text-base px-4 py-2 border-b rounded-2xl" name="projet_id">
                            @foreach ($projets as $projet)
                                <option value="{{ $projet->id }}">{{ $projet->name }}</option>
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

        </main>
    </div>

</body>

</html>
