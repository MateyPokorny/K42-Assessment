<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Character;

class RestController extends Controller
{
    public function ReturnAllRecords(){
        
        $characters = Character::with('nemesis.secrets')->get();    //get all characters records with their relations

        $characterAges = [];
        foreach($characters as $character) //populate $characterAges array
        {
            $characterAge = $character->born->diff(today())->y;
            array_push($characterAges,$characterAge);
        }

        $avgAge = array_sum($characterAges) / $characters->count();
        $avgWeight = $characters->avg('weight');
        $totalCharacters = $characters->count();

        $jsonResponse = [
            'avarage_age' => round($avgAge,0),
            'avarage_weight' => round($avgWeight,2),
            'total_characters' => $totalCharacters,
            'characters' => $characters,
        ];
    
        return response()->json($jsonResponse);
    }

    public function ReturnSingleCharacter($id){
        $character = Character::with(['nemesis.secrets'])->find($id);
 
        return response()->json($character);
    }
}
