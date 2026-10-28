<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;

class FavoriteController extends Controller
{
    public function toggle(Request $request, string $audioId)
    {

        $favorite = Favorite::where('user_id', auth()->id())
            ->where('audio_id', $audioId)
            ->first();

        if ($favorite) {
            $favorite->delete();
        } else {
            Favorite::create([
                'user_id' => auth()->id(),
                'audio_id' => $audioId
            ]);
        }

        return back();
    }
}
