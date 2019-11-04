<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 17:56
 */

namespace App\Domains\MyBest;


use App\Domains\AbstractTranslator;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\Request;

class MyBestTranslatorImpl extends AbstractTranslator implements MyBestTranslator
{
    /**
     * @var AuthManager
     */
    private $auth;

    public function __construct(AuthManager $auth)
    {
        $this->auth = $auth;
    }

    public function parseRequestToSearchCriteria(Request $request): MyBestSearchCriteria{
        $criteria = new MyBestSearchCriteria();
        return $criteria;
    }

    public function parseRequestToModel(Request $request,string $id = null) : MyBest{
        $model = new MyBest();
        if($id != null){
            $model = MyBest::firstOrNew(["id"=> $id]);
        }
        return $model;
    }
}