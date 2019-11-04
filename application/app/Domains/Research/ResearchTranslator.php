<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 18:01
 */

namespace App\Domains\Research;

use Illuminate\Http\Request;

interface ResearchTranslator
{
    public function parseRequestToSearchCriteria(Request $request): ResearchSearchCriteria;

    public function parseRequestToModel(Request $request,string $id) : Research;
}