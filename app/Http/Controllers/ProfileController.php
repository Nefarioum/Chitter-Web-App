<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\ImageManagerStatic as Image;

class ProfileController extends Controller
{
    public function show(User $user){
        return view('profiles.show', [
            'user' => $user,
            'chits' => $user->chits()->paginate(3)
        ]);
    }

    public function edit(User $user){
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user){
        $updateAttributes = request()->validate([
            'username' => ['string', 'required', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user)],
            'name' => ['string', 'required', 'max:255'],
            'avatar' => ['file', 'max:10240'],
            'email' => ['string', 'required', 'email', 'max:255', Rule::unique('users')->ignore($user)],
            'description' => ['string', 'required', 'max:255'],
            'password' => ['string', 'required', 'min:8', 'max:255', 'confirmed'],
        ]);

        if (request('avatar')) {
            Image::make(request('avatar'))->resize(500, 500, function ($constraint) {$constraint->upsize();})->save(storage_path( '/app/public/avatar/ ' . request('avatar')->hashName()));

            $updateAttributes['avatar'] = 'avatar/ ' . request('avatar')->hashName();
            $updateAttributes['avatar_path'] = $updateAttributes['avatar'];

            if($user->avatar) Storage::delete($user->avatar);
        }

        $user->update($updateAttributes);

        return redirect($user->path());
    }
}
