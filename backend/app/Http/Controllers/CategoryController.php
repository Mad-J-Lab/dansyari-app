<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
        return Category::all();
    }
    public function store(Request $request){
        Category::create([
            'name' => $request->name,
        ]);
    }
    public function show(Category $category){
        return $category;
    }
    public function update(Request $request, Category $category){
        $category->update($request->all());
        return $category;
    }
}
