<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 18:03
 */

namespace App\Domains\Shop;


use Illuminate\Auth\AuthManager;
use Illuminate\Http\Request;
use App\Domains\AbstractTranslator;

class ShopTranslatorImpl extends AbstractTranslator implements ShopTranslator
{
    /**
     * @var AuthManager
     */
    private $auth;

    public function __construct(AuthManager $auth)
    {
        $this->auth = $auth;
    }

    public function parseRequestToSearchCriteria(Request $request): ShopSearchCriteria{
        $criteria = new ShopSearchCriteria();
        $criteria->setRows(empty($request->input("rows")) ? 50 :
            $request->input("rows"));

        return $criteria;
    }

    public function parseRequestToModel(Request $request,string $id = null) : Shop{
        $model = new Shop();
        if($id != null){
            $model = Shop::firstOrNew(["id"=> $id]);
        }
        return $model;
    }
}