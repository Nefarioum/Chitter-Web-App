<x-app>
        <form method="POST" action="{{$user->path()}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="mb-6">
                <label class="mb-2 uppercase font-bold text-xs text-gray700" for="name">Name</label>
                <input
                    class="border border-gray-500 p-2 w-full"
                    type="text"
                    name="name"
                    id="name"
                    value="{{ $user->name}}"
                    required
                >
                @error('name')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>


            <div class="mb-6">
                <label class="mb-2 uppercase font-bold text-xs text-gray700" for="username">Username</label>
                <input
                    class="border border-gray-500 p-2 w-full"
                    type="text"
                    name="username"
                    id="username"
                    value="{{ $user->username }}"
                    required
                >
                @error('username')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="mb-2 uppercase font-bold text-xs text-gray700" for="avatar">Avatar</label>

                <div class="flex">

                <img src=" {{$user->avatar_path}} " alt="{{$user->username}}'s Avatar'" class="rounded-full mr-3" width="50" height="50">


                <input
                    class="border border-gray-500 p-2 w-full"
                    type="file"
                    name="avatar"
                    id="avatar"
                    accept="image/*"
                >

                </div>
                @error('avatar')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>


            <div class="mb-6">
                <label class="mb-2 uppercase font-bold text-xs text-gray700" for="email">Email</label>
                <input
                    class="border border-gray-500 p-2 w-full"
                    type="email"
                    name="email"
                    id="email"
                    value="{{ $user->email }}"
                    required
                >
                @error('email')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>


            <div class="mb-6">
                <label class="mb-2 uppercase font-bold text-xs text-gray700" for="description">Description</label>
                <input
                    class="border border-gray-500 p-2 w-full"
                    type="text"
                    name="description"
                    id="description"
                    value="{{ $user->description }}"
                    required
                >
                @error('description')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>


            <div class="mb-6">
                <label class="mb-2 uppercase font-bold text-xs text-gray700" for="password">Password</label>
                <input
                    class="border border-gray-500 p-2 w-full"
                    type="password"
                    name="password"
                    id="password"
                    required
                >
                @error('password')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="mb-2 uppercase font-bold text-xs text-gray700" for="name">Password Confirmation</label>
                <input
                    class="border border-gray-500 p-2 w-full"
                    type="password"
                    name="password_confirmation"
                    id="password_confirmation"
                    required
                >
                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6 ">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-4">Submit</button>

                <a href="{{$user->path()}}" class="hover:underline">Cancel</a>
            </div>
        </form>
</x-app>
