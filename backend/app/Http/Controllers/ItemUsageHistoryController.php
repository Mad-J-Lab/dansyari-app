<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\ItemUsageHistory;
use Illuminate\Support\Facades\DB;

class ItemUsageHistoryController extends Controller
{
    public function recordTime(Request $request){
        $history = new ItemUsageHistory;
        $history->use_at = now();
        $history->item_id = $request->item_id;
        $history->save();
        return $history;
    }
    public function recordNull(Request $request){
        $history = new ItemUsageHistory;
        $history->item_id = $request->item_id;
        $history->save();
        return $history;
    }

    public function items(){
        $date_3_month_ago = date('Y-m-d H:i:s',strtotime("-3 month"));

        // dd($date_3_month_ago);

        //3ヶ月以内に使用したitem
        $items_within_3month = Item::with('latestItemUsageHistory')->whereHas('itemUsageHistories', function ($query) use ($date_3_month_ago) {
            $query->where('use_at','>', $date_3_month_ago);
        })->get();

        // dd($items_within_3month);


        //joinは一対多の際は注意する
        //dstinkt
        // ->leftJoin('item_usage_histories', 'items.id', '=', 'item_usage_histories.item_id' )
        // ->select('items.id','use_at','item_id')
        // ->groupBy('item_id')
        // ->orderBy('item_usage_histories.use_at', 'asc')
        
        //ソート済みコレクションはオリジナル配列のキーを保持しますので、valuesメソッドにより、連続した数字のインデックスにするためリセットしています。
        $items_asc = $items_within_3month->sortBy('latestItemUsageHistory.use_at')->values()->take(5);
        
        // dd($items_asc);

        return $items_asc;

        // User::whereHas('project', function ($query) use ($request) {
        //     $query->where('organization_id', $request->organization_id)});
        //     ->get();
            //useは変数を呼び出すための記述
    }
}
