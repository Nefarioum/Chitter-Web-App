<div class="border border-blue-400 rounded-lg lg:mx-10 px-8 py-6 mb-8 ">
    <form method="POST" action="/chits">
        @csrf
        <textarea
            name="body"
            class="w-full"
            placeholder="What's on your mind?"
            required
            autofocus
        ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between">
            <img
                src="{{ auth()->user()->avatar_path }}"
                alt="{{auth()->user()->name}}'s Avatar'"
                class="rounded-full mr-2"
                height="40px"
                width="40px"
            >

            <button
                type="submit"
                class="bg-blue-500 hover:bg-blue-600 rounded-xl shadow px-8 text-sm text-white h-10"
            >
                Chitt-a
            </button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
