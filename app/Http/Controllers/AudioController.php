<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Audio;
use Illuminate\View\View;

class AudioController extends Controller
{
    public function index()
    {
        $audio = Audio::all();
    }

    public function show(string $name): View
    {
        $audio = Audio::find();
        {
            return view('audio.name', compact('audio.name'));
        }
    }

    public function create()
    {
        return view('audio.create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:3',
        ]);

        $audio = new Audio();
        $audio->title = $request->input('title');
        $audio->description = $request->input('description');
        $audio->audio_url = 'tijdelijk';
        $audio->user_id = '1';
        $audio->date = '14-12-2204';

        $audio->save();
        return redirect()->route('products.index');
    }
}
