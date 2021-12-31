<x-app>
    <div class="mb-5 items-center">
        <h1 class="text-3xl font-bold mb-3"> Explore users. </h1>

        <div class="pt-2 relative mx-auto text-gray-600">
            <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
            type="search" name="search" placeholder="Search">
        </div>
    </div>
    <h1 class="text-xl  mb-3"> Sorted by oldest members first </h1>
    @foreach ($users as $user)

    <a href="{{ route('profile', $user) }}">


        <div class="flex mb-2 bg-gray-100 rounded-xl">
            <img src="{{ $user->avatar_path}}" class="rounded-full" alt="{{ $user->username }}'s Avatar'" width="50" height="50">

            <div class="ml-2">
                <h3 class="block font-bold"> {{$user->username}}
                  <span class="ml-2 mt-1  rounded-full bg-indigo-500 uppercase px-2 shadow
            text-white  text-xs font-bold">Admin</span>
                </h3>

                <p class="font-xs">Joined {{$user->created_at->diffForHumans()}}</p>
            </div>
        </div>

    </a>
    @endforeach

    <div class="p-5">
        {{ $users->links() }}
    </div>
</x-app>
