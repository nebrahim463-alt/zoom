<?php

use App\Http\Controllers\API\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get("/allcategory",[CategoryController::class,"index"]);

Route::get("/category/show/{id}",[CategoryController::class,"show"]);

?>