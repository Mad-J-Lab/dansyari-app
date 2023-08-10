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
            'user_id' => '1',
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
            'user_id' => '2',
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
            'user_id' => '1',
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
            'user_id' => '2',
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
            'user_id' => '1',
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
            'user_id' => '2',
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
            'user_id' => '1',
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
            'user_id' => '2',
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
            'user_id' => '1',
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
            'user_id' => '2',
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
            'user_id' => '1',
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
            'user_id' => '2',
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
            'user_id' => '1',
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
