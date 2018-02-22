<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EstablishmentController extends Controller
{
    /**
     * Récupèr tous les établissement
     */
    public function all() {

        $establishment = Establishment::all();
 
        return ;
     }

     /**
      * Affiche l'établissement selectionner
      */
    public function show($establishmentId){
        $establishment = Establishment::find($establishmentId);
        return ;
    }
     /**
      * Enregistre un nouvelle établissement
      */
      public function new(Request $request){
        $input = $request->all();

        $establishment = new Establishment();

        $establishment->name = $input['name'];
        $establishment->save();
        return ;
      }
}
