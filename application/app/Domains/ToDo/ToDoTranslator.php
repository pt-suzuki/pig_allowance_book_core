<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 18:04
 */

namespace App\Domains\ToDo;

use Illuminate\Http\Request;

interface ToDoTranslator
{
    public function parseRequestToSearchCriteria(Request $request): ToDoSearchCriteria;

    public function parseRequestToModel(Request $request,string $id) : ToDo;
}