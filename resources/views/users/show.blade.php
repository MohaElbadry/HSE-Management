@extends('users.layout')

@section('content')
@endsection
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <style>
        .card {
            width: 50%;
            height: 40%;
            margin: 0 auto;
            background-color: #011522;
            border-radius: 8px;
            z-index: 1;
        }

        .tools {
            display: flex;
            align-items: center;
            padding: 9px;
        }

        .circle {
            padding: 0 4px;
        }

        .box {
            display: inline-block;
            align-items: center;
            width: 10px;
            height: 10px;
            padding: 1px;
            border-radius: 50%;
        }

        .red {
            background-color: #ff605c;
        }

        .yellow {
            background-color: #ffbd44;
        }

        .green {
            background-color: #00ca4e;
        }
    </style>
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
            <div class="flex items-center ">
                <h1 class="w-full font-extrabold text-3xl text-gray-900 p-3  pl-10 bg-white ">Show Page</h1>
                <div class="p-4   bg-white ">
                    <button type='button'
                        class='flex break-inside  rounded-3xl px-8  bg-white dark:bg-slate-800 dark:text-white'>
                        <div class='flex items-center justify-between flex-1'>
                            <a class='text-lg font-medium text-white' href="/users">Back</a>
                            <svg width='17' height='17' viewBox='0 0 17 17' fill='none'
                                xmlns='http://www.w3.org/2000/svg'>
                                <path fillRule='evenodd' clipRule='evenodd'
                                    d='M0 8.71423C0 8.47852 0.094421 8.25246 0.262491 8.08578C0.430562 7.91911 0.658514 7.82547 0.896201 7.82547H13.9388L8.29808 2.23337C8.12979 2.06648 8.03525 1.84013 8.03525 1.60412C8.03525 1.36811 8.12979 1.14176 8.29808 0.974875C8.46636 0.807989 8.6946 0.714233 8.93259 0.714233C9.17057 0.714233 9.39882 0.807989 9.5671 0.974875L16.7367 8.08499C16.8202 8.16755 16.8864 8.26562 16.9316 8.3736C16.9767 8.48158 17 8.59733 17 8.71423C17 8.83114 16.9767 8.94689 16.9316 9.05487C16.8864 9.16284 16.8202 9.26092 16.7367 9.34348L9.5671 16.4536C9.39882 16.6205 9.17057 16.7142 8.93259 16.7142C8.6946 16.7142 8.46636 16.6205 8.29808 16.4536C8.12979 16.2867 8.03525 16.0604 8.03525 15.8243C8.03525 15.5883 8.12979 15.362 8.29808 15.1951L13.9388 9.603H0.896201C0.658514 9.603 0.430562 9.50936 0.262491 9.34268C0.094421 9.17601 0 8.94995 0 8.71423Z'
                                    fill='white' />
                            </svg>
                        </div>
                </div>
                </button>
            </div>
            <div class="flex h-full  pt-3 justify-center bg-white text-center text-5xl font-bold shadow-md">
                <!-- component -->
                <!-- component -->
                <div class="card">
                    <div class="tools">
                        <div class="circle">
                            <span class="red box"></span>
                        </div>
                        <div class="circle">
                            <span class="yellow box"></span>
                        </div>
                        <div class="circle">
                            <span class="green box"></span>
                        </div>
                    </div>
                    <div class="card__content">
                        <h2 class="text-white text-3xl font-semibold mb-2">Name : {{ $user->name }}</h2>
                        <p class="mt-2 text-gray-100 text-xl ">description : {{ $user->email }}
                        <p class="mt-2 text-gray-100 text-xl ">Role : {{ $user->role }}
                        <p class="mt-2 text-gray-100 text-xl ">Join At : {{ $user->created_at }}
                        </p>
                    </div>
                </div>

            </div>


        </main>
    </div>

</body>

</html>
