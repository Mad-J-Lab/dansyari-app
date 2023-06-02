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


}
