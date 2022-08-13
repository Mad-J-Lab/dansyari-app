<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'ファッション'
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => '家具'
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => '家電'
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => '日用品'
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => '書籍'
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => 'インテリア'
        ];
        DB::table('categories')->insert($param);
    }
}
