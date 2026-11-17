<?php

namespace App\Http\Controllers;


use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){
        $authormodel = new Author();
        $authors = $authormodel->getAuthors();

        return view('author',['authors' => $authors]);
    }
}
