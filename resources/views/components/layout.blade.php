<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="h-full">
    <nav class="bg-neutral shadow-lg">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex-shrink-0">
                    <a href="/" class="block transform transition-all duration-500 hover:scale-110">
                        <img class="h-12 w-10" src="https://cdn-icons-png.flaticon.com/512/187/187878.png" alt="">
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                            <x-nav-link href="/blog" :active="request()->is('blog')">Blog</x-nav-link>
                            <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                            <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                        </div>
                    </div>
                </div>

                @auth
                <div class="dropdown dropdown-hover hidden md:block relative items-center">
                    <!-- Profile Picture -->
                    <div tabindex="0" role="button" class="m-5 cursor-pointer flex items-center gap-3">
                        <img src="https://avatars.githubusercontent.com/u/133311789?v=4" 
                             class="w-10 h-10 rounded-full shadow-md ring-2 ring-offset-base-100 ring-offset-2 
                             hover:shadow-sky-500 transition duration-300 ease-in-out transform hover:scale-105" 
                             alt="User Avatar">
                    </div>
                
                    <!-- Dropdown Menu -->
                    <ul tabindex="0" 
                        class="dropdown-content menu bg-base-100 rounded-lg z-10 w-56 p-3 shadow-lg absolute -right-5 
                               overflow-hidden transition-opacity duration-300 ease-in-out opacity-0 invisible hover:visible hover:opacity-100 
                               hover:overflow-visible">
                        <span class="text-green-600 bg-gray-950 rounded-md font-medium text-lg border border-neutral p-2 text-center">{{ auth()->user()->username }}</span>

                        <li class="px-2 py-2 border-b border-neutral overflow-hidden">
                            <a href="{{ route('dashboard') }}" class="flex items-center gap-2 text-sm font-medium text-white hover:text-sky-500">
                                <i class="fa-solid fa-home fa-lg"></i> Dashboard</a>
                        </li>
                
                        <li class="px-2 py-2 border-b border-neutral">
                            <a href="#" class="flex items-center gap-2 text-sm font-medium text-white hover:text-sky-500">
                                <i class="fa-solid fa-user fa-lg"></i> Profile
                            </a>
                        </li>
                
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <li class="px-2 py-2 rounded-md">
                                <button class="flex items-center gap-2 text-sm font-medium text-white hover:text-sky-500">
                                    <i class="fa-solid fa-right-to-bracket fa-lg"></i> Logout
                                </button>
                            </li>
                        </form>
                    </ul>
                </div>
                
                @endauth

                @guest
                    {{-- Login And Register --}}
                <div class="dropdown dropdown-hover hidden md:block">
                    <div tabindex="0" role="button" class="btn m-5">
                        <i class="fa-solid fa-user fa-xl"></i>
                    </div>
                    <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-90 p-2 shadow">
                        <li>
                            <a href="{{ route('login') }}">
                                <i class="fa-solid fa-right-to-bracket fa-xl"></i> Login
                            </a>
                        </li>
                        <li><a href="{{ route('register') }}">
                                <i class="fa-solid fa-user-plus fa-xl"></i> Register</a>
                        </li>
                    </ul>
                </div>
                @endguest

                <div class="md:hidden">
                    <button id="mobile-menu-button"
                        class="text-gray-500 hover:text-white focus:outline-none focus:text-white">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="md:hidden" id="mobile-menu">
            <div class="space-y-1 text-center px-2 pb-3 pt-2 sm:px-3">
                <a href="/" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white"
                    aria-current="page">Home</a>
                <a href="/blog"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Blog</a>
                <a href="/about"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
                <a href="/contact"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>

                <a href="{{ route('login') }}" class="block space-y-1 text-center px-2 pb-3 pt-2 sm:px-3">
                    <i class="fa-solid fa-right-to-bracket fa-xl"></i> Login
                </a>
            
                <a href="{{ route('register') }}">
                    <i class="fa-solid fa-user-plus fa-xl"></i> Register
                </a>
            </div>
        </div>
    </nav>
</body>

</html>
