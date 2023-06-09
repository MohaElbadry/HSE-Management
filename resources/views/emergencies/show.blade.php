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
      class="sidebar w-48 -translate-x-full transform bg-[#1B2223] p-4 transition-transform duration-150 ease-in md:translate-x-0 md:shadow-md">
      <div class="my-4">
        <!-- Left side NavBar -->

        <div>
          <!-- App Logo -->

          <img class="shadow-white  bg" src=" {{ asset('1.png') }} " alt="">

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
          <li class="mt-3 p-2 hover:text-blue-600 rounded-lg">
            <a class=" flex flex-col items-center" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
              <button type="button"
                class=" rounded-full  bg-yellow-400 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-neutral-800 shadow-[0_4px_9px_-4px_#cbcbcb] transition duration-150 ease-in-out hover:bg-neutral-100 hover:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:bg-neutral-100 focus:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:outline-none focus:ring-0 active:bg-neutral-200 active:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(251,251,251,0.3)] dark:hover:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:focus:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)]">
                {{ __('Logout') }}
              </button>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </li>
        </ul>
      </div>
    </aside>
		<main class="main -ml-48 flex flex-grow flex-col p-4 transition-all duration-150 ease-in md:ml-0">
			<div class="flex items-center ">
				<h1 class="w-full font-extrabold text-3xl text-gray-900 p-3  pl-10 bg-white ">Show Page</h1>
				<div class="p-4   bg-white ">
					<button type='button'
						class='flex break-inside  rounded-3xl px-8  bg-white dark:bg-slate-800 dark:text-white'>
						<div class='flex items-center justify-between flex-1'>
							<a class='text-lg font-medium text-white' href="/emergencies">Back</a>
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
						<h2 class="text-gray-400 text-3xl font-semibold mb-2">Name : {{ $emergencie->lib }}</h2>
						<p class="mt-2 text-white text-xl text-start p-3"> {{ $emergencie->description }}
						<p class="mt-2 text-gray-300 text-xl text-end p-3"> {{ $emergencie->created_at }}
						</p>
					</div>
				</div>
			</div>
		</main>
	</div>

</body>

</html>