<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2020/05/24
 * Time: 0:40
 */

namespace App\Http\Actions\DropDown;


use App\Enums\Unit;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UnitDropDownAction
{
    public function __invoke(Request $request)
    {
        return new JsonResponse(Unit::getValueList());
    }
}