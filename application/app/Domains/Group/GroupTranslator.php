<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 17:53
 */

namespace App\Domains\Group;


use Illuminate\Http\Request;

interface GroupTranslator
{
    public function parseRequestToSearchCriteria(Request $request): GroupSearchCriteria;

    public function parseRequestToModel(Request $request,string $id) : Group;
}