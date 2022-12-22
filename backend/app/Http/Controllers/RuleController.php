<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rule;
use App\Category;

class RuleController extends Controller
{
    public function index(){
        $categories = Category::with('rules')->get();
        return $categories;
    }

    public function store(Request $request){
        Rule::create([
            'text' => $request->text,
        ]);
    }
}
