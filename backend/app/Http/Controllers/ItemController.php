<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;
use Validator;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    public function disuseItems(Category $category){
        $items=Item::where([
            ['category_id', $category->id],
            ['is_unnecessary',1]
            ])->get();
            \Log::info($items);
        return $items;
    }

    public function index(){
        $items=Item::where([
            ['category_id', $category->id],
            ['is_unnecessary',0],
            ['want',0],
            ])->get();
            \Log::info($items);
        return $items;
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
        $item->user_id = Auth::user()->id;
        $item->name = $request->name;
        $item->image_path = $filePath;
        $item->category_id = 1;
        $item->disuse_month = $request->disuse_month;
        // use_atに追加時の時間を入力(nullだとItemUsageHistoryControllerでエラーが起こる)
        $item->itemUsageHistories->use_at = now();
        $item->save();
        return $item;
    }

    public function destroy(Item $item){
        //引数にモデルを渡すとルートパラメータには自動でプライマリキーが入る
        $item->delete();
    }
}
