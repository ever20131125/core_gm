<?php
/**
 * Auto generated from recordserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RESGetItemFavourResp message
 */
class RESGetItemFavourResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const NTHEME = 3;
    const ARRITEMID = 4;

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
        self::NTHEME => array(
            'name' => 'nTheme',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRITEMID => array(
            'name' => 'arrItemID',
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
        $this->values[self::NTHEME] = null;
        $this->values[self::ARRITEMID] = array();
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

    /**
     * Appends value to 'arrItemID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrItemID($value)
    {
        return $this->append(self::ARRITEMID, $value);
    }

    /**
     * Clears 'arrItemID' list
     *
     * @return null
     */
    public function clearArrItemID()
    {
        return $this->clear(self::ARRITEMID);
    }

    /**
     * Returns 'arrItemID' list
     *
     * @return integer[]
     */
    public function getArrItemID()
    {
        return $this->get(self::ARRITEMID);
    }

    /**
     * Returns true if 'arrItemID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItemID()
    {
        return count($this->get(self::ARRITEMID)) !== 0;
    }

    /**
     * Returns 'arrItemID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEMID));
    }

    /**
     * Returns element from 'arrItemID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrItemIDAt($offset)
    {
        return $this->get(self::ARRITEMID, $offset);
    }

    /**
     * Returns count of 'arrItemID' list
     *
     * @return int
     */
    public function getArrItemIDCount()
    {
        return $this->count(self::ARRITEMID);
    }
}
}