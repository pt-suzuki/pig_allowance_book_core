<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 18:00
 */

namespace App\Domains\Purchase;

use Illuminate\Http\Request;

interface PurchaseTranslator
{
    public function parseRequestToSearchCriteria(Request $request): PurchaseSearchCriteria;

    public function parseRequestToModel(Request $request,string $id) : Purchase;
}