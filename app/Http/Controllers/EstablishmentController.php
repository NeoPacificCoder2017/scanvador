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
     * 
     */
     /**
      * Enregistre un nouvelle établissement
      */
    public function create(Request $request){
        $input = $request->all();

        $establishment = new Establishment();

        $establishment->name = $input['name'];
        $establishment->save();
        return ;
      }

      /**
       * affiche le formulaire d'édition
       */
    public function edit($establishmentId){
          $establishment = Establishment::find($establishmentId);
          return ;
      }

      /**
       * Met a jours le nom et le type de l'établissement
       */
    public function update(){

    }

}
