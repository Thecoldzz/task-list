<!DOCTYPE html>
<html>
    <head>
        <title>Laravel 11 Task List APP</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="//unpkg.com/alpinejs" defer></script>

        <style type="text/tailwindcss">
        /* {{-- blade-formatter-disable --}}  */
        .btn {
            @apply rounded-md px-2 py-1 text-center font-medium shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-400 text-slate-700
        }
        .link{
            @apply font-medium text-gray-700 underline decoration-pink-500
        }
        label{
            @apply block uppercase text-slate-700 mb-2
        }
        input,textarea{
            @apply shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none
        }
        .error{
            @apply text-red-500 text-sm
        }
        /* body{
            background-image: url(C:\Users\pedrosa\task-list\resources\views\layouts\minha-peitudinha.png)
        } */
        </style>
         {{-- blade-formatter-enable --}}
        @yield('styles')
        <link href="/css/main.css" rel="stylesheet">
    </head>
<body class="container mx-auto mt-10 mb-10 max-w-lg">
    <h1 class="mb-4 text-2xl">@yield('title')</h1>
    <div x-data="{ flash: true }">
    <div>
        @if(session()->has('success'))
        <div x-show="flash"
        class="relative mb-10 rounded border-green-400 bg-green-200 px-4 py-3 text-green-700 text-lg"
        role="alert">
            <strong class="font-bold">Sucess!</strong>
            <div>{{session('success')}}</div>

            <span class="absolute top-0 right-1 px-4 py-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke-width="1.5" @click="flash = false"
                  stroke="currentColor" class="h-6 w-6 cursor-pointer">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </span>
        </div>
        @endif
        @yield('content')
    </div>
</body>

</html>
