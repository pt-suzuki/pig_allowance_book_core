<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 17:53
 */

namespace App\Domains\Group;


use App\Domains\AbstractTranslator;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\Request;

class GroupTranslatorImpl extends AbstractTranslator implements GroupTranslator
{
    /**
     * @var AuthManager
     */
    private $auth;

    public function __construct(AuthManager $auth)
    {
        $this->auth = $auth;
    }

    public function parseRequestToSearchCriteria(Request $request): GroupSearchCriteria{
        $criteria = new GroupSearchCriteria();
        if(!empty($request->input("name"))){
            $criteria->setName($request->input("name"));
        }
        return $this->parseRequestToAbstractCriteria($request,$criteria);
    }

    public function parseRequestToModel(Request $request,string $id = null) : Group{
        $model = new Group();
        if($id != null){
            $model = Group::firstOrNew(["id"=> $id]);
        }
        return $model;
    }
}