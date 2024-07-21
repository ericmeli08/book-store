<?php

namespace App\Http\Controllers;

use App\Models\commentaires;
use App\Models\Livres;
use Illuminate\Http\Request;

class BoutiqueController extends Controller
{
    public function index(Request $request){

        $id = 1;
        $livres = Livres::where('stock','>',0)->get();
        if(isset($livres['pu'])){
            $livres = [$livres];
        }
        $book = Livres::find($id);

        $commentaires = commentaires::all();
        if(isset($commentaires['commentaire'])){
            $commentaires = [$commentaires];
        }

        $page = "boutique";

        return view('boutique',[
            'livres' => $livres,
            'book' => $book,
            'commentaires' => $commentaires,
            'page' => $page,
            'admin' => false,
            'id' => $id
        ]);
    }

    public function affiche($id){

        $livres = Livres::where('stock','>',0)->get();
        if(isset($livres['pu'])){
            $livres = [$livres];
        }
        $book = Livres::find($id);

        $commentaires = commentaires::all();
        if(isset($commentaires['commentaire'])){
            $commentaires = [$commentaires];
        }

        $page = "boutique";

        return view('boutique',[
            'livres' => $livres,
            'book' => $book,
            'commentaires' => $commentaires,
            'page' => $page,
            'admin' => false,
            'id' => $id
        ]);
    }
}
