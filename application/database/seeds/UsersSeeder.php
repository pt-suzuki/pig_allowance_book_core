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
        DB::statement("select setval ('users_id_seq', 1, false);");

        \App\Domains\User\User::create([
            'name' => "鈴木拓也",
            'email' => "tk.suzuki.lcg3@gmail.com",
            'password' => \Illuminate\Support\Facades\Hash::make('pass'),
            'json_detail' => json_encode(
                array(
                    "name"=>"鈴木拓也",
                    'email' => "tk.suzuki.lcg3@gmail.com",
                )
            )
        ]);

        \App\Domains\User\User::create([
            'name' => "坂本糸穂莉",
            'email' => "boo.k369vv@gmail.com",
            'password' => \Illuminate\Support\Facades\Hash::make('pass'),
            'json_detail' => json_encode(
                array(
                    "name"=>"坂本糸穂莉",
                    'email' => "boo.k369vv@gmail.com",
                )
            )
        ]);

        for($i = 1; $i <= 10; $i++){
            $name = "デモ管理者" . $i;
            $email  = $faker->unique()->safeEmail;
            \App\Domains\User\User::create([
                'name' => $name,
                'email' => $email,
                'password' => \Illuminate\Support\Facades\Hash::make('pass'),
                'json_detail' => json_encode(
                    array(
                        "name"=>$name,
                        'email' => $email,
                    )
                )
            ]);
        }
    }
}
