<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 21:54
 */

namespace App\Domains\Brand;

use Illuminate\Http\Request;

interface BrandTranslator
{
    public function parseRequestToSearchCriteria(Request $request): BrandSearchCriteria;

    public function parseRequestToModel(Request $request,string $id = null) : Brand;
}