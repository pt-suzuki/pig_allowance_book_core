<?php

use Illuminate\Database\Seeder;

class GroupRelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(\Illuminate\Support\Facades\DB::table('group_relations')->count() > 0){
            return;
        }
        \App\Domains\Group\GroupRelation::create([
            'user_id' => 1,
            'group_id' => 1,
            'role' => 1,
        ]);
        \App\Domains\Group\GroupRelation::create([
            'user_id' => 2,
            'group_id' => 1,
            'role' => 1,
        ]);
        \App\Domains\Group\GroupRelation::create([
            'user_id' => 2,
            'group_id' => 2,
            'role' => 1,
        ]);
        \App\Domains\Group\GroupRelation::create([
            'user_id' => 1,
            'group_id' => 3,
            'role' => 1,
        ]);
    }
}
