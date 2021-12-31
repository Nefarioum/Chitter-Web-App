<div class="flex p-4 {{ $loop->last ? '' :  'border-b border-b-gray-400' }} {{$chits->hasPages() ? 'border-b border-b-gray-400' :  ''}}">
    <div class="mr-2 flex-shrink-0 ">
        <a href="{{ route('profile', $chit->user) }}">
            <img
                src="{{$chit->user->avatar_path}}"
                alt=""
                class="rounded-full mr-2"
                height="40px"
                width="40px"
            >
        </a>
    </div>

    <div>
        <div class="flex mb-4 items-baseline">
            <a href="{{ route('profile', $chit->user) }}">
                <h5 class="font-bold">{{ $chit->user->username }}</h5>
            </a>
            <p class="font-gray-500 text-xs pl-2">Posted {{ $chit->created_at->diffForHumans()}}</p>
        </div>

        <p class="text-sm">{{ $chit->body }}</p>
    </div>
</div>


