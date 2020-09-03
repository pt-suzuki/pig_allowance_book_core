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
use Illuminate\Support\Facades\Log;

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
        $criteria->setRows(empty($request->input("rows")) ? 50 :
            $request->input("rows"));
        if(!empty($request->input("name"))){
            $criteria->setName($request->input("name"));
        }
        return $criteria;
    }

    public function parseRequestToModel(Request $request,string $id = null) : Product{
        $model = new Product();
        if($id != null){
            $model = Product::firstOrNew(["id"=> $id]);
        }

        $model->name = $request->input("name");
        $model->category_id = $request->input("category_id");
        $model->unit = $request->input("unit");

        $model->json_detail = json_encode($request->all());
        return $model;
    }
}