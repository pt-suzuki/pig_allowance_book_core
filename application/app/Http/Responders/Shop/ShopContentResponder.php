<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 17:38
 */

namespace App\Http\Responders\Shop;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ShopContentResponder
{
    public function getResponse($data){
        return new JsonResponse($data,Response::HTTP_OK);
    }
}