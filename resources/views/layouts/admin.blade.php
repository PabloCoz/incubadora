<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/2537d8fed3.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="font-sans antialiased bg-white">

    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
        type="button"
        class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>

    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-200 shadow-lg shadow-gray-600">
            <a href="{{ route('admin.home') }}" class="flex items-center pl-2.5 mb-5">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-7" alt="Flowbite Logo" />
                <span class="self-center text-xl font-semibold">UNACH</span>
            </a>
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                        <i class="fa-solid fa-house"></i>
                        <span class="ml-3">Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                        <i class="fa-solid fa-book"></i>
                        <span class="flex-1 ml-3">Cursos</span>

                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                        <span class="flex-1 ml-3">Talleres</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                        <i class="fa-solid fa-chalkboard-user"></i>
                        <span class="flex-1 ml-3">Capacitaciones</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                        <i class="fa-solid fa-group-arrows-rotate"></i>
                        <span class="flex-1 ml-3">Desafios</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                        <i class="fa-solid fa-users"></i>
                        <span class="flex-1 ml-3">Alumnos</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.postulants') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                        <i class="fa-solid fa-user-clock"></i>
                        <span class="flex-1 ml-3">Postulantes</span>
                    </a>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                        <i class="fa-solid fa-circle-left"></i>
                        <span class="flex-1 ml-3">Cerrar Sesión</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="p-8 sm:ml-64">
        <main>
            {{ $slot }}
        </main>
    </div>

    @livewireScripts
</body>

</html>
