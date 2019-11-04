<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 2019/11/03
 * Time: 9:03
 */

namespace App\Domains;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class AbstractService
{
    public function save(Model $model)
    {
        try{
            if($model->id == null){
                $model->save();
            }else {
                $model->update();
            }
        }catch (\Exception $e){
            Log::error($e);
            return null;
        }
        return $model;
    }

    public function delete(Model $model)
    {
        try{
            $model->delete();
        }catch (\Exception $e){
            Log::error($e);
            return null;
        }
        return $model;
    }
}