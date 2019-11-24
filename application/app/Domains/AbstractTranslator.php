<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/01
 * Time: 18:27
 */

namespace App\Domains;


use Illuminate\Http\Request;

abstract class AbstractTranslator
{
    protected function parseRequestToAbstractCriteria(Request $request,$criteria){
        if(!empty($request->input("created_at_from"))){
            $criteria->setCreatedAtFrom($request->input("created_at_from"));
        }
        if(!empty($request->input("created_at_to"))){
            $criteria->setCreatedAtTo($request->input("created_at_to"));
        }
        if(!empty($request->input("updated_at_from"))){
            $criteria->setUpdatedAtFrom($request->input("updated_at_from"));
        }
        if(!empty($request->input("updated_at_to"))){
            $criteria->setUpdatedAtTo($request->input("updated_at_to"));
        }
        if(!empty($request->input("rows"))){
            $criteria->setRows($request->input("rows"));
        }else{
            $criteria->setRows(20);
        }
        return $criteria;
    }
}