<?php
namespace App\Enums;

/**
 *
 *
 * @author takuya
 */
class TaxType extends Enums
{
    const INCLUDED = "1";
    const EXCLUDED = "2";

    public static function getValueList(): array
    {
        $list = array();
        $list[self::INCLUDED] = array("code" => self::INCLUDED,"value" => "税込");
        $list[self::EXCLUDED] = array("code" => self::EXCLUDED,"value" => "税抜");

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
            array_push($list,new TaxType($item));
        }
        return $list;
    }
}

