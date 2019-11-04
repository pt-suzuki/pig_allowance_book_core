<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 18:03
 */

namespace App\Domains\Shop;

use Illuminate\Http\Request;

interface ShopTranslator
{
    public function parseRequestToSearchCriteria(Request $request): ShopSearchCriteria;

    public function parseRequestToModel(Request $request,string $id) : Shop;
}