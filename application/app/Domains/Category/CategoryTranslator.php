<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 17:54
 */

namespace App\Domains\Category;


use Illuminate\Http\Request;

interface CategoryTranslator
{
    public function parseRequestToSearchCriteria(Request $request): CategorySearchCriteria;

    public function parseRequestToModel(Request $request,string $id) : Category;
}