<x-master>
    <section class="px-8">
        <main class="container mx-auto">
            <div class="lg:flex lg:justify-center">
                @auth
                <div class="lg:w-1/6">
                    @include ('_additional-links')
                </div>
                @endauth

                <div class="lg:flex-1 lg:mx-10">
                    {{ $slot }}
                </div>

                @auth
                <div class="lg:w-1/6">
                    @include ('_friends-list')
                </div>
                @endauth
            </div>
        </main>
    </section>
</x-master>
