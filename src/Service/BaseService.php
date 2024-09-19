<?php
/*
 * @Descripttion: 
 * @version: 
 * @Author: wufl
 * @Date: 2021-01-18 16:50:12
 * @LastEditors: Please set LastEditors
 * @LastEditTime: 2022-10-11 21:57:53
 */

namespace Xnhd\Core\Service;

class BaseService
{
    protected $model;

    public function __construct($model, $connection)
    {
        $this->model = $model;
        $this->model->setConnection($connection);
    }

    public function getInfo()
    {
        return $this->model->orderBy('id', 'desc')->get();
    }

    public function getInfoById($id)
    {
        return $this->model->find($id);
    }

    public function createOne($params, $id = '')
    {
        foreach ($params as $key => $value) {
            $this->model->$key = $value;
        }
        if (empty($id)) {
            return $this->model->save() ? $this->model->id : false;
        } else {
            return $this->model->save() ? true : false;
        }
    }

    public function updateOne($id, $params)
    {
        $obj = $this->model->find($id);
        foreach ($params as $key => $value) {
            $obj->$key = $value;
        }
        return $obj->save();
    }

    public function deleteOne($id)
    {
        return $this->model->find($id)->delete();
    }


    public function getTotal($openTime, $endTime)
    {
        return $this->model->where('createTime', '>=', $openTime)->where('createTime', '<', $endTime)->count();
    }

    public function getLastId($openTime, $endTime)
    {
        return $this->model->select('id')->where('createTime', '>=', $openTime)->where('createTime', '<', $endTime)->orderBy('id', 'desc')->first();
    }

    public function getInfoByCon($queryParams)
    {
        $model = $this->model->select('*');
        if (!empty($queryParams)) {
            foreach ($queryParams as $key => $value) {
                if (!empty($value)) {
                    if ($key == 'openTime') {
                        $model = $model->where('created_at', '>=', $value);
                    } else if ($key == 'endTime') {
                        $model = $model->where('created_at', '<=', $value);
                    } else if ($key == 'offset') {
                        $model = $model->offset($value);
                    } else if ($key == 'limit') {
                        $model = $model->limit($value);
                    } else {
                        $model = $model->where($key, $value);
                    }
                }
            }
        }
        return $model->orderBy('id', 'desc')->get();
    }
}
