<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * AvatarPlan message
 */
class AvatarPlan extends \ProtobufMessage
{
    /* Field index constants */
    const SZPLANNAME = 1;
    const ARRITEMINSID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SZPLANNAME => array(
            'name' => 'szPlanName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ARRITEMINSID => array(
            'name' => 'arrItemInsID',
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
        $this->values[self::SZPLANNAME] = null;
        $this->values[self::ARRITEMINSID] = array();
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
     * Sets value of 'szPlanName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzPlanName($value)
    {
        return $this->set(self::SZPLANNAME, $value);
    }

    /**
     * Returns value of 'szPlanName' property
     *
     * @return string
     */
    public function getSzPlanName()
    {
        $value = $this->get(self::SZPLANNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szPlanName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzPlanName()
    {
        return $this->get(self::SZPLANNAME) !== null;
    }

    /**
     * Appends value to 'arrItemInsID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrItemInsID($value)
    {
        return $this->append(self::ARRITEMINSID, $value);
    }

    /**
     * Clears 'arrItemInsID' list
     *
     * @return null
     */
    public function clearArrItemInsID()
    {
        return $this->clear(self::ARRITEMINSID);
    }

    /**
     * Returns 'arrItemInsID' list
     *
     * @return integer[]
     */
    public function getArrItemInsID()
    {
        return $this->get(self::ARRITEMINSID);
    }

    /**
     * Returns true if 'arrItemInsID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItemInsID()
    {
        return count($this->get(self::ARRITEMINSID)) !== 0;
    }

    /**
     * Returns 'arrItemInsID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemInsIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEMINSID));
    }

    /**
     * Returns element from 'arrItemInsID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrItemInsIDAt($offset)
    {
        return $this->get(self::ARRITEMINSID, $offset);
    }

    /**
     * Returns count of 'arrItemInsID' list
     *
     * @return int
     */
    public function getArrItemInsIDCount()
    {
        return $this->count(self::ARRITEMINSID);
    }
}
}