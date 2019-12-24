<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(\Illuminate\Support\Facades\DB::table('products')->count() > 0){
            return;
        }
        \App\Domains\Product\Product::create([
            'id' => 1,
            'name' => "にんじん",
            "category_id"=>1,
            'json_detail' => json_encode(
                array(
                    "name"=>"にんじん",
                    "category_id"=>1,
                    "memo"=>""
                )),
        ]);
        \App\Domains\Product\Product::create([
            'id' => 2,
            'name' => "たまねぎ",
            "category_id"=>1,
            'json_detail' => json_encode(
                array(
                    "name"=>"たまねぎ",
                    "category_id"=>1,
                    "memo"=>""
                )),
        ]);
        \App\Domains\Product\Product::create([
            'id' => 3,
            'name' => "じゃがいも",
            "category_id"=>1,
            'json_detail' => json_encode(
                array(
                    "name"=>"じゃがいも",
                    "category_id"=>1,
                    "memo"=>""
                )),
        ]);
        \App\Domains\Product\Product::create([
            'id' => 4,
            'name' => "鶏肉（むね）",
            "category_id"=>2,
            'json_detail' => json_encode(
                array(
                    "name"=>"鶏肉（むね）",
                    "category_id"=>1,
                    "memo"=>""
                )),
        ]);
        \App\Domains\Product\Product::create([
            'id' => 5,
            'name' => "豚肉",
            "category_id"=>2,
            'json_detail' => json_encode(
                array(
                    "name"=>"豚肉",
                    "category_id"=>1,
                    "memo"=>""
                )),
        ]);
        \App\Domains\Product\Product::create([
            'id' => 6,
            'name' => "ゴミ袋",
            "category_id"=>2,
            'json_detail' => json_encode(
                array(
                    "name"=>"ゴミ袋",
                    "category_id"=>1,
                    "memo"=>""
                )),
        ]);
    }
}
