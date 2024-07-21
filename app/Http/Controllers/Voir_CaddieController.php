<?php

namespace App\Http\Controllers;

use App\Models\Livres;
use App\Models\Commande;
use Illuminate\Http\Request;

class Voir_CaddieController extends Controller
{
    public function index(){
        $mon_panier = json_decode(request()->cookie('mon_panier'));

        $unique_ids = array_unique($mon_panier);

        $array_count_ids = array_count_values($mon_panier);

        $livres = Livres::whereIn('id',$unique_ids)->get();

        return view('voir_caddie',[
            'livres' => $livres,
            'page' => 'voir_caddie',
            'tab' => $array_count_ids,
        ]);
    }

    public function traitement(Request $request){

        $commande = new Commande();
        $commande->produits = $request->produits;
        $commande->montant = $request->montant;
        $commande->nomPrenom = $request->nomPrenom;
        $commande->email = "fouegangmeli@gmail.com";
        $commande->adresse = $request->adresse;
        $commande->save();

        $response = response()->redirectToRoute('boutique.index')->with('statut',"La commande a ete enregistrer avec sucess !");
        $response->withCookie(cookie('mon_panier','',-1024));

        return $response;
    }
}
