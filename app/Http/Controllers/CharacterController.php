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
    

     public function save(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'author_id' => 'required',
            'published_date' => 'required|date',
            'book_image' => 'required'
        ]);
        $book = Book::create($request->all());
        return response()->json($book, 201);
    }
    
    
    
    public function update(Request $request, $id) {
        $book = Book::findOrFail($id);
    
        $this->validate($request, [
            'title' => 'required',
            'author_id' => 'required',
            'published_date' => 'required|date',
            'book_image' => 'required'
        ]);
        $book->update($request->all());
        return response()->json($book);
    }
    
    
    public function delete($id) {
        $book = Book::findOrFail($id);
        $book->delete();
        return response()->json(null, 204);
    }
    
}
