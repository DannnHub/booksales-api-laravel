<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenreController extends Controller
{
    public function index() {
        $genres = Genre::all();

        if ($genres->isEmpty()){
            return response()->json([
                "success" => true,
                "message" => "Genres data not found!"
            ], 200);
        }

        return response()->json([
            "success" => true,
            "message" => "Get all resources",
            "data" => $genres
        ], 200);
    }

    public function store(Request $request) {
    //1. validator
    $validator = Validator::make ($request->all(),[
        'name' => 'required|string|max: 69',
        'description' => 'required|string',
        ]);

    //2. check validator error
    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => $validator->errors()
        ], 422);
        }
    
    //3. genre tanpa image

    //4. insert data
    $genre = Genre::create([
    'name' => $request->name,
    'description' => $request->description,
        ]);

    //5. response
    return response()->json([
        "success" => true,
        "message" => "Resources added succesfully!",
        "data" => $genre
        ], 201);
    }
}
