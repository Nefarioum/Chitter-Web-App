<?php

namespace App\Http\Controllers;

use App\Models\Chit;
use App\Models\User;
use Illuminate\Http\Request;

class ChitController extends Controller
{
    public function index()
    {
        return view('chits.index', [
            'chits' => auth()->user()->timeline(),
        ]);
    }

    public function store()
    {
        $validation = request()->validate(['body' => 'required|max:255']);

        Chit::create([
            'user_id' => auth()->id(),
            'body' => $validation['body']
        ]);

        return redirect()->route('home');
    }
}
