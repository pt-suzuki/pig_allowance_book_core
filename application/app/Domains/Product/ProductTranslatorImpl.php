<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 17:57
 */

namespace App\Domains\Product;


use App\Domains\AbstractTranslator;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\Request;

class ProductTranslatorImpl extends AbstractTranslator implements ProductTranslator
{
    /**
     * @var AuthManager
     */
    private $auth;

    public function __construct(AuthManager $auth)
    {
        $this->auth = $auth;
    }

    public function parseRequestToSearchCriteria(Request $request): ProductSearchCriteria{
        $criteria = new ProductSearchCriteria();
        return $criteria;
    }

    public function parseRequestToModel(Request $request,string $id = null) : Product{
        $model = new Product();
        if($id != null){
            $model = Product::firstOrNew(["id"=> $id]);
        }
        return $model;
    }
}