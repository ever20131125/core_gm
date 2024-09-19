<?php

namespace Xnhd\Core\Es;

use Elasticsearch;

class LaravelElasticSearch
{

    // params: array of ['index'=>$index, 'type'=>$type, 'content'=>$content]
    //es7 'type'=>'_doc'
    public function add($params)
    {
        if (empty($params)) {
            return false;
        }

        $addParams = ['body' => []];
        foreach ($params as $param) {
            $addParams['body'][] = [
                'index' => [
                    '_index' => $param['index'],
                    '_type' => $param['type'],
                    '_id' => $param['id'],
                ],
            ];
            $addParams['body'][] = $param['content'];
        }

        return Elasticsearch::bulk($addParams);
    }

    public function get($index, $type, $params, $from = 0, $size = 100)
    {
        if (empty($type) || empty($params)) {
            return false;
        }

        $must = [];
        $filter = [];
        if (!empty($params['search'])) {
            foreach ($params['search'] as $field => $value) {
                $must[] = ['match_phrase' => [$field => $value]];
            }
        }
        if (!empty($params['time'])) {
            $must[] = [
                'range' => [
                    'time' => [
                        "gte" => $params['time']['openTime'],
                        "lte" => $params['time']['endTime'],
                    ]
                ]
            ];
        }
        if (!empty($params['terms'])) {
            foreach ($params['terms'] as $key => $value) {
                $filter['terms'] = [$key => $value];
            }
        }
        if (!empty($params['term'])) {
            foreach ($params['term'] as $key => $value) {
                $filter['term'] = [$key => $value];
            }
        }

        $sort = [];
        if (!empty($params['sort'])) {
            foreach ($params['sort'] as $key => $value) {
                $sort[$key] = [
                    'order' => $value,
                    'unmapped_type' => 'long',
                    'missing' => '_last',
                ];
            }
        }

        $getParams = [
            'index' => $index,
            'type' => $type,
            'from' => $from,
            'size' => $size,
            'body' => [
                'sort' => $sort,
                'query' => [
                    'bool' => [
                        'filter' => $filter,
                        'must' => $must,
                    ]
                ]
            ],
        ];

        return Elasticsearch::search($getParams);
    }
}
