<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class fooldal extends Controller
{
    public function kiiras(){
        $autok = DB::select("SELECT * FROM autok WHERE 1");
        return view('welcome', ["autok" => $autok]);
    }
}
