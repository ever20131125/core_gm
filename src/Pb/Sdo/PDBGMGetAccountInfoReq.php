<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGMGetAccountInfoReq message
 */
class PDBGMGetAccountInfoReq extends \ProtobufMessage
{
    /* Field index constants */
    const NZONEID = 1;
    const ARRACCOUNTID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NZONEID => array(
            'name' => 'nZoneID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRACCOUNTID => array(
            'name' => 'arrAccountID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::NZONEID] = null;
        $this->values[self::ARRACCOUNTID] = array();
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
     * Sets value of 'nZoneID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNZoneID($value)
    {
        return $this->set(self::NZONEID, $value);
    }

    /**
     * Returns value of 'nZoneID' property
     *
     * @return integer
     */
    public function getNZoneID()
    {
        $value = $this->get(self::NZONEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nZoneID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNZoneID()
    {
        return $this->get(self::NZONEID) !== null;
    }

    /**
     * Appends value to 'arrAccountID' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendArrAccountID($value)
    {
        return $this->append(self::ARRACCOUNTID, $value);
    }

    /**
     * Clears 'arrAccountID' list
     *
     * @return null
     */
    public function clearArrAccountID()
    {
        return $this->clear(self::ARRACCOUNTID);
    }

    /**
     * Returns 'arrAccountID' list
     *
     * @return string[]
     */
    public function getArrAccountID()
    {
        return $this->get(self::ARRACCOUNTID);
    }

    /**
     * Returns true if 'arrAccountID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrAccountID()
    {
        return count($this->get(self::ARRACCOUNTID)) !== 0;
    }

    /**
     * Returns 'arrAccountID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrAccountIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRACCOUNTID));
    }

    /**
     * Returns element from 'arrAccountID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getArrAccountIDAt($offset)
    {
        return $this->get(self::ARRACCOUNTID, $offset);
    }

    /**
     * Returns count of 'arrAccountID' list
     *
     * @return int
     */
    public function getArrAccountIDCount()
    {
        return $this->count(self::ARRACCOUNTID);
    }
}
}