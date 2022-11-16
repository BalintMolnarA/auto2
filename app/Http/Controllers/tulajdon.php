<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;
use Illuminate\Support\Facades\DB;

class tulajdon extends Controller
{
   public function bekuldes(){

    return view('tulajdon');

   }

   public function rogzites(Request $req){
    $req->validate(
        [
            "nev"=>"required|min:1|max:30",
            "tuljkezd"=>"required|date",
            "tuljv"=>"required|date"

        ],

        [
            "nev.required"=>"A mezőt kötelező kitölteni!",
            "nev.min"=> "Minimum 1 karakter!",
            "nev.max"=> "maximum 30 karakter!",

            "tuljkezd.required"=>"A mezőt kötelező kitölteni!",
            "tuljkezd.date"=>  "Csak dátum lehet!",
            

            "tuljv.required" => "kötelező kitölteni a mezőt!",
            "tuljv.date" =>  "Csak dátum lehet!"
            
            
        ]);

        
        
        DB::insert("INSERT INTO tulajdonosok (tulajdonos_neve, Tulajdonjog_kezdete, tulajdonjog_vege) VALUES (?,?,?)",[$req->get('nev'),$req->get('tuljkezd'),$req->get('tuljv')]);
        return redirect ("/tulajdon")->with("kesz","Az adat felvitel sikeres");
   }

}
