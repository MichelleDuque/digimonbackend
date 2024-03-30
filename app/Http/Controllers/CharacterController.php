<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Character;


class CharacterController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function getAll() {
        $characters = Character::join('trainers', 'characters.trainer', '=', 'trainers.id')
            ->join('evolutions', 'characters.evolution', '=', 'evolutions.id')
            ->select('characters.id', 'fullname', 'photo', 'description', 'name', 'evolution_name', 'image')
            ->get();
    
        return response()->json($characters);
    }

    public function getOne($id) {
        $character = Character::join('trainers', 'characters.trainer', '=', 'trainers.id')
            ->join('evolutions', 'characters.evolution', '=', 'evolutions.id')
            ->select('characters.id', 'fullname', 'photo', 'description', 'name', 'evolution_name', 'image')
            ->where('characters.id', '=', $id)
            ->get();
    
        return response()->json($character);
    }
    
    
}
