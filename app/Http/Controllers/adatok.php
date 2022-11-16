<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;
use Illuminate\Support\Facades\DB;

class adatok extends Controller
{
   public function bekuldes(){

    return view('adatok');

   }

   public function rogzites(Request $req){
    $req->validate(
        [
            "rendsz"=>"required|min:1|max:10",
            "tip"=>"required|min:1|max:20",
            "szin"=>"required|min:1|max:30"

        ],

        [
            "rendsz.required"=>"A mezőt kötelező kitölteni!",
            "rendsz.min"=> "Minimum 1 karakter!",
            "rendsz.max"=> "maximum 10 karakter!",

            "tip.required"=>"A mezőt kötelező kitölteni!",
            "tip.min"=> "Minimum 1 karakter!",
            "tip.max"=> "maximum 20 karakter!",

            "szin.required" => "kötelező kitölteni a mezőt!",
            "szin.min" => "Minimum 1 karakter!",
            "szin.max"=> "maximum 30 karakter!"
            
        ]);

        
        
        DB::insert("INSERT INTO autok (rendszam, tipus, szin) VALUES (?,?,?)",[$req->get('rendsz'),$req->get('tip'),$req->get('szin')]);
        return redirect ("/adatok")->with("kesz","Az adat felvitel sikeres");
   }

}
