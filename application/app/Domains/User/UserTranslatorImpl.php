<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 18:32
 */

namespace App\Domains\User;


use App\Domains\AbstractTranslator;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\Request;

class UserTranslatorImpl extends AbstractTranslator implements UserTranslator
{
    /**
     * @var AuthManager
     */
    private $auth;

    public function __construct(AuthManager $auth)
    {
        $this->auth = $auth;
    }

    public function parseRequestToSearchCriteria(Request $request): UserSearchCriteria{
        $criteria = new UserSearchCriteria();
        return $criteria;
    }

    public function parseRequestToModel(Request $request,string $id = null) : User{
        $model = new User();
        if($id != null){
            $model = User::firstOrNew(["id"=> $id]);
        }
        return $model;
    }
}