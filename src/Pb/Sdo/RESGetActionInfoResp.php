<?php
/**
 * Auto generated from recordserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RESGetActionInfoResp message
 */
class RESGetActionInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const NTHEMEID = 3;
    const TYPE = 4;
    const ARRTARGETID = 5;
    const ARRTIME = 6;

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
        self::NTHEMEID => array(
            'name' => 'nThemeID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\InteractType::enmInteractType_None,
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRTARGETID => array(
            'name' => 'arrTargetID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRTIME => array(
            'name' => 'arrTime',
            'repeated' => true,
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::NROLEID] = null;
        $this->values[self::NTHEMEID] = null;
        $this->values[self::TYPE] = self::$fields[self::TYPE]['default'];
        $this->values[self::ARRTARGETID] = array();
        $this->values[self::ARRTIME] = array();
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
     * Sets value of 'nThemeID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNThemeID($value)
    {
        return $this->set(self::NTHEMEID, $value);
    }

    /**
     * Returns value of 'nThemeID' property
     *
     * @return integer
     */
    public function getNThemeID()
    {
        $value = $this->get(self::NTHEMEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nThemeID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNThemeID()
    {
        return $this->get(self::NTHEMEID) !== null;
    }

    /**
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return $this->get(self::TYPE) !== null;
    }

    /**
     * Appends value to 'arrTargetID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrTargetID($value)
    {
        return $this->append(self::ARRTARGETID, $value);
    }

    /**
     * Clears 'arrTargetID' list
     *
     * @return null
     */
    public function clearArrTargetID()
    {
        return $this->clear(self::ARRTARGETID);
    }

    /**
     * Returns 'arrTargetID' list
     *
     * @return integer[]
     */
    public function getArrTargetID()
    {
        return $this->get(self::ARRTARGETID);
    }

    /**
     * Returns true if 'arrTargetID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrTargetID()
    {
        return count($this->get(self::ARRTARGETID)) !== 0;
    }

    /**
     * Returns 'arrTargetID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrTargetIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRTARGETID));
    }

    /**
     * Returns element from 'arrTargetID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrTargetIDAt($offset)
    {
        return $this->get(self::ARRTARGETID, $offset);
    }

    /**
     * Returns count of 'arrTargetID' list
     *
     * @return int
     */
    public function getArrTargetIDCount()
    {
        return $this->count(self::ARRTARGETID);
    }

    /**
     * Appends value to 'arrTime' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrTime($value)
    {
        return $this->append(self::ARRTIME, $value);
    }

    /**
     * Clears 'arrTime' list
     *
     * @return null
     */
    public function clearArrTime()
    {
        return $this->clear(self::ARRTIME);
    }

    /**
     * Returns 'arrTime' list
     *
     * @return integer[]
     */
    public function getArrTime()
    {
        return $this->get(self::ARRTIME);
    }

    /**
     * Returns true if 'arrTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrTime()
    {
        return count($this->get(self::ARRTIME)) !== 0;
    }

    /**
     * Returns 'arrTime' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrTimeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRTIME));
    }

    /**
     * Returns element from 'arrTime' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrTimeAt($offset)
    {
        return $this->get(self::ARRTIME, $offset);
    }

    /**
     * Returns count of 'arrTime' list
     *
     * @return int
     */
    public function getArrTimeCount()
    {
        return $this->count(self::ARRTIME);
    }
}
}