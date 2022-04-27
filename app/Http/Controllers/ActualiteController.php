<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    //
    public function index(){

        //see all in the tab Actualite
        $news = Actualite::all();
        
        return view("accueil",compact("news"));
    }
    /**********************************************
     * reception de l'identifiant dans l'actualité
     *********************************************/

    public function detail($id=0){

        /***************************************************
         * Selectionne l'actualité portant l'identifiant $id
         * SELECT*FROM actu WHERE id = $id ORDER by ID asc LIMIT 1
         ***************************************************/

        $actu = Actualite::where("id",$id)->first();

            /* dd($actu); */
        

        return view("detail",compact("actu"));
    }
    /* Add in my DB */
    public function create(){

        /*create variable type Request*/
            /* dd($request); */

            /*Control titre */
          

        return view("create");
    }

    public function save(Request $request){

        $validate = $request->validate( ["titre"=>"required"]
                                        );
                //controle                                
                /* dd($validate); */

            /******************************************************************************
            ** Création de mon instance d'enregistrement à l'aide de mon model "Actualite"
            ** Affectation des mes variables request à mon enregistrement
            ** Enregistrement en base
            ****************************************************************************/
                $saveActualite = new Actualite();

                $saveActualite->titre = $request->titre;

                $saveActualite->detail = $request->detail;

                $saveActualite->save();

                /********************************************
                 * redirection vers ma page create.blade.php
                 ********************************************/
                return back();

        
    }
    /*********************************
     * Modification de l'actu
     *******************************/
    public function update(Request $request){


        $validate = $request->validate([ "id"=>"required",
                                            
                                        "titre"=>"required"]);                                    
                                    
                        /*controle de la variable $validate */               
                        /* dd($validate); */
        
                        $update = Actualite::find($request->id);

                        $update->titre = $request->titre;

                        $update->detail = $request->detail;

                        $update->save();


        return back();
    }


    /***************************************************
     * Nouvelle page modifier pour afficher le formulaire
     *****************************************************/
    public function modifier($id=0){

        $actu = Actualite::where("id",$id)->first();

        return view("modifier",compact("actu"));
    }
 
/*     public function delete(Request $request){

        $delete = Actualite::find($request->id);

        $delete->titre = $request->titre;

        $delete->detail = $request->detail;

        $delete->delete();
                        
        return back();
    } */

    public function delete($id=0){

        $delete = Actualite::find($id);

        $delete->delete();

        return back();
    }
}
