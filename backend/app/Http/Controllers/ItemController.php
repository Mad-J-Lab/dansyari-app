<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use Validator;

class ItemController extends Controller
{
    public function category($id){
        $items=Item::where('category_id', $id)->get();
        return $items;
    }

    public function disuseItems($id){
        $items=Item::where([
            ['category_id', $id],
            ['is_unnecessary','true']
            ])->get();
        return $items;
    }

    public function index(){
        return Item::get();
    }

    public function store(Request $request){
        $filePath = $request->item_image->store('public');
        $filePath = '/storage'.str_replace('public','',$filePath); 
        \Log::info($filePath);
        \Log::info($request->name);

            
        //$disuse_monthに制限を追加
        $validator = Validator::make($request->all(),[
            'disuse_month' => 'numeric|between:1,24'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        $item = new Item;
        $item->name = $request->name;
        $item->image_path = $filePath;
        $item->category_id = 1;
        $item->disuse_month = $request->disuse_month;
        // use_atに追加時の時間を入力(nullだとItemUsageHistoryControllerでエラーが起こる)
        $item->itemUsageHistories->use_at = now();
        $item->save();
        return $item;
    }



}
