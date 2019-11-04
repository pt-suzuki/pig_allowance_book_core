<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 18:00
 */

namespace App\Domains\Purchase;

use Illuminate\Auth\AuthManager;
use Illuminate\Http\Request;
use App\Domains\AbstractTranslator;

class PurchaseTranslatorImpl extends AbstractTranslator implements PurchaseTranslator
{
    /**
     * @var AuthManager
     */
    private $auth;

    public function __construct(AuthManager $auth)
    {
        $this->auth = $auth;
    }

    public function parseRequestToSearchCriteria(Request $request): PurchaseSearchCriteria
    {
        $criteria = new PurchaseSearchCriteria();
        return $criteria;
    }

    public function parseRequestToModel(Request $request,string $id = null) : Purchase{
        $model = new Purchase();
        if($id != null){
            $model = Purchase::firstOrNew(["id"=> $id]);
        }
        return $model;
    }
}