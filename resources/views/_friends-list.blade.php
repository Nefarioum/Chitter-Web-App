<div class="bg-gray-100 rounded-lg p-4">
    <h3 class="font-bold text-xl mb-4">Following</h3>

    <ul>
        @forelse (auth()->user()->follows as $user)
        <li class="mb-4">
            <div class="flex items-center">
                <a href="{{ route('profile', $user) }}">
                    <img
                        src="{{ $user->avatar_path }}"
                        alt=""
                        class="rounded-full mr-2"
                        width="40px"
                        height="40px"
                    >
                </a>
                <a href="{{ route('profile', $user) }}">
                    {{ $user->username }}
                </a>
            </div>
        </li>
        @empty
            <li>Follow people to fill this list!</li>
        @endforelse
    </ul>
</div>
