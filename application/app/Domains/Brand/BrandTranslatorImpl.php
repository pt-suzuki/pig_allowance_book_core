<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/10/20
 * Time: 21:55
 */

namespace App\Domains\Brand;


use App\Domains\AbstractTranslator;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\Request;

class BrandTranslatorImpl extends AbstractTranslator implements BrandTranslator
{
    /**
     * @var AuthManager
     */
    private $auth;

    public function __construct(AuthManager $auth)
    {
        $this->auth = $auth;
    }

    public function parseRequestToSearchCriteria(Request $request): BrandSearchCriteria{
        $criteria = new BrandSearchCriteria();

        if(!empty($request->input("name"))){
            $criteria->setName($request->input("name"));
        }

        return $this->parseRequestToAbstractCriteria($request,$criteria);
    }

    public function parseRequestToModel(Request $request,string $id = null) : Brand{
        $model = new Brand();
        if($id != null){
            $model = Brand::firstOrNew(["id"=> $id]);
        }
        return $model;
    }
}