<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased bg-white">
        <div class="flex min-h-screen">
            
            <div class="hidden lg:flex lg:w-1/2 relative bg-[#f8fafc] items-center justify-center overflow-hidden">
                <div class="absolute inset-0 z-0 opacity-30">
                    <svg class="h-full w-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <circle cx="0" cy="0" r="40" fill="#6366f1" filter="blur(80px)" />
                    </svg>
                </div>

                <div class="relative z-10 w-full max-w-lg px-12">
                    <img src="{{ asset('images/auth-bg.png') }}" alt="Authentication Illustration" class="w-full h-auto drop-shadow-2xl">
                    
                    <div class="mt-10">
                        <h1 class="text-3xl font-extrabold text-slate-800 tracking-tight">
                            Easy Verification for Everyone
                        </h1>
                        <p class="mt-4 text-lg text-slate-600 leading-relaxed">
                            Join our safe platform and keep your personal info secure with our best protection.
                        </p>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-1/2 flex flex-col justify-center px-6 py-12 sm:px-12 lg:px-20 bg-white">
                <div class="mx-auto w-full max-w-md">
                    <div class="lg:hidden mb-10">
                        <h2 class="text-2xl font-bold text-indigo-600">User Validation</h2>
                    </div>

                    <div class="space-y-6">
                        {{ $slot }}
                    </div>

                    <footer class="mt-12 text-sm text-slate-500 text-center">
                        &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                    </footer>
                </div>
            </div>

        </div>
    </body>
</html>