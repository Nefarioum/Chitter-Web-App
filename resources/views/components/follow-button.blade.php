@if (auth()->user()->isNot($user))
<form method="POST" action="{{ $user->path('follow') }}"> @csrf <button type="submit"
        class="bg-blue-400 rounded-full shadow py-2 px-2 text-white text-xs">
        {{ auth()->user()->following($user) ? 'Unfollow User' : 'Follow User'}}
    </button>
</form>
@endif
