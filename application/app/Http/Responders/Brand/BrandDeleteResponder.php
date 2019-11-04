<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 22:05
 */

namespace App\Http\Responders\Brand;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class BrandDeleteResponder
{
    public function getResponse($data){
        return new JsonResponse($data,Response::HTTP_OK);
    }
}