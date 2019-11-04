<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 17:54
 */

namespace App\Domains\Category;


use App\Domains\AbstractTranslator;
use \Illuminate\Http\Request;
use Illuminate\Auth\AuthManager;

class CategoryTranslatorImpl extends AbstractTranslator implements CategoryTranslator
{
    /**
     * @var AuthManager
     */
    private $auth;

    public function __construct(AuthManager $auth)
    {
        $this->auth = $auth;
    }

    public function parseRequestToSearchCriteria(Request $request): CategorySearchCriteria{
        $criteria = new CategorySearchCriteria();
        return $criteria;
    }

    public function parseRequestToModel(Request $request,string $id = null) : Category{
        $model = new Category();
        if($id != null){
            $model = Category::firstOrNew(["id"=> $id]);
        }
        return $model;
    }
}