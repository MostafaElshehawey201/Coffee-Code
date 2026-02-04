<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    // public function index()
    // {
    //     $categories = category::with('translations')->get()->map(function($cat){
    //         return [
    //             'id' => $cat->id,
    //             'is_active' => $cat->is_active,
    //             'title' => $cat->translate('title'),
    //             'body' => $cat->translate('body'),
    //         ];
    //     });

    //     return response()->json($categories);
    // }
}
