<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 18:01
 */

namespace App\Domains\Research;

use Illuminate\Auth\AuthManager;
use Illuminate\Http\Request;
use App\Domains\AbstractTranslator;

class ResearchTranslatorImpl extends AbstractTranslator implements ResearchTranslator
{
    /**
     * @var AuthManager
     */
    private $auth;

    public function __construct(AuthManager $auth)
    {
        $this->auth = $auth;
    }

    public function parseRequestToSearchCriteria(Request $request): ResearchSearchCriteria{
        $criteria = new ResearchSearchCriteria();
        return $criteria;
    }

    public function parseRequestToModel(Request $request,string $id = null) : Research{
        $model = new Research();
        if($id != null){
            $model = Research::firstOrNew(["id"=> $id]);
        }
        return $model;
    }
}