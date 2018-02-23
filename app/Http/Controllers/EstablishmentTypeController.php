<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Establishment_type;

class EstablishmentTypeController extends Controller
{
    /**
     * Récuper tous les type d'établissement
     */
    public function all(){
        $establishment_type = EstablishmentType::all();

        return ;
    }
     /**
      * Affiche l'établissement selectionner
      */
    public function show($establishment_typeId){
        $establishment_type = EstablishmentType::find($establishment_typeId);
        return ;
    }

    /**
     * Affiche le formulaire pour la creation d'un nouveau type d'établissement
     */
    public function new(){
        return ;//affiche la vue du formulaire
    }

    /**
     * Enregistre un nouveau type d'établissement
     */
    public function create(Request $request){
        $input = $request->all();
        $establishment_type = new EstablishmentType();

        $establishment_type->name = $input['name'];
        $establishment_type->save();
        return ;
    }

    /**
     * Affiche le formulaire d'édition
     */
    public function edit($establishment_typeId){
        $establishment_type = EstablishmentType::find($establishment_typeId);
        return ;
    }

    /**
     * Met a jour le nom du type de l'établissement
     */
    public function update(Request $request,$establishment_typeId){
        EstablishmentType::find($establishment_typeId)->update($request->all());
        $establishment_type = EstablishmentType::find($establishment_typeId);
        $input = $request->all();

        $establishment_type->name = $request->$inpput['name'];
        $establishment_type->save();

        return ;
    }

    /**
     * Supprime le type d'établissement selectionner
     */
    public function destroy($establishment_typeId){
        $establishment_type = EstablishmentType::find($establishment_typeId);
        $establishment_type->delete();
        return ;
    }

}
