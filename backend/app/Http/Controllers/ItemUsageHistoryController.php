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

        //3ヶ月以内に使用したitem
        $items_within_3month = Item::with('latestItemUsageHistory')->whereHas('itemUsageHistories', function ($query) use ($date_3_month_ago) {
            $query->where('use_at','>', $date_3_month_ago);
        })->get();

        //使用履歴が古い順に5つ取得
        $items_asc = $items_within_3month->sortBy('latestItemUsageHistory.use_at')->values()->take(5);
        //ソート済みコレクションはオリジナル配列のキーを保持しますので、valuesメソッドにより、連続した数字のインデックスにするためリセットしています。
        
        return $items_asc;

        // 参考
        // User::whereHas('project', function ($query) use ($request) {
        //     $query->where('organization_id', $request->organization_id)});
        //     ->get();
        // useは変数を呼び出すための記述
    }
}
