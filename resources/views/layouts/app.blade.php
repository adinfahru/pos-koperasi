<!DOCTYPE html>
<html x-data="data" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Koperasi Jaya</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Scripts -->
    <script src="{{ asset('js/init-alpine.js') }}"></script>
</head>

<body>
    <div class="flex h-screen" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- Desktop sidebar -->
        @include('layouts.navigation')
        <!-- Mobile sidebar -->
        <!-- Backdrop -->
        @include('layouts.navigation-mobile')
        <div class="flex flex-col flex-1 w-full">
            @include('layouts.top-menu')
            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                    @if(session('success'))
                    <div id="alert" class="text-sm mt-4 bg-green-300 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Success!</strong>
                        <span class="block sm:inline">{{ session('success') }}</span>
                        <button onclick="closeAlert()" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <title>Close</title>
                                <path d="M14.348 14.849a1 1 0 0 1-1.497 1.323l-3.045-3.334-3.045 3.334a1 1 0 1 1-1.497-1.323l3.545-3.875a1 1 0 0 1 1.497 0l3.545 3.875z" />
                            </svg>
                        </button>
                    </div>
                    @endif
                </div>
                <div class="container px-6 mx-auto grid">

                    @if (isset($header))
                    <h2 class="my-6 text-xl font-semibold text-gray-700">
                        {{ $header }}
                    </h2>
                    @endif

                    {{ $slot }}


            </main>
        </div>
    </div>
    <script>
        function closeAlert() {
            var alert = document.getElementById('alert');
            alert.style.display = 'none';
        }
    </script>
</body>

</html>