<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChannelController extends Controller
{
    /**
     * Récuper les groupes de conversation
     */
    public function all(){
        $channel = Channel::all();
        return ;
    }

    /**
     * Affiche le groupe de conversation selectionner
     */
    public function show($channelId){
        $channel = Channel::find($channelId);
        return ;
    }

    /**
     * Affiche le formulaire pour la creation d'un groupe
     */
    public function new(){
        return ;//affichhé la vue du formulaire
    }

    /**
     * Enregistre le nouveau groupe de converstion
     */
    public function create(Request $request){
        $input = $request->all();
        $channel = new Channel();
        $channel->name = $input['name'];
        $channel->save();

        return ;
    }

    /**
     * Affiche le formulaire d'édition
     */
    public function edit($channelId){
        $channel = Channel::find($channelId);
        return ;
    }

    /**
     * Met a jours le nom du groupe de conversation
     */
    public function update(Request $request, $channelId){
        Channel::find($channelId)->update($request->all());
        $channel = Channel::find($channelId);
        $input = $request->all();
        $channel->name = $request->input['name'];
        $channel->save();

        return ;
    }

    /**
     * Supprime le groupe de conversation selectionner
     */
    public function destroy($channelId){
        $channel = Channel::find($channelId);
        $channel->delete();

        return ;
    }
}
