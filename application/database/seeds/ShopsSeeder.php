<?php

use Illuminate\Database\Seeder;

class ShopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(\Illuminate\Support\Facades\DB::table('shops')->count() > 0){
            return;
        }
        $name = "イオン 久里浜店";
        $lat = 35.229184;
        $long = 139.704060;
        $address = "〒239-0831 神奈川県横須賀市久里浜５丁目１３−１";

        \App\Domains\Shop\Shop::create([
            "name"=>$name,
            "lat"=>$lat,
            "long"=>$long,
            "payment_type"=>"",
            "card_type"=>"",
            "shop_type"=>\App\Enums\ShopType::DEPARTMENT_STORE,
            "address"=>$address,
            'json_detail' => json_encode(
                array(
                    "name"=>$name,
                    "lat"=>$lat,
                    "long"=>$long,
                    "payment_type"=>"",
                    "card_type"=>"",
                    "shop_type"=>\App\Enums\ShopType::DEPARTMENT_STORE,
                    "address"=>$address,
                    "memo"=>"",
                )),
        ]);

        $name = "吉田青果店";
        $lat = 35.230025;
        $long = 139.703318;
        $address = "〒239-0831 神奈川県横須賀市久里浜４丁目６−４";

        \App\Domains\Shop\Shop::create([
            "name"=>$name,
            "lat"=>$lat,
            "long"=>$long,
            "payment_type"=>"",
            "card_type"=>"",
            "shop_type"=>\App\Enums\ShopType::GREENGROCERY,
            "address"=>$address,
            'json_detail' => json_encode(
                array(
                    "name"=>$name,
                    "lat"=>$lat,
                    "long"=>$long,
                    "payment_type"=>"",
                    "card_type"=>"",
                    "shop_type"=>\App\Enums\ShopType::GREENGROCERY,
                    "address"=>$address,
                    "memo"=>"",
                )),
        ]);
    }
}
