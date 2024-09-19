<?php

namespace Xnhd\Core\Es;

use Illuminate\Support\Facades\Log;

class EsBaseServer
{
    protected $project;

    protected $esLog;

    protected $index;

    protected $type;

    protected $params = [];

    public function __construct($project, $id = '', $index = '')
    {
        $this->project = $project;
        $this->esLog = new LaravelElasticSearch();
    }

    public function add($content)
    {
        $this->params[] = [
            'index' => $this->index,
            'type' => $this->type,
            'id' => $this->id,
            'content' => $content,
        ];

        $res = $this->esLog->add($this->params);

        if ($res['errors'] == 0) {
            return true;
        } else {
            Log::info(var_export($res, true));
            return false;
        }
    }

    public function get($params, $from = 0, $size = 100)
    {
        $res = $this->esLog->get($this->index, $this->type, $params, $from, $size);
        return !empty($res['hits']) ? $res['hits'] : false;
    }

    public function mget($index, $params, $from = 0, $size = 100)
    {
        $res = $this->esLog->get($index, $this->type, $params, $from, $size);
        return !empty($res['hits']) ? $res['hits'] : false;
    }
}
