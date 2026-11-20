<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function index(){
         $books = Book::all();

        if ($books->isEmpty()){
            return response()->json([
                "suscess" => true,
                "message" => "Resource Data Not Found"
            ], 200);

        }


        return response()->json([
            "success" => true,
            "message" => "Get All Resource",
            "data" => $books
        ], 200);
    }



    public function store(Request $request){

    $bookvali = Validator::make($request->all(),[
        'title' => 'required|string|max:50',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'stock' => 'required|integer',
        'cover_photo' => 'required|image|mimes:jpeg,jpg,webp,png|max:2048',
        'genre_id' => 'required|exists:genres,id',
        'author_id' => 'required|exists:authors,id'

    ]);

    if ($bookvali -> fails()){
        return response()->json([
            "success" => false,
            "message" => $bookvali->errors()
        ],422);
        }

    $image = $request->file('cover_photo');
    $image->store('book','public');

    $book=Book::create([
        'title' => $request->title,
        'description' => $request->description,
        'price' => $request->price,
        'stock' => $request->stock,
        'cover_photo' => $image->hashName(),
        'genre_id' => $request->genre_id,
        'author_id' => $request->author_id,
    ]);

    return response() -> json([
        'success' => true,
        'message' => 'Resource added succesfully',
        'data' => $book
    ], 201);
}
}