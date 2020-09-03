<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 18:04
 */

namespace App\Domains\ToDo;

use Illuminate\Auth\AuthManager;
use Illuminate\Http\Request;
use App\Domains\AbstractTranslator;
use Illuminate\Support\Facades\Log;

class ToDoTranslatorImpl extends AbstractTranslator implements ToDoTranslator
{
    /**
     * @var AuthManager
     */
    private $auth;

    public function __construct(AuthManager $auth)
    {
        $this->auth = $auth;
    }

    public function parseRequestToSearchCriteria(Request $request): ToDoSearchCriteria{
        $criteria = new ToDoSearchCriteria();
        $criteria->setRows(empty($request->input("rows")) ? 50 :
            $request->input("rows"));

        if($request->input("status") != null){
            $criteria->setStatus($request->input("status"));
        }

        return $criteria;
    }

    public function parseRequestToModel(Request $request,string $id = null) : ToDo{
        $model = new ToDo();
        if($id != null){
            $model = ToDo::firstOrNew(["id"=> $id]);
        }
        $model->group_id = $request->input("group_id");
        $model->product_id = $request->input("product_id");
        $model->status = $request->input("status");
        $model->trademark_id = $request->input("trademark_id");
        $model->priority = $request->input("priority");

        $model->json_detail = json_encode($request->all());
        return $model;
    }
}