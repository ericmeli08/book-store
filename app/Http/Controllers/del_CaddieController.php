<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class del_CaddieController extends Controller
{
    public function delete(){

        $response = response()->redirectToRoute('boutique.index')->with('statut',"panier supprimer avec success !");
        $response->withCookie(cookie('mon_panier','',-1024));
        return $response;
    }
}
