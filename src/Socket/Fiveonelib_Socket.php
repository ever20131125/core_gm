<?php

namespace Xnhd\Core\Socket;

class Fiveonelib_Socket
{
    var $_domain;
    var $_type;
    var $_protocol;
    var $_socket;
    var $_error = 0;

    /**
     * @brief 构造函数
     * @param[in] domain
     * @param[in] type
     * @param[in] protocol
     * @return void
     */
    function __construct($domain, $type, $protocol)
    {
        $this->_domain = $domain;
        $this->_type = $type;
        $this->_protocol = $protocol;

        if (version_compare(PHP_VERSION, '5') == -1) {
            register_shutdown_function(array(&$this, '__destruct'));
        }
    }

    /**
     * @brief 析构函数
     * @return void
     */
    function __destruct()
    {
        $this->close();
    }

    /**
     * @brief 构造函数。兼容php4
     * @param[in] domain
     * @param[in] type
     * @param[in] protocol
     * @return void
     */
    function Fiveonelib_Socket($domain, $type, $protocol)
    {
        $this->__construct($domain, $type, $protocol);
    }

    /**
     * @brief 判断socket是否已经open
     * @return true or false
     */
    function isOpen()
    {
        return @is_resource($this->_socket);
    }

    /**
     * @brief 新建一个socket
     * @return true or false
     */
    function open()
    {
        if ( $this->isOpen() ) {
            return false;
        }

        $ret = @socket_create($this->_domain, $this->_type, $this->_protocol);
        if ( $ret ) {
            $this->_socket = $ret;
            return true;
        }
        else {
            return false;
        }
    }

    /**
     * @brief 关闭当前的socket。如果当前没有打开，则不做处理
     * @return void
     */
    function close()
    {
        if ( $this->isOpen() ) {
            @socket_close($this->_socket);
            unset($this->_socket);
        }
    }

    /**
     * @brief 设置sock选项
     * @se _socketset_option in php manual
     * @return true or false
     */
    function setSockOption($level, $optname, $optval)
    {
        return @socket_set_option($this->_socket, $level, $optname, $optval);
    }

    /**
     * @brief 获取sock选项
     * @se _socketget_option in php manual
     * @return mixed
     */
    function getSockOption($level, $optname)
    {
        return @socket_get_option($this->_socket, $level, $optname);
    }

    /**
     * @brief 设置是否阻塞
     * @param[in] block 设置true为阻塞，false为非阻塞
     * @return true or false
     */
    function setBlock($block)
    {
        if ( $block ) {
            return @socket_set_block($this->_socket);
        }
        else {
            return @socket_set_nonblock($this->_socket);
        }
    }

    /**
     * @brief bind地址
     * @param[in] address 地址
     * @param[in] port 端口
     * @return true or false
     */
    function bind($address, $port=0)
    {
        return @socket_bind($this->_socket, $address, $port);
    }

    /**
     * @brief 获取本地地址
     * @param[out] address 地址
     * @param[out] port 端口
     * @return true or false
     */
    function getSockName(&$addr, &$port)
    {
        return @socket_getsockname($this->_socket, $addr, $port);
    }

    /**
     * @brief 获取最近一次错误码
     * @return int
     */
    function getLastError()
    {
        $error = @socket_last_error($this->_socket);
        if ( $error != 0 ) {
            $this->_error = $error;
        }
        return $this->_error;
    }

    /**
     * @brief 获取最近一次错误信息
     * @return string
     */
    function getLastErrorMsg()
    {
        return @socket_strerror($this->getLastError());
    }

    /**
     * @brief 清除错误码
     * @return void
     */
    function clearError()
    {
        $this->_error = 0;
        @socket_clear_error($this->_socket);
    }

    /**
     * @brief 设置错误码
     * @return void
     */
    function _setError($error)
    {
        $this->_error = $error;
    }

    /**
     * @brief 获取当前socket句柄
     * @return resource
     */
    function _getSocket()
    {
        return $this->_socket;
    }
}


