<?php
/**
 * Auto generated from recordserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RESGetPrizeInfoResp message
 */
class RESGetPrizeInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEID = 2;
    const PRIZETYPE = 3;
    const NPRIZEID = 4;
    const ARRPRIZE = 5;

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
        self::PRIZETYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\RecordPrizeType::enmRecordPrize_ThemeItemBook,
            'name' => 'prizeType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPRIZEID => array(
            'name' => 'nPrizeID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRPRIZE => array(
            'name' => 'arrPrize',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\PrizeCond'
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
        $this->values[self::PRIZETYPE] = self::$fields[self::PRIZETYPE]['default'];
        $this->values[self::NPRIZEID] = null;
        $this->values[self::ARRPRIZE] = array();
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
     * Sets value of 'prizeType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPrizeType($value)
    {
        return $this->set(self::PRIZETYPE, $value);
    }

    /**
     * Returns value of 'prizeType' property
     *
     * @return integer
     */
    public function getPrizeType()
    {
        $value = $this->get(self::PRIZETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'prizeType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPrizeType()
    {
        return $this->get(self::PRIZETYPE) !== null;
    }

    /**
     * Sets value of 'nPrizeID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPrizeID($value)
    {
        return $this->set(self::NPRIZEID, $value);
    }

    /**
     * Returns value of 'nPrizeID' property
     *
     * @return integer
     */
    public function getNPrizeID()
    {
        $value = $this->get(self::NPRIZEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPrizeID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPrizeID()
    {
        return $this->get(self::NPRIZEID) !== null;
    }

    /**
     * Appends value to 'arrPrize' list
     *
     * @param \Xnhd\Core\Pb\Sdo\PrizeCond $value Value to append
     *
     * @return null
     */
    public function appendArrPrize(\Xnhd\Core\Pb\Sdo\PrizeCond $value)
    {
        return $this->append(self::ARRPRIZE, $value);
    }

    /**
     * Clears 'arrPrize' list
     *
     * @return null
     */
    public function clearArrPrize()
    {
        return $this->clear(self::ARRPRIZE);
    }

    /**
     * Returns 'arrPrize' list
     *
     * @return \Xnhd\Core\Pb\Sdo\PrizeCond[]
     */
    public function getArrPrize()
    {
        return $this->get(self::ARRPRIZE);
    }

    /**
     * Returns true if 'arrPrize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPrize()
    {
        return count($this->get(self::ARRPRIZE)) !== 0;
    }

    /**
     * Returns 'arrPrize' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPrizeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPRIZE));
    }

    /**
     * Returns element from 'arrPrize' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\PrizeCond
     */
    public function getArrPrizeAt($offset)
    {
        return $this->get(self::ARRPRIZE, $offset);
    }

    /**
     * Returns count of 'arrPrize' list
     *
     * @return int
     */
    public function getArrPrizeCount()
    {
        return $this->count(self::ARRPRIZE);
    }
}
}