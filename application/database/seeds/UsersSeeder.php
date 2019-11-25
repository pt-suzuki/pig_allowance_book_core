<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $key = "デモ管理者1";
        if(DB::table('users')->where("name","=",$key)->count() > 0){
            return;
        }
        $faker = Faker\Factory::create('ja_JP');
        DB::statement("select setval ('users_id_seq', (select max(id) + 1 from users), false);");

        for($i = 1; $i <= 10; $i++){
            \App\Domains\User\User::create([
                'name' => "デモ管理者" . $i,
                'email' => $faker->unique()->safeEmail,
                'password' => \Illuminate\Support\Facades\Hash::make('pass'),
                'json_detail' => '{}'
            ]);
        }
    }
}
