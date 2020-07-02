<?php

namespace App\Http\Controllers;

use App\ListMp3;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function listmp3(){
        $listmp3= ListMp3::orderBy('IDSong','desc')->get();
        return response()->json([
            "success" =>true,
            "listSong" =>$listmp3
        ]);
    }
}
