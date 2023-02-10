<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BeSafe</title>
        @vite('resources/css/app.css')
        <style>
            body {
                background-color: #1F2937;
                color: #f5f5f5;
                display: flex;
                justify-content: center;
                overflow: hidden;
            }
            .content{
                text-align: center;
                max-width: 500px;
            }
            .content img{
                width: 100%;
            }
        </style>
    </head>
    <body >
        <div class="content">
            <img src="{{asset('assets/images/logo.png')}}" alt="">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}" class="inline-flex items-center justify-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs  uppercase tracking-widest shadow-sm  disabled:opacity-25 transition bg-gray-600 border-gray-600 text-white mt-2 mr-2">Home</a>
                @else
                    <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs  uppercase tracking-widest shadow-sm  disabled:opacity-25 transition bg-gray-600 border-gray-600 text-white mt-2 mr-2">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs  uppercase tracking-widest shadow-sm  disabled:opacity-25 transition bg-gray-600 border-gray-600 text-white mt-2 mr-2">Register</a>
                    @endif
                @endauth
            @endif

        </div>
    </body>
</html>
