<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.2.0/turbolinks.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>
    <div class="flex h-screen">
        <div class="w-3/5 flex flex-wrap content-center" style="background-color: #161e2e;">
            <div class="w-full h-1/2 items-center">
                <div class="flex justify-center">
                    <img
                        src="/images/twitter-logo.png"
                        class=""
                        width="100"
                        height="100"
                        alt="Chitter"
                    >
                </div>
                <div class="flex justify-center">
                    <h1 class="text-center mt-3 text-3xl leading-9 font-semibold font-display text-white sm:mt-6 sm:text-5xl sm:leading-10 xl:text-6xl xl:leading-none">Chitter</h1>
                    <h1 class="text-center text-3xl leading-9 font-semibold font-display text-teal-400 sm:mt-6 sm:text-5xl sm:leading-10 xl:text-6xl xl:leading-none">App</h1>
                </div>

                <div class="flex justify-center mt-3">
                    <div class="text-center items-baseline text-white font-bold uppercase text-xs w-1/5 py-3">
                        @auth
                            <a class="mx-3" href="{{ url('/chits') }}">Home</a>
                        @else
                            <a class="p-2" href="{{ route('login') }}">Login</a>
                            <a class="p-2" href="{{ route('register') }}">Register</a>
                        @endauth
                    </div>
                </div>

                <div class="mt-5">
                    <div>
                        <p class="text-sm text-center font-semibold text-gray-300 uppercase tracking-wider">Why Chitter?</p>
                        <p class="mt-2 text-sm text-center text-gray-200 tracking-wider">Chitter is a rip-off of Twitter which has no originality whatsoever. The only difference is we don't sell your shit to everyone.</p>
                    </div>

                    <div class="mt-5">
                        <p class="text-sm text-center font-semibold text-gray-300 uppercase tracking-wider">Alright.. I'm in.. where do I sign up?!?</p>
                        <p class="mt-2 text-sm text-center text-gray-200 tracking-wider">Simply click Register above to make yourself your own account. You can also click here</p>
                    </div>
                </div>


                <div class="">
                    <a href="{{route('profile', $user)}}">
                        <div class="flex justify-center mt-5">
                            <img
                            src="{{$user->avatar_path}}"
                            class="rounded-full border-2 border-white"
                            width="50"
                            height="50"
                            alt="Chitter"
                            >
                        </div>

                        <div>
                            <h1 class="mt-2 text-white text-center text-xs uppercase text-gray-300 font-semibold">Developed by {{$user->username}}</h1>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="flex-1" >
            <div class="h-screen bg-no-repeat" style="background-image: url('/images/angled-background.svg');"></div>
        </div>
    </div>
</body>


<style>
    body {
        background-image: url('images/email-pattern.png');
        font-family: 'Open Sans', sans-serif;
    }

}

</style>

</body>

</html>
