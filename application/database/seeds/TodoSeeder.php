<?php

use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(\Illuminate\Support\Facades\DB::table('todo')->count() > 0){
            return;
        }
        \App\Domains\ToDo\ToDo::create([
            "product_id"=>1,
            "group_id"=>1,
            'json_detail' => json_encode(
                array(
                    "product_id"=>1,
                    "memo"=>""
                )),
        ]);
        \App\Domains\ToDo\ToDo::create([
            "product_id"=>2,
            "group_id"=>1,
            'json_detail' => json_encode(
                array(
                    "product_id"=>2,
                    "memo"=>""
                )),
        ]);
        \App\Domains\ToDo\ToDo::create([
            "product_id"=>2,
            "group_id"=>1,
            'json_detail' => json_encode(
                array(
                    "product_id"=>2,
                    "memo"=>""
                )),
        ]);
        \App\Domains\ToDo\ToDo::create([
            "product_id"=>4,
            "group_id"=>1,
            'json_detail' => json_encode(
                array(
                    "product_id"=>4,
                    "memo"=>""
                )),
        ]);
        \App\Domains\ToDo\ToDo::create([
            "product_id"=>5,
            "group_id"=>1,
            'json_detail' => json_encode(
                array(
                    "product_id"=>5,
                    "memo"=>""
                )),
        ]);
    }
}
