<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2020/05/24
 * Time: 0:41
 */

namespace App\Http\Actions\DropDown;


use App\Enums\TaxType;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TaxTypeDropDownAction
{
    public function __invoke(Request $request)
    {
        return new JsonResponse(TaxType::getValueList());
    }
}