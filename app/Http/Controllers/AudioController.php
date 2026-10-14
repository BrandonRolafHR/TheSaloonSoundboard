<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Audio;
use Illuminate\View\View;

class AudioController extends Controller
{
    public function show(string $name): View
    {
        $audio = new Audio();

        $audio->name = 'Siebe laat een scheet';

        {
            return view('audio.name', compact('audio.name'));
        }
    }
}
