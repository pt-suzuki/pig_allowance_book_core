<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 18:32
 */

namespace App\Domains\User;


use Illuminate\Http\Request;

interface UserTranslator
{
    public function parseRequestToSearchCriteria(Request $request): UserSearchCriteria;

    public function parseRequestToModel(Request $request,string $id) : User;
}