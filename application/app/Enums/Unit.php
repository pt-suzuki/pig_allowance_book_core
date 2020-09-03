<?php
namespace App\Enums;

/**
 *
 *
 * @author takuya
 */
class Unit extends Enums
{
    const INDIVIDUAL = "1";
    const GRAM = "2";
    const ML = "3";

    const OTHER = "9999";

    public static function getValueList(): array
    {
        $list = array();
        $list[self::INDIVIDUAL] = array("code" => self::INDIVIDUAL,"value" => "個");
        $list[self::GRAM] = array("code" => self::GRAM,"value" => "g");
        $list[self::ML] = array("code" => self::ML,"value" => "ml");

        $list[self::OTHER] = array("code" => self::OTHER,"value" => "手入力");

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
            array_push($list,new Unit($item));
        }
        return $list;
    }
}

