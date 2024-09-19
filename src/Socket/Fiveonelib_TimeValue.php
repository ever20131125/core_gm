<?php

namespace Xnhd\Core\Socket;

class Fiveonelib_TimeValue
{
    var $_sec = 0;
    var $_usec = 0;

    /**
     * @brief 构造函数
     * @param[in] domain
     * @param[in] type
     * @param[in] protocol
     * @return void
     */
    function __construct($param)
    {
        if ( is_string($param) ) {
            $param = intval($param);
        }
        if ( is_array($param) ) {
            $this->_constructByArray($param);
        }
        elseif ( is_int($param) ) {
            $this->_constructByInt($param);
        }
        elseif ( is_float($param) ) {
            $this->_constructByFloat($param);
        }
        elseif ( is_a($param, 'Fiveonelib_TimeValue') ) { /* before php5 method $param is_a Fiveonelib_TimeValue */
            $this->_constructByTimeValue($param);
        }
        elseif ( $param instanceof Fiveonelib_TimeValue ) { /* php5 method $param instanceof Fiveonelib_TimeValue */
            $this->_constructByTimeValue($param);
        }
    }

    /**
     * @brief 构造函数. 兼容php4
     * @param[in] domain
     * @param[in] type
     * @param[in] protocol
     * @return void
     */
    function Fiveonelib_TimeValue($param)
    {
        $this->__construct($param);
    }


    /**
     * @brief 获取秒数
     * @return int
     */
    function getSec()
    {
        return $this->_sec;
    }

    /**
     * @brief 获取微秒数
     * @return int
     */
    function getUSec()
    {
        return $this->_usec;
    }

    function isPositive()
    {
        return $this->_sec>=0;
    }

    function isNegative()
    {
        return $this->_sec<0;
    }

    /**
     * @brief 处理两个Fiveonelib_TimeValue相减的操作
     * @return TimeValue
     */
    static function subtract($ltv, $rtv)
    {
        $ltv = $ltv->getSec()*1000000 + $ltv->getUSec();
        $rtv = $rtv->getSec()*1000000 + $rtv->getUSec();
        $result = $ltv - $rtv;
        return new Fiveonelib_TimeValue($result/1000000);
    }

    function _constructByArray($param)
    {
        $this->_sec = $param['sec'];
        $this->_usec = $param['usec'];

        if ( $this->_usec < 0 ) {
            --$this->_sec;
            $this->_usec += 1000000;
        }
    }

    function _constructByInt($param)
    {
        $this->_sec = $param;
    }

    function _constructByFloat($param)
    {
        $this->_sec = (int) ($param);
        $this->_usec = (int) (($param - $this->_sec) * 1000000);

        if ( $this->_usec < 0 ) {
            --$this->_sec;
            $this->_usec += 1000000;
        }
    }

    function _constructByTimeValue($param)
    {
        $this->_sec = $param->getSec();
        $this->_usec = $param->getUSec();
    }

    function __toString()
    {
        if ( $this->_sec < 0 ) {
            if ( $this->_usec == 0 ) {
                return sprintf('%d.000000', $this->_sec);
            }
            else {
                if ( $this->_sec == -1 ) {
                    return sprintf('-0.%06d', 1000000-$this->_usec);
                }
                else {
                    return sprintf('%d.%06d', $this->_sec+1, 1000000-$this->_usec);
                }
            }
        }
        else {
            return sprintf('%d.%06d', $this->_sec, $this->_usec);
        }
    }
}


