<x-master>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

    <div class="pt-12 md:pt-20 pb-6 px-2 md:px-0">
        <div class="max-w-lg mx-auto">
            <a href="">
                <h1 class="text-4xl font-bold text-black text-center">{{ __('Login') }}</h1>
            </a>
        </div>

        <div class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-xl">
            <div class="pb-4">
                <h3 class="font-bold text-2xl">Welcome back to Chitter.</h3>
                <p class="text-gray-600 pt-2">Please sign into your account.</p>
            </div>

            <div>
                <form class="flex flex-col" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-6 pt-3 rounded bg-gray-200">
                        <label for="identity" class="block text-gray-700 text-sm font-bold mb-2 ml-3">{{ __('Username/Email Address') }}</label>
                        <input id="identity" type="text" class="bg-gray-200 rounded w-full text-gray-700 border-b-4 border-gray border-gray-300 focus:border-blue-600 transition duration-500 px-3 pb-3 @error('identity') is-invalid @enderror" name="identity"
                            value="{{ old('identity') }}" required autocomplete="Username/Email" autofocus>

                        @error('identity')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="b-6 pt-3 rounded bg-gray-200 mb-4">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2 ml-3"">{{ __('Password') }}</label>
                        <input id="password" type="password" class="bg-gray-200 rounded w-full text-gray-700 border-b-4 border-gray border-gray-300 focus:border-blue-600 transition duration-500 px-3 pb-3 @error('password') is-invalid @enderror" name="password"
                            required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="flex justify-between mb-5">
                        <div class="justify-start">
                            <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="text-sm mb-6" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>


                        @if (Route::has('password.request'))
                            <div class="">
                                <a class="text-sm hover:text-blue-700 hover:underline mb-6" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        @endif

                    </div>

                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200">
                        {{ __('Login') }}
                    </button>
                </form>
            </div>
        </div>

    </div>
</x-master>

<style>
    body{
        background-color: #F6F7FB;
        font-family: 'Lato', sans-serif;
    }
</style>


