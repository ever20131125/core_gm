<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTGetActInfoResp message
 */
class ACTGetActInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEID = 2;
    const ARRACTINFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRACTINFO => array(
            'name' => 'arrActInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ActInfo'
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
        $this->values[self::ROLEID] = null;
        $this->values[self::ARRACTINFO] = array();
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
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Appends value to 'arrActInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ActInfo $value Value to append
     *
     * @return null
     */
    public function appendArrActInfo(\Xnhd\Core\Pb\Sdo\ActInfo $value)
    {
        return $this->append(self::ARRACTINFO, $value);
    }

    /**
     * Clears 'arrActInfo' list
     *
     * @return null
     */
    public function clearArrActInfo()
    {
        return $this->clear(self::ARRACTINFO);
    }

    /**
     * Returns 'arrActInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ActInfo[]
     */
    public function getArrActInfo()
    {
        return $this->get(self::ARRACTINFO);
    }

    /**
     * Returns true if 'arrActInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrActInfo()
    {
        return count($this->get(self::ARRACTINFO)) !== 0;
    }

    /**
     * Returns 'arrActInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrActInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRACTINFO));
    }

    /**
     * Returns element from 'arrActInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ActInfo
     */
    public function getArrActInfoAt($offset)
    {
        return $this->get(self::ARRACTINFO, $offset);
    }

    /**
     * Returns count of 'arrActInfo' list
     *
     * @return int
     */
    public function getArrActInfoCount()
    {
        return $this->count(self::ARRACTINFO);
    }
}
}