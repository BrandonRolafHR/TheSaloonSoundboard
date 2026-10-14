<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    protected function audio()
    {
        $audio = new Audio();
        $audio->name = 'Scheet';
        $audio->description = 'Siebe liet een scheet en dat was grappig.';
    }
}
