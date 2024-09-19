<?php

namespace Xnhd\Core\Log;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Xnhd\Core\Es\EsBaseServer;
use Xnhd\Core\Es\LaravelElasticSearch;

class OperateLog extends EsBaseServer
{
    protected $project;
    protected $esLog;
    protected $params = [];

    public function __construct($project, $id = '', $timestamp = '')
    {
        $index = config('app.es.gm.index');
        $type = config('app.es.gm.type');
        $this->project = $project;

        if (empty($timestamp)) {
            $this->index = $index . '-' . date('Y.m.d');
        } else {
            $this->index = $index . '-' . date('Y.m.d', $timestamp);
        }
        $this->type = $type;
        $this->id = $id;
        $this->esLog = new LaravelElasticSearch();
    }

    public function add($content)
    {
        $staff = 'Command';
        if (Session::has('user.name')) {
            $staff = Session::get('user.name');
        }

        $this->params[] = [
            'index' => $this->index,
            'type' => $this->type,
            'content' => array_merge([
                'staff' => $staff,
                'createTime' => time(),
            ], $content),
        ];

        return true;
    }

    public function save($content, $staff)
    {
        if (empty($staff)) {
            $staff = 'Command';
            if (Session::has('user.name')) {
                $staff = Session::get('user.name');
            }
        }

        $this->params[] = [
            'index' => $this->index,
            'type' => $this->type,
            'id' => time(),
            'content' => array_merge([
                'staff' => $staff,
                'createTime' => time(),
            ], $content),
        ];

        $res = $this->esLog->add($this->params);
        return $res;
    }

    // public function save() {
    //     Log::info($this->params);
    //     $res = $this->esLog->add($this->params);
    //     return $res['errors'] == 0;
    // }

}
