<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'ミラノリブクルーネックセーター',
            'category_id'=>'1',
            'category_name'=>'ファッション',
            'number'=>'1',
            'amount'=>'3000',
            'place'=>'ラック',
            'purchase_from'=>'UNIQLO',
            'disuse_month'=>1,
            'image_path'=>'/storage/us6YYOgrKLmKac5srwHQ4CpaUWUjidsqxk2leuhl.jpg',
        ];
        DB::table('items')->insert($param);
        $param = [
            'name' => 'テストデータ2',
            'category_id'=>'2',
            'category_name'=>'日用品',
            'number'=>'1',
            'amount'=>'5000',
            'place'=>'test',
            'purchase_from'=>'test',
            'image_path'=>'',
            'disuse_month'=>2,
        ];
        DB::table('items')->insert($param);
        $param = [
            'name' => 'テストデータ3',
            'category_id'=>'2',
            'category_name'=>'日用品',
            'number'=>'1',
            'amount'=>'5000',
            'place'=>'test',
            'purchase_from'=>'test',
            'image_path'=>'',
            'disuse_month'=>3,
        ];
        DB::table('items')->insert($param);
        $param = [
            'name' => 'テストデータ4',
            'category_id'=>'2',
            'category_name'=>'日用品',
            'number'=>'1',
            'amount'=>'5000',
            'place'=>'test',
            'purchase_from'=>'test',
            'image_path'=>'',
            'disuse_month'=>4,
        ];
        DB::table('items')->insert($param);
        $param = [
            'name' => 'テストデータ5',
            'category_id'=>'2',
            'category_name'=>'日用品',
            'number'=>'1',
            'amount'=>'5000',
            'place'=>'test',
            'purchase_from'=>'test',
            'image_path'=>'',
            'disuse_month'=>5,
        ];
        DB::table('items')->insert($param);
        $param = [
            'name' => 'テストデータ6',
            'category_id'=>'2',
            'category_name'=>'日用品',
            'number'=>'1',
            'amount'=>'5000',
            'place'=>'test',
            'purchase_from'=>'test',
            'image_path'=>'',
            'disuse_month'=>1,
        ];
        DB::table('items')->insert($param);
        $param = [
            'name' => 'テストデータ7',
            'category_id'=>'2',
            'category_name'=>'日用品',
            'number'=>'1',
            'amount'=>'5000',
            'place'=>'test',
            'purchase_from'=>'test',
            'image_path'=>'',
            'disuse_month'=>2,
        ];
        DB::table('items')->insert($param);
        $param = [
            'name' => 'テストデータ8',
            'category_id'=>'2',
            'category_name'=>'日用品',
            'number'=>'1',
            'amount'=>'5000',
            'place'=>'test',
            'purchase_from'=>'test',
            'image_path'=>'',
            'disuse_month'=>3,
        ];
        DB::table('items')->insert($param);
        $param = [
            'name' => 'テストデータ9',
            'category_id'=>'2',
            'category_name'=>'日用品',
            'number'=>'1',
            'amount'=>'5000',
            'place'=>'test',
            'purchase_from'=>'test',
            'image_path'=>'',
            'disuse_month'=>4,
        ];
        DB::table('items')->insert($param);
        $param = [
            'name' => 'テストデータ10',
            'category_id'=>'2',
            'category_name'=>'日用品',
            'number'=>'1',
            'amount'=>'5000',
            'place'=>'test',
            'purchase_from'=>'test',
            'image_path'=>'',
            'disuse_month'=>5,
        ];
        DB::table('items')->insert($param);
        $param = [
            'name' => 'テストデータ11',
            'category_id'=>'2',
            'category_name'=>'日用品',
            'number'=>'1',
            'amount'=>'5000',
            'place'=>'test',
            'purchase_from'=>'test',
            'image_path'=>'',
            'disuse_month'=>1,
        ];
        DB::table('items')->insert($param);
        $param = [
            'name' => 'テストデータ12',
            'category_id'=>'2',
            'category_name'=>'日用品',
            'number'=>'1',
            'amount'=>'5000',
            'place'=>'test',
            'purchase_from'=>'test',
            'image_path'=>'',
            'disuse_month'=>2,
        ];
        DB::table('items')->insert($param);
        $param = [
            'name' => 'テストデータ13',
            'category_id'=>'2',
            'category_name'=>'日用品',
            'number'=>'1',
            'amount'=>'5000',
            'place'=>'test',
            'purchase_from'=>'test',
            'image_path'=>'',
            'disuse_month'=>3,
        ];
        DB::table('items')->insert($param);
    }
}
