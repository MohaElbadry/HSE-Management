@extends('utilisateurs.layout')

@section('content')

<div class="flex items-center ">
   <h1 class="w-full font-extrabold text-3xl text-gray-900 p-3  pl-10 bg-white ">Show Page</h1>
   <div class="p-4   bg-white ">
      <button type='button' class='flex break-inside  rounded-3xl px-8  bg-white dark:bg-slate-800 dark:text-white'>
         <div class='flex items-center justify-between flex-1'>
            <a class='text-lg font-medium text-white' href="/utilisateurs">Back</a>
            <svg width='17' height='17' viewBox='0 0 17 17' fill='none' xmlns='http://www.w3.org/2000/svg'>
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
   <div class="max-w-md py-4 h-1/3 w-fit px-8 bg-cyan-300 shadow-lg rounded-lg my-20">

      <div>
         <h2 class="text-gray-900 text-3xl font-semibold">Name : {{ $utilisateur->name }}</h2>
         <p class="mt-2 text-gray-600 text-xl ">description : {{ $utilisateur->email }}
         </p>
      </div>
      <div>
         <p class="mt-2 text-gray-600 text-xl ">ROLE : {{ $utilisateur->role }}
         </p>
      </div>
      <div class="flex justify-end mt-6">
         <a href="#" class="text-xl font-medium text-indigo-500">{{ $utilisateur->created_at }}</a>
      </div>
   </div>
</div>


<div class="row">
   <div class="col align-self-start">
      <a class="btn btn-primary" href="{{route('utilisateurs.index')}}">All products</a>
   </div>

</div>




@endsection