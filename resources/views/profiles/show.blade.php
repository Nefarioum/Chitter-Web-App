<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img
                src="/images/default-banner.jpg"
                class="rounded-lg mb-2"
                alt=""
            >

            <img
                src="{{ $user->avatar_path }}"
                alt="{{ $user->path() }} Profile Picture "
                class="overflow-hidden rounded-full border-white border-4 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                style="left: 50%;"
                width="200"
                height="200"
            >
        </div>

        <div class="flex justify-between items-center mb-6">
            <div style="max-width: 270px;">
                    <h2 class="font-bold text-2xl"> {{ $user->name }}</h2>
                    <p class="text-sm text-gray-600">{{'@'}}{{ $user->username }}</p>

                    <p class="text-sm ">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @auth
                    <x-edit-button :user="$user"></x-edit-button>
                    <x-follow-button :user="$user"></x-follow-button>
                @endauth
            </div>

        </div>

        <p class="text-sm">
            {{ $user->description }}
        </p>
    </header>



    @include ('_timeline', [
        'chits' => $chits
    ])
</x-app>


