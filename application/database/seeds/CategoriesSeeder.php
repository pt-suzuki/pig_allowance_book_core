<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(\Illuminate\Support\Facades\DB::table('categories')->count() > 0){
            return;
        }
        \App\Domains\Category\Category::create([
            'id' => 1,
            'name' => "野菜",
            'json_detail' => json_encode(
                array(
                    "name"=>"野菜",
                    "memo"=>""
                )),
        ]);
        \App\Domains\Category\Category::create([
            'id' => 2,
            'name' => "肉",
            'json_detail' => json_encode(
                array(
                    "name"=>"肉",
                    "memo"=>""
                )),
        ]);
        \App\Domains\Category\Category::create([
            'id' => 3,
            'name' => "日用品",
            'json_detail' => json_encode(
                array(
                    "name"=>"日用品",
                    "memo"=>""
                )),
        ]);

    }
}
