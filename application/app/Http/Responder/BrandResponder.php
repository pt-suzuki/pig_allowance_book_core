<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 22:05
 */

namespace App\Http\Responder;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class BrandResponder
{

    public function getResponse($data){

        return new JsonResponse($data,Response::HTTP_CONFLICT);
    }
}