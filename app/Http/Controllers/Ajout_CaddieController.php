<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ajout_CaddieController extends Controller
{
    public function ajout(Request $request){

        $mon_panier = json_decode($request->cookie('mon_panier'),true)??[];

        $mon_panier[] = $request->id;

        $response = response()->redirectToRoute('boutique.index');
        $response->withCookie(cookie('mon_panier',json_encode($mon_panier)));

        return $response;
    }
}
