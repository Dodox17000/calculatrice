<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
    public function calcul(Request $request){
        $result='';
        if($request->method() === "POST"){
            $nb1=$request->input('nb1');
            $nb2=$request->input('nb2');
            if($request->input('operateur')=="+"){
                $result = $nb1 + $nb2;
            }else if($request->input('operateur')=="-"){
                $result = $nb1 - $nb2;
            }else if($request->input('operateur')=="/"){
                $result = $nb1 / $nb2;
            }else if($request->input('operateur')=="%"){
                $result = $nb1 % $nb2;
            }else if($request->input('operateur')=="*"){
                $result = $nb1 * $nb2;
            }
        }
        return view('calculatrice', compact('result'));
    }
}
