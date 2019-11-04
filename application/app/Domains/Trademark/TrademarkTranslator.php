<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 18:30
 */

namespace App\Domains\Trademark;

use Illuminate\Http\Request;

interface TrademarkTranslator
{
    public function parseRequestToSearchCriteria(Request $request): TrademarkSearchCriteria;

    public function parseRequestToModel(Request $request,string $id) : Trademark;
}