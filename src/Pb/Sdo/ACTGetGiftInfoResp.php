<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTGetGiftInfoResp message
 */
class ACTGetGiftInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const ARRGIFTINFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRGIFTINFO => array(
            'name' => 'arrGiftInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ActGift'
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
        $this->values[self::NROLEID] = null;
        $this->values[self::ARRGIFTINFO] = array();
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
     * Sets value of 'nRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID($value)
    {
        return $this->set(self::NROLEID, $value);
    }

    /**
     * Returns value of 'nRoleID' property
     *
     * @return integer
     */
    public function getNRoleID()
    {
        $value = $this->get(self::NROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID()
    {
        return $this->get(self::NROLEID) !== null;
    }

    /**
     * Appends value to 'arrGiftInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ActGift $value Value to append
     *
     * @return null
     */
    public function appendArrGiftInfo(\Xnhd\Core\Pb\Sdo\ActGift $value)
    {
        return $this->append(self::ARRGIFTINFO, $value);
    }

    /**
     * Clears 'arrGiftInfo' list
     *
     * @return null
     */
    public function clearArrGiftInfo()
    {
        return $this->clear(self::ARRGIFTINFO);
    }

    /**
     * Returns 'arrGiftInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ActGift[]
     */
    public function getArrGiftInfo()
    {
        return $this->get(self::ARRGIFTINFO);
    }

    /**
     * Returns true if 'arrGiftInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrGiftInfo()
    {
        return count($this->get(self::ARRGIFTINFO)) !== 0;
    }

    /**
     * Returns 'arrGiftInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrGiftInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRGIFTINFO));
    }

    /**
     * Returns element from 'arrGiftInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ActGift
     */
    public function getArrGiftInfoAt($offset)
    {
        return $this->get(self::ARRGIFTINFO, $offset);
    }

    /**
     * Returns count of 'arrGiftInfo' list
     *
     * @return int
     */
    public function getArrGiftInfoCount()
    {
        return $this->count(self::ARRGIFTINFO);
    }
}
}