<?php
/**
 * Auto generated from stateserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * STSLoginResp message
 */
class STSLoginResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const SZACCOUNTID = 2;
    const NNEEDQUEUE = 3;
    const STLOGINQUEUEINFO = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::SZACCOUNTID => array(
            'name' => 'szAccountID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NNEEDQUEUE => array(
            'default' => 0,
            'name' => 'nNeedQueue',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STLOGINQUEUEINFO => array(
            'name' => 'stLoginQueueInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\LoginQueueInfo'
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::SZACCOUNTID] = null;
        $this->values[self::NNEEDQUEUE] = self::$fields[self::NNEEDQUEUE]['default'];
        $this->values[self::STLOGINQUEUEINFO] = null;
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
     * Sets value of 'nErrorCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNErrorCode($value)
    {
        return $this->set(self::NERRORCODE, $value);
    }

    /**
     * Returns value of 'nErrorCode' property
     *
     * @return integer
     */
    public function getNErrorCode()
    {
        $value = $this->get(self::NERRORCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNErrorCode()
    {
        return $this->get(self::NERRORCODE) !== null;
    }

    /**
     * Sets value of 'szAccountID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzAccountID($value)
    {
        return $this->set(self::SZACCOUNTID, $value);
    }

    /**
     * Returns value of 'szAccountID' property
     *
     * @return string
     */
    public function getSzAccountID()
    {
        $value = $this->get(self::SZACCOUNTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szAccountID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzAccountID()
    {
        return $this->get(self::SZACCOUNTID) !== null;
    }

    /**
     * Sets value of 'nNeedQueue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNNeedQueue($value)
    {
        return $this->set(self::NNEEDQUEUE, $value);
    }

    /**
     * Returns value of 'nNeedQueue' property
     *
     * @return integer
     */
    public function getNNeedQueue()
    {
        $value = $this->get(self::NNEEDQUEUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nNeedQueue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNNeedQueue()
    {
        return $this->get(self::NNEEDQUEUE) !== null;
    }

    /**
     * Sets value of 'stLoginQueueInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\LoginQueueInfo $value Property value
     *
     * @return null
     */
    public function setStLoginQueueInfo(\Xnhd\Core\Pb\Sdo\LoginQueueInfo $value=null)
    {
        return $this->set(self::STLOGINQUEUEINFO, $value);
    }

    /**
     * Returns value of 'stLoginQueueInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\LoginQueueInfo
     */
    public function getStLoginQueueInfo()
    {
        return $this->get(self::STLOGINQUEUEINFO);
    }

    /**
     * Returns true if 'stLoginQueueInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStLoginQueueInfo()
    {
        return $this->get(self::STLOGINQUEUEINFO) !== null;
    }
}
}