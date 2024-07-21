<?php

namespace App\Http\Controllers;

use App\Models\Livres;
use Illuminate\Http\Request;

class Delete_BookController extends Controller
{
    public function delete($id){
        $livre = Livres::find($id);
        $livre->delete();

        return redirect()->route('boutique.index')->with("status","Le livre a ete supprimer avec success !");
    }

}
