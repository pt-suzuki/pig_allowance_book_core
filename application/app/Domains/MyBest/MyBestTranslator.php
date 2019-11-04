<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 17:56
 */

namespace App\Domains\MyBest;


use Illuminate\Http\Request;

interface MyBestTranslator
{
    public function parseRequestToSearchCriteria(Request $request): MyBestSearchCriteria;

    public function parseRequestToModel(Request $request,string $id) : MyBest;
}