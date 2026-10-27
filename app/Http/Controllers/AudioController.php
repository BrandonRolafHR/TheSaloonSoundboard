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

        return view('home', compact('audio'));
    }

    public function show(string $name): View
    {
        $audio = Audio::findOrFail($name);

        return view('audio.show', compact('audio'));
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
            'audio' => 'required|file|mimes:mp3|max:20480'
        ]);

        $audio = new Audio();

        $audio->title = $request->input('title');
        $audio->description = $request->input('description');
        $audio->audio_url = $request->file('audio')->store('audio', 'public');
        $audio->user_id = '1';

        $audio->save();

        return redirect()->route('audio.index');
    }

    public function edit(string $id): View
    {
        $audio = Audio::findOrFail($id);

        return view('audio.edit', compact('audio'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:3',
            'audio' => 'nullable|file|mimes:mp3|max:20480'
        ]);

        $audio = Audio::findOrFail($id);

        $audio->title = $request->input('title');
        $audio->description = $request->input('description');

        if ($request->hasFile('audio')) {
            $audio->audio_url = $request->file('audio')->store('audio', 'public');
        }

        $audio->save();

        return redirect()->route('audio.index');
    }

    public function destroy(string $id)
    {
        $audio = Audio::findOrFail($id);

        $audio->delete();

        return redirect()->route('audio.index');
    }

    public function manage()
    {
        $audio = Audio::where('user_id', 1)->get();

        return view('manage', compact('audio'));
    }
}
