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
        <link rel="stylesheet" href="{{asset('fontawesome-free-6.7.1-web/css/all.min.css')}}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
        @livewireStyles 


        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">

    <style>
        .card {
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 25px;
            cursor: pointer;
        }



        .preserveLines {
            white-space: pre-wrap;
        }

        .blogs {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
                grid-gap: 1em;
        }
        .blogs-header > p {
                display: -webkit-box;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 2;
                overflow: hidden;
                text-overflow: ellipsis;
        }
        .blogs-header > img {
            max-height: 8rem;
            object-fit: cover;
        }

        @media (max-width: 576px) {
            .nav-open {
                height: 21rem;
                top: 5rem;
                padding-inline: 2rem !important;
                padding-block: 1rem !important;
                opacity: 1;
                box-shadow: 5px 10px 18px #000000;
            }

            .nav-close {
                height: 0px;
                opacity: 0;
                visibility: hidden;
            }

            .nav-toggle{
                -webkit-transition: all 0.3s ease-in-out;
                transition: height 0.3s ease-in-out;
                transition: opacity 0.3s ease-in-out;
                opacity: 0;
                z-index: 100;
            }

            .nav-item {
                margin-bottom: 0.5rem;
            }


            .blog-container {
                min-height: 100rem;
                max-width: 100vw;
            }



            .blog-title {
                font-size: rem;
            }

            .blog-desc {
                padding-inline: 2rem;
                padding-block: 2rem;
                max-width: 100vw;
            }

            .blog-image {
                max-width: calc(100vw - 3rem);
                margin-bottom: 1rem;
            }
            .blog-header {
                max-width: 100vw;
            }

        }

        @media (min-width: 577px) {

            .nav-profile{
                display: none;
            }

            .nav-open {
                height: auto;
                opacity: 1;
            }

            .nav-close {
                height: auto;
                opacity: 1;
            }

            .nav-toggle{
                -webkit-transition: all 0.3s ease-in-out;
                transition: height 0.3s ease-in-out;
                margin-left: 8rem;
            }

            .nav-item {
                margin-right: 2rem;
                margin-block: auto;
            }


            .blog-container {
                min-width: 50rem;
                min-height: 100rem;
            }

            .blog-desc {
                margin-top: -15rem;
                width: 75rem;
                min-height: 70rem;
                z-index: 100;
                padding-inline: 8rem;
                padding-block: 5rem;
            }



        }
    </style>
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
