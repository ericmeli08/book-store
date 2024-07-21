<?php

namespace App\Http\Controllers;

use App\Models\Livres;
use Illuminate\Http\Request;

class Book_RegisterController extends Controller
{
    public function index(){

        $livres = Livres::where('stock',"=",0)->get();
        if(isset($livres['pu'])){
            $livres = [$livres];
        }

        // if(isset($_POST['submit'])){
        //     GestionLivres::insertLivre(new Livre($_POST));
        // }
        return view('book_register',[
            'livres' => $livres,
            'page' => "book_register"
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

        $last_id = Livres::all("id")->last()['id'];
        dump($last_id);
        $ref = "REF". str_pad($last_id,3,'0',STR_PAD_LEFT);

        dump($ref);

        $livre = new Livres();
        $livre->ISBN = $request->ISBN;
        $livre->REF = $ref;
        $livre->auteur = $request->auteur;
        $livre->titre = $request->titre;
        $livre->stock = $request->stock;
        $livre->pu = $request->pu;
        $livre->resumer = $request->resumer;
        $livre->save();


        return redirect()->route('book_register.index')->with('status','Livre ajouté avec succès!');
    }
}
