<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    public function category($id){
        $items=Item::where('category_id', $id)->get();
        return $items;
}
    public function index(){
        return Item::get();
    }

    public function store(Request $request){
        $filePath = $request->item_image->store('public');
        $filePath = '/storage'.str_replace('public','',$filePath); 
        // \Log::info($filePath);
        // \Log::info($request->name);

        Item::create([
            'name' => $request->name,
            'image_path'=>$filePath,
            'category_id'=>1,
        ]);
    }


}
