<?php

namespace App\Http\Controllers;

use App\Models\Livres;
use Illuminate\Http\Request;

class Edit_BookController extends Controller
{
    public function index($id){
        $livre = Livres::find($id);

        $livres = Livres::where('stock',"=",0)->get();
        if(isset($livres['pu'])){
            $livres = [$livres];
        }

        return view('edit_book',[
            'livre' => $livre,
            'livres' => $livres,
            'page' => 'edit_book',
        ]);
    }



    public function traitement(Request $request){
        $request->validate([
            'ISBN' =>'required',
            'auteur' =>'required|min:3',
            'titre' =>'required|min:3',
           'stock' =>'required|integer|min:0',
           "pu"  =>'required|min:0',
        ]);

        $livre = Livres::find($request->id);

        $livre->ISBN = $request->ISBN;
        $livre->auteur = $request->auteur;
        $livre->titre = $request->titre;
        $livre->stock = $request->stock;
        $livre->pu = $request->pu;
        $livre->resumer = $request->resumer;
        $livre->save();


        return redirect()->route('boutique.index')->with('status','Livre modifier avec succès!');
    }


}
