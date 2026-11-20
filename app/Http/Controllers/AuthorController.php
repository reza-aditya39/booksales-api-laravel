<?php

namespace App\Http\Controllers;


use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
    public function index(){
         $authors = Author::all();


        return response()->json([
            "success" => true,
            "message" => "Get All Resource",
            "data" => $authors
        ], 200);
    }

    public function store(Request $request){

    $authorvali = Validator::make($request->all(),[
        'name' => 'required|string|max:50',
        'cover_photo' => 'required|image|mimes:jpeg,jpg,webp,png|max:2048',
        'bio' => 'required|string'
        
        

    ]);

    if ($authorvali -> fails()){
        return response()->json([
            "success" => false,
            "message" => $authorvali->errors()
        ],422);
        }

        $image = $request->file('cover_photo');
        $image->store('book','public');

    $author=Author::create([
        'name' => $request->name,
        'cover_photo' => $image->hashName(),
        'bio' => $request->bio,
        
    ]);

    return response() -> json([
        'success' => true,
        'message' => 'Resource added succesfully',
        'data' => $author
    ], 201);
}
}
