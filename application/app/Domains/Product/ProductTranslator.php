<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 17:57
 */

namespace App\Domains\Product;


use Illuminate\Http\Request;

interface ProductTranslator
{
    public function parseRequestToSearchCriteria(Request $request): ProductSearchCriteria;

    public function parseRequestToModel(Request $request,string $id = null) : Product;
}