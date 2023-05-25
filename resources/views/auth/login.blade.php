<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
</head>
<!-- component -->

<body
    class="font-mono  justify-center bg-gray-50antialiased text-gray-600 min-h-full flex flex-col [overflow-anchor:none]"
    scroll-region>
    <header class="relative z-50 w-full flex-none text-sm font-semibold leading-6 text-slate-900">
        <nav aria-label="Global" class="mx-auto max-w-container px-4 sm:px-6 lg:px-8">
            <div class="relative flex items-center py-[2.125rem]">
                <a class="mr-auto flex-none text-slate-900" href="/">
                    <img src=" {{ asset('11.png') }} " class="w-54 h-10" alt="" />
                </a>

                <div class="hidden lg:ml-8 lg:flex lg:items-center lg:border-l lg:border-slate-900/15 lg:pl-8">


                    <a class="inline-flex justify-center rounded-lg text-sm font-semibold py-2.5 px-4 bg-slate-900 text-white hover:bg-slate-700 -my-2.5 ml-8"
                        href="/register">
                        <span>Register <span aria-hidden="true">→</span>
                        </span>
                    </a>

                </div>
            </div>
        </nav>
    </header>
    <!-- Container -->
    <div class="container  mx-auto">
        <div class="flex justify-center px-6 my-12">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                <!-- Col -->
                <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                    style="background-image:url('{{ asset('nate-johnston-nak9xdVuHAg-unsplash.jpg') }}') "></div>
                <!-- Col -->
                <div class="w-full lg:w-7/12 bg-gray-50 p-5  shadow-xl   rounded-lg lg:rounded-l-none">
                    <h3 class="pt-4 text-2xl text-center">Login to an Account!</h3>
                    <form method="POST" class="px-8 pt-6 pb-8 mb-4 bg-gray-50 rounded" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                Email
                            </label>
                            <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                name="email" value="{{ old('email') }}" required placeholder="Email"
                                autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-4 ">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                    Password
                                </label>
                                <input id="password" type="password"
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border border-red-200 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    name="password" required autocomplete="new-password"
                                    placeholder="******************">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>
                        <div class="mb-6 text-center">
                            <button
                                class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                                type="submit">
                                {{ __('Login') }}
                            </button>
                        </div>
                        <hr class="mb-6 border-t" />

                        <div class="text-center">
                            <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                href="/register">
                                I don't have an account!
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>