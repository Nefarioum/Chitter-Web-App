<div class="border border-gray-300 rounded-xl lg:mx-10">
    @forelse($chits as $chit)
        <div class="rounded-xl hover:bg-gray-100">
            @include ('_chit')
        </div>
    @empty
        <p class="p-4 text-center">Start with your first chit to fill this timeline!</p>
    @endforelse

    @if ($chits->hasPages())
    <div class="p-5">
        {{ $chits->links() }}
    </div>
    @endif
</div>




