<x-master>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

    <div class="pt-12 md:pt-20 pb-6 px-2 md:px-0">
        <div class="flex justify-center container mx-auto">
            <h1 class="text-4xl font-bold text-black text-cente">{{ __('Register') }}</h1>
        </div>

        <div class="flex bg-white container mx-auto my-10 rounded-lg shadow-xl">

            <div class="p-4 w-full md:p-12">
                    <div class="pb-4">
                        <h3 class="text-center font-bold text-2xl">Welcome... lets get you started ;)</h3>
                        <p class="text-center text-gray-600 pt-2">Please create your own account.</p>
                    </div>
                <form class="flex flex-col" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="flex">

                        <div class="mb-6 pt-3 rounded bg-gray-200 mr-3 w-1/2">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2 ml-3">{{ __('Name') }}</label>
                            <input id="name" type="text" class="bg-gray-200 rounded w-full text-gray-700 border-b-4 border-gray border-gray-300 focus:border-blue-600 transition duration-500 px-3 pb-3 @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="mb-6 pt-3 rounded bg-gray-200 w-1/2">
                            <label for="username" class="block text-gray-700 text-sm font-bold mb-2 ml-3">{{ __('Username') }}</label>
                            <input id="name" type="text" class="bg-gray-200 rounded w-full text-gray-700 border-b-4 border-gray border-gray-300 focus:border-blue-600 transition duration-500 px-3 pb-3 @error('username') is-invalid @enderror" name="username"
                                value="{{ old('name') }}" required autocomplete="username" autofocus>

                            @error('username')
                            <span class="bg-white" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>

                    <div class="mb-6 pt-3 rounded bg-gray-200">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="bg-gray-200 rounded w-full text-gray-700 border-b-4 border-gray border-gray-300 focus:border-blue-600 transition duration-500 px-3 pb-3 @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="flex">
                        <div class="mb-6 pt-3 mr-3 rounded bg-gray-200 w-1/2">
                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2 ml-3">{{ __('Password') }}</label>
                            <input id="password" type="password" class="bg-gray-200 rounded w-full text-gray-700 border-b-4 border-gray border-gray-300 focus:border-blue-600 transition duration-500 px-3 pb-3 @error('password') is-invalid @enderror"
                                name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-6 pt-3 rounded bg-gray-200 w-1/2">
                            <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2 ml-3">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="bg-gray-200 rounded w-full text-gray-700 border-b-4 border-gray border-gray-300 focus:border-blue-600 transition duration-500 px-3 pb-3 " name="password_confirmation" required
                                autocomplete="new-password">
                        </div>
                    </div>

                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200">
                        {{ __('Register') }}
                    </button>
                </form>
            </div>

            <div class="w-1/3 pt-8 md:pt-8 border-l-2">
                <div class="items-center pb-3">
                    <h3 class="text-xl text-center font-bold">Check out the latest Chits...</h3>
                </div>

                <div class="rounded-xl m-3">
                    @forelse ($chits as $chit)
                    <div class="flex mt-3 {{ $loop->last ? '' :  'border-b border-b-gray-400'}} px-2 py-1">
                        <div class="flex mr-2 flex-shrink-0">
                            <a href="{{ route('profile', $chit->user) }}">
                                <img src="{{$chit->user->avatar_path}}" alt="" class="rounded-full" height="40px"
                                    width="40px">
                            </a>
                        </div>

                        <div>
                            <div class="flex mb-1 items-baseline">
                                <h5 class="font-bold text-base text-gray-700">{{ '@' .$chit->user->username }}</h5>
                            </div>

                            <p class="text-sm">{{ $chit->body }}</p>
                        </div>
                    </div>
                    @empty

                    <div class="text-center">
                        There are no chits yet 😭
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-master>

<style>
    body {
        background-color: #F6F7FB;
        font-family: 'Lato', sans-serif;
    }

</style>



