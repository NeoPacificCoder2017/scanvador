<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Establishment;

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
     * Affiche le formulaire pour la creation d'un nouvelle établissement
     */
    public function new(){
        return ;//affiché la vue du formulaire
    }

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
    public function update(Request $request,$establishmentId){
        Establishment::find($establishmentId)->update($request->all());
        $establishment = Establishment::find($establishmentId);
        $input = $request->all();

        $establishment->name = $request->$input['name'];
        $establishment->establishment_type_id = $request->$input['establishment_type_id'];

        $establishment->save();

        return ;
    }

    /**
     * Supprime l'établissement selectionner.
     */
    public function destroy($establishmentId){
        $establishment = Establishment::find($establishmentId);
        $establishment->delete();
        return ;
    }
}
