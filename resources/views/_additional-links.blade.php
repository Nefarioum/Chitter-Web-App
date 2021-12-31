<ul>
    <li><a class="font-bold text-lg mb-4 block" href="{{route('home')}}">Home</a></li>
    <li><a class="font-bold text-lg mb-4 block" href="{{route('explore')}}">Explore</a></li>
    <li><a class="font-bold text-lg mb-4 block" href="/">Notifications</a></li>
    <li><a class="font-bold text-lg mb-4 block" href="/">Bookmarks</a></li>
    <li><a class="font-bold text-lg mb-4 block" href="/">Lists</a></li>
    <li><a class="font-bold text-lg mb-4 block" href="{{route('profile', auth()->user())}}">Profile</a></li>
    <li><a class="font-bold text-lg mb-4 block" href="/">More</a></li>
    <li><a class="font-bold text-lg mb-4 block" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>

    <form id="logout-form" action="{{ route('logout') }}" method="POST"> @csrf </form>
</ul>


