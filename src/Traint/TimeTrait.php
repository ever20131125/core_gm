<?php

namespace Xnhd\Core\Traint;


trait TimeTrait
{
    /**
     * 获取当前毫秒时间戳
     */
    protected function getMillisecond()
    {
        list($msec, $sec) = explode(' ', microtime());
        $msectime =  (float)sprintf('%.0f', (floatval($msec) + floatval($sec)) * 1000);
        return (int)  substr($msectime, 0, 13);
    }

    /**
     * 时间日期转时间戳格式，精确到毫秒，
     * $time = '2018-9-15 1:1:1.0';
     */
    protected function get_data_format($time)
    {
        list($usec, $sec) = explode(".", $time);
        $date = strtotime($usec);
        $return_data = str_pad($date . $sec, 13, "0", STR_PAD_RIGHT); //不足13位。右边补0
        return $return_data;
    }

    /* 毫秒时间戳转换成日期 */
    protected function msecdate($time)
    {
        $tag = 'Y-m-d H:i:s';
        $a = substr($time, 0, 10);
        $b = substr($time, 10);
        $date = date($tag, $a) . '.' . $b;
        return $date;
    }


    /**
     * 
     * 毫秒时间戳格式化
     * $time = '2018-9-15 1:1:1';
     *
     * @param string $time
     * @return string '2018-9-15 1:1:1';
     */
    protected function getTimeFormat($time)
    {
        $tag = 'Y-m-d H:i:s';
        $a = substr($time, 0, 10);
        $b = substr($time, 10);
        $date = date($tag, $a);
        return $date;
    }
}
