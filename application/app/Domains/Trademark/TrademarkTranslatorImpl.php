<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 18:05
 */

namespace App\Domains\Trademark;

use Illuminate\Auth\AuthManager;
use Illuminate\Http\Request;

use App\Domains\AbstractTranslator;

class TrademarkTranslatorImpl extends AbstractTranslator implements TrademarkTranslator
{
    /**
     * @var AuthManager
     */
    private $auth;

    public function __construct(AuthManager $auth)
    {
        $this->auth = $auth;
    }

    public function parseRequestToSearchCriteria(Request $request): TrademarkSearchCriteria{
        $criteria = new TrademarkSearchCriteria();
        return $criteria;
    }

    public function parseRequestToModel(Request $request,string $id = null) : Trademark{
        $model = new Trademark();
        if($id != null){
            $model = Trademark::firstOrNew(["id"=> $id]);
        }
        return $model;
    }
}