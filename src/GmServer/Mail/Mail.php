<?php
/*
 * @Descripttion: 
 * @version: 
 * @Author: wufl
 * @Date: 2021-04-25 11:50:59
 * @LastEditors: Please set LastEditors
 * @LastEditTime: 2021-10-28 17:55:51
 */

namespace Xnhd\Core\GmServer\Mail;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    public function __construct($connection = 'mail')
    {
        $this->setConnection($connection);
        $this->setTable('mail' . date('Ym', time()));
        parent::__construct();
    }
}
