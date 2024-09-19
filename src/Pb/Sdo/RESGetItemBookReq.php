<?php
/**
 * Auto generated from recordserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RESGetItemBookReq message
 */
class RESGetItemBookReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const ARRBAGTYPE = 2;
    const NTHEME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRBAGTYPE => array(
            'name' => 'arrBagType',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTHEME => array(
            'default' => 0,
            'name' => 'nTheme',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::ARRBAGTYPE] = array();
        $this->values[self::NTHEME] = self::$fields[self::NTHEME]['default'];
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
     * Appends value to 'arrBagType' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrBagType($value)
    {
        return $this->append(self::ARRBAGTYPE, $value);
    }

    /**
     * Clears 'arrBagType' list
     *
     * @return null
     */
    public function clearArrBagType()
    {
        return $this->clear(self::ARRBAGTYPE);
    }

    /**
     * Returns 'arrBagType' list
     *
     * @return integer[]
     */
    public function getArrBagType()
    {
        return $this->get(self::ARRBAGTYPE);
    }

    /**
     * Returns true if 'arrBagType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrBagType()
    {
        return count($this->get(self::ARRBAGTYPE)) !== 0;
    }

    /**
     * Returns 'arrBagType' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrBagTypeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRBAGTYPE));
    }

    /**
     * Returns element from 'arrBagType' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrBagTypeAt($offset)
    {
        return $this->get(self::ARRBAGTYPE, $offset);
    }

    /**
     * Returns count of 'arrBagType' list
     *
     * @return int
     */
    public function getArrBagTypeCount()
    {
        return $this->count(self::ARRBAGTYPE);
    }

    /**
     * Sets value of 'nTheme' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTheme($value)
    {
        return $this->set(self::NTHEME, $value);
    }

    /**
     * Returns value of 'nTheme' property
     *
     * @return integer
     */
    public function getNTheme()
    {
        $value = $this->get(self::NTHEME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTheme' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTheme()
    {
        return $this->get(self::NTHEME) !== null;
    }
}
}