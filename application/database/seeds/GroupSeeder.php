<?php

use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(\Illuminate\Support\Facades\DB::table('groups')->count() > 0){
            return;
        }
        \App\Domains\Group\Group::create([
            'id' => 1,
            'name' => "グループ1",
            'json_detail' => json_encode(
                array(
                    "name"=>"グループ1",
                    "memo"=>""
                )),
        ]);
        \App\Domains\Group\Group::create([
            'id' => 2,
            'name' => "グループ2",
            'json_detail' => json_encode(
                array(
                    "name"=>"グループ2",
                    "memo"=>""
                )),
        ]);
        \App\Domains\Group\Group::create([
            'id' => 3,
            'name' => "グループ3",
            'json_detail' => json_encode(
                array(
                    "name"=>"グループ3",
                    "memo"=>""
                )),
        ]);
    }
}
