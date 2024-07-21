<?php

namespace App\Http\Controllers;

use App\Models\Commentaires;
use App\Models\Livres;
use Illuminate\Http\Request;

class Find_BookController extends Controller
{
    public function index(){
        // session_start();
        // require_once("/wamp64/www/my_projetcs/librairie/back_end/var/variables.inc.php");
        // require_once(URL_MODEL."GestionLivres.php");
        // require_once(URL_MODEL."GestionCommentaires.php");

        // require(URL_TMP."verification_connection.php");

        $livres = [];

        // if (isset($_SESSION['userAdmin'] )) {
        //     $admin = true;
        // }else{
        //     $admin=null;
        // }

        $commentaires = Commentaires::all();
        if(isset($commentaires['commentaire'])){
            $commentaires = [$commentaires];
        }

        // if(isset($_POST['submit'])){
        //     extract($_POST);

        //     $typeRech = addslashes($typeRech);
        //     $termeRech = htmlentities(addslashes(trim($termeRech))) ;

        //     $livres = GestionLivres::rechercheLivres($typeRech,$termeRech);
        // }

        // if(isset($livres['id'])){
        //     $livres = [$livres];
        // }

        return view('find_book',[
            'livres' => $livres,
            'commentaires' => $commentaires,
            'page' => "find_book"
            // 'admin' => $admin,
            // 'typeRech' => isset($typeRech)? $typeRech : null,
            // 'termeRech' => isset($termeRech)? $termeRech : null,
            // 'titrePage' => 'Recherche livres'
        ]);
    }

    public function traitement(Request $request){

        $commentaires = Commentaires::all();
        if(isset($commentaires['commentaire'])){
            $commentaires = [$commentaires];
        }

        $typeRech = addslashes($request->typeRech);
        $termeRech = htmlentities(addslashes(trim($request->termeRech))) ;

        $livres = Livres::where($typeRech,"LIKE","%".$termeRech."%")->get();


        if(isset($livres['id'])){
            $livres = [$livres];
        }

        return view('find_book',[
            'livres' => $livres,
            'commentaires' => $commentaires,
            'page' => "find_book",
            'admin' => true,

        ]);
    }
}
