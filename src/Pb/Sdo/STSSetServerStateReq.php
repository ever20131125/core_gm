<?php
/**
 * Auto generated from stateserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * STSSetServerStateReq message
 */
class STSSetServerStateReq extends \ProtobufMessage
{
    /* Field index constants */
    const REGISTEROPEN = 1;
    const QUEUEOPEN = 2;
    const ONLINELIMIT = 3;
    const QUEUELIMIT = 4;
    const LOGINPERSECOND = 5;
    const INPUTBUCKETPERIOD = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REGISTEROPEN => array(
            'name' => 'registerOpen',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::QUEUEOPEN => array(
            'name' => 'queueOpen',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ONLINELIMIT => array(
            'name' => 'onlineLimit',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::QUEUELIMIT => array(
            'name' => 'queueLimit',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOGINPERSECOND => array(
            'name' => 'loginPerSecond',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::INPUTBUCKETPERIOD => array(
            'name' => 'inputbucketperiod',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::REGISTEROPEN] = null;
        $this->values[self::QUEUEOPEN] = null;
        $this->values[self::ONLINELIMIT] = null;
        $this->values[self::QUEUELIMIT] = null;
        $this->values[self::LOGINPERSECOND] = null;
        $this->values[self::INPUTBUCKETPERIOD] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'registerOpen' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRegisterOpen($value)
    {
        return $this->set(self::REGISTEROPEN, $value);
    }

    /**
     * Returns value of 'registerOpen' property
     *
     * @return integer
     */
    public function getRegisterOpen()
    {
        $value = $this->get(self::REGISTEROPEN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'registerOpen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRegisterOpen()
    {
        return $this->get(self::REGISTEROPEN) !== null;
    }

    /**
     * Sets value of 'queueOpen' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setQueueOpen($value)
    {
        return $this->set(self::QUEUEOPEN, $value);
    }

    /**
     * Returns value of 'queueOpen' property
     *
     * @return integer
     */
    public function getQueueOpen()
    {
        $value = $this->get(self::QUEUEOPEN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'queueOpen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasQueueOpen()
    {
        return $this->get(self::QUEUEOPEN) !== null;
    }

    /**
     * Sets value of 'onlineLimit' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOnlineLimit($value)
    {
        return $this->set(self::ONLINELIMIT, $value);
    }

    /**
     * Returns value of 'onlineLimit' property
     *
     * @return integer
     */
    public function getOnlineLimit()
    {
        $value = $this->get(self::ONLINELIMIT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'onlineLimit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOnlineLimit()
    {
        return $this->get(self::ONLINELIMIT) !== null;
    }

    /**
     * Sets value of 'queueLimit' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setQueueLimit($value)
    {
        return $this->set(self::QUEUELIMIT, $value);
    }

    /**
     * Returns value of 'queueLimit' property
     *
     * @return integer
     */
    public function getQueueLimit()
    {
        $value = $this->get(self::QUEUELIMIT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'queueLimit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasQueueLimit()
    {
        return $this->get(self::QUEUELIMIT) !== null;
    }

    /**
     * Sets value of 'loginPerSecond' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLoginPerSecond($value)
    {
        return $this->set(self::LOGINPERSECOND, $value);
    }

    /**
     * Returns value of 'loginPerSecond' property
     *
     * @return integer
     */
    public function getLoginPerSecond()
    {
        $value = $this->get(self::LOGINPERSECOND);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'loginPerSecond' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoginPerSecond()
    {
        return $this->get(self::LOGINPERSECOND) !== null;
    }

    /**
     * Sets value of 'inputbucketperiod' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setInputbucketperiod($value)
    {
        return $this->set(self::INPUTBUCKETPERIOD, $value);
    }

    /**
     * Returns value of 'inputbucketperiod' property
     *
     * @return integer
     */
    public function getInputbucketperiod()
    {
        $value = $this->get(self::INPUTBUCKETPERIOD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'inputbucketperiod' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasInputbucketperiod()
    {
        return $this->get(self::INPUTBUCKETPERIOD) !== null;
    }
}
}