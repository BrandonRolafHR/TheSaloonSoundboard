<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    protected function audio()
    {
        $audio = new Audio();
        $audio->title = 'Scheet';
        $audio->description = 'Siebe liet een scheet en dat was grappig.';
    }
}
