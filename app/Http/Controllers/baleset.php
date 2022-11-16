<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;
use Illuminate\Support\Facades\DB;

class baleset extends Controller
{
   public function bekuldes(){

    return view('baleset');

   }

   public function rogzites(Request $req){
    $req->validate(
        [
            "leir"=>"required|min:1|max:1000",
            "idop"=>"required|date",

        ],

        [
            "idop.required"=>"A mezőt kötelező kitölteni!",
            "idop.date"=> "Csak dátum lehet",
            

            "leir.min"=> "Minimum 1 karakter!",
            "leir.max"=> "maximum 1000 karakter!",
            
            
            
        ]);

        
        
        DB::insert("INSERT INTO Baleset_idopont (Baleset_idopontja, Serules_leirasa) VALUES (?,?)",[$req->get('idop'),$req->get('leir')]);
        return redirect ("/baleset")->with("kesz","Az adat felvitel sikeres");
   }

}
