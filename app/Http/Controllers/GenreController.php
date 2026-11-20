<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenreController extends Controller
{
     public function index(){
        $genres = Genre::all();

        return response()->json([
            "success" => true,
            "message" => "Get All Resource",
            "data" => $genres
        ], 200);
    }

     public function store(Request $request){

    $genrevali = Validator::make($request->all(),[
        'name' => 'required|string|max:50',
        'description' => 'required|string',
        

    ]);

    if ($genrevali -> fails()){
        return response()->json([
            "success" => false,
            "message" => $genrevali->errors()
        ],422);
        }

   

    $genre=Genre::create([
        'name' => $request->name,
        'description' => $request->description,
        
    ]);

    return response() -> json([
        'success' => true,
        'message' => 'Resource added succesfully',
        'data' => $genre
    ], 201);
}
}
