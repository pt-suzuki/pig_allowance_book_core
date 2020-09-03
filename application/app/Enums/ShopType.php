<?php
namespace App\Enums;

/**
 *
 *
 * @author takuya
 */
class ShopType extends Enums
{
    const RETAIL = "1";
    const SUPERMARKET = "2";
    const DEPARTMENT_STORE = "3";
    const DISCOUNT_STORE = "4";
    const PHARMACY = "5";
    const UNIFORMITY = "6";
    const ELECTRICAL_SHOP = "7";
    const MARKET = "8";
    const STREET_STALL = "9";
    const STATIONERY_SHOP = "10";
    const HOME_CENTER = "11";

    const OTHER = "9999";

    public static function getValueList(): array
    {
        $list = array();
        $list[self::RETAIL] = array("code" => self::RETAIL,"value" => "小売店");
        $list[self::SUPERMARKET] = array("code" => self::SUPERMARKET,"value" => "スーパー");
        $list[self::DEPARTMENT_STORE] = array("code" => self::DEPARTMENT_STORE,"value" => "デパート");
        $list[self::DISCOUNT_STORE] = array("code" => self::DISCOUNT_STORE,"value" => "ディスカウントストア");
        $list[self::PHARMACY] = array("code" => self::PHARMACY,"value" => "薬局");
        $list[self::UNIFORMITY] = array("code" => self::UNIFORMITY,"value" => "均一店");
        $list[self::ELECTRICAL_SHOP] = array("code" => self::UNIFORMITY,"value" => "電気屋");
        $list[self::MARKET] = array("code" => self::UNIFORMITY,"value" => "市場");
        $list[self::STREET_STALL] = array("code" => self::UNIFORMITY,"value" => "露店");
        $list[self::STATIONERY_SHOP] = array("code" => self::STATIONERY_SHOP,"value" => "文房具");
        $list[self::HOME_CENTER] = array("code" => self::HOME_CENTER,"value" => "ホームセンター");

        $list[self::OTHER] = array("code" => self::OTHER,"value" => "その他");

        return $list;
    }

    public function getCode(){
        return $this->list[$this->valueOf()]["code"];
    }

    public function getMessage(){
        return $this->list[$this->valueOf()]["message"];
    }

    /**
     * @return array
     * @throws \ReflectionException
     */
    public static function getList(): array{
        $list = array();
        $reflect = new \ReflectionClass(self::class);
        $const_arr = $reflect->getConstants();
        foreach ($const_arr as $item){
            array_push($list,new ShopType($item));
        }
        return $list;
    }
}

