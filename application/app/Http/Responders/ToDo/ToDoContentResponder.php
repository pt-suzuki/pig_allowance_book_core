<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 17:38
 */

namespace App\Http\Responders\ToDo;

use App\Enums\ErrorCode;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ToDoContentResponder
{
    public function getResponse($data){
        if($data == null){
            return new JsonResponse(array("result_status" => "3",
                "message"=>array(ErrorCode::getValueList()[ErrorCode::UNKNOWN_ERROR]),
                "result_data"=>[]), Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return new JsonResponse(array("result_status" => "0",
            "message"=>[],
            "result_data"=>$data), Response::HTTP_OK);
    }
}