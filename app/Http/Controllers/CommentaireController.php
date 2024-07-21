<?php

namespace App\Http\Controllers;

use App\Models\Commentaires;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function index(Request $request){


        $commentaire = new Commentaires();
        $commentaire->commentaire = $request->commentaire;
        $commentaire->email = "meliric@gmail.com";
        $commentaire->save();

        return redirect()->route('boutique.index')->with("status","Le commentaire a ete sauvegarder avec success !");

    }
}
