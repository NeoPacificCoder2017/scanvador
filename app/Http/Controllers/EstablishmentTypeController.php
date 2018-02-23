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
    
}
