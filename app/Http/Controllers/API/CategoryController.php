<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(){
        $category = CategoryResource::collection( Category::all());
        $data=[
            "msg" => "Return All Data Of Category Table",
            "status" => 200,
            "categories" => $category
        ];
        return response()->json($data);

    }


    
}
