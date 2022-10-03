<?php

use Illuminate\Database\Seeder;

class WantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'エクストラファインメリノタートルネックセーター（黒）',
            'category_id'=>'1',
            'category_name'=>'ファッション',
            'number'=>'1',
            'amount'=>'3000',
            'place'=>'ラック',
            'purchase_from'=>'UNIQLO',
        ];
        DB::table('wants')->insert($param);

        $param = [
            'name' => 'フラワーハンドプリントオーバーサイズクルーネックロングスリーブTシャツ',
            'category_id'=>'1',
            'category_name'=>'ファッション',
            'number'=>'1',
            'amount'=>'7920',
            'place'=>'ラック',
            'purchase_from'=>'Maison Special',
        ];
        DB::table('wants')->insert($param);

        $param = [
            'name' => 'タックテーパードパンツ（黒）',
            'category_id'=>'1',
            'category_name'=>'ファッション',
            'number'=>'1',
            'amount'=>'3990',
            'place'=>'ラック',
            'purchase_from'=>'UNIQLO',
        ];
        DB::table('wants')->insert($param);

        $param = [
            'name' => 'チェルシーブーツ',
            'category_id'=>'1',
            'category_name'=>'ファッション',
            'number'=>'1',
            'amount'=>'9990',
            'place'=>'靴箱',
            'purchase_from'=>'ZARA',
        ];
        DB::table('wants')->insert($param);

        $param = [
            'name' => 'ブロードシャツ',
            'category_id'=>'1',
            'category_name'=>'ファッション',
            'number'=>'1',
            'amount'=>'2990',
            'place'=>'ラック',
            'purchase_from'=>'無印良品',
        ];
        DB::table('wants')->insert($param);
    }
}
