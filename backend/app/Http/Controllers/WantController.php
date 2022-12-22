<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Want;

class WantController extends Controller
{
    public function category($id){
        $wants=Want::where('category_id', $id)->get();
        return $wants;
        // \Log::info('a');
        // return  Want::with('category')->get();
    }
    public function store(Request $request){
        $filePath = $request->item_image->store('public');
        $filePath = '/storage'.str_replace('public','',$filePath); 
        \Log::info($filePath);
        \Log::info($request->name);

        Want::create([
            'name' => $request->name,
            'image_path'=>$filePath,
            'category_id'=>1,
        ]);
    }
}
