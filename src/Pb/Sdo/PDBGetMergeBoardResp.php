<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGetMergeBoardResp message
 */
class PDBGetMergeBoardResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const NTHEME = 3;
    const ARRITEMLIST = 4;

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
        self::ARRITEMLIST => array(
            'name' => 'arrItemList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemMerge'
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
        $this->values[self::ARRITEMLIST] = array();
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
     * Appends value to 'arrItemList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemMerge $value Value to append
     *
     * @return null
     */
    public function appendArrItemList(\Xnhd\Core\Pb\Sdo\ItemMerge $value)
    {
        return $this->append(self::ARRITEMLIST, $value);
    }

    /**
     * Clears 'arrItemList' list
     *
     * @return null
     */
    public function clearArrItemList()
    {
        return $this->clear(self::ARRITEMLIST);
    }

    /**
     * Returns 'arrItemList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemMerge[]
     */
    public function getArrItemList()
    {
        return $this->get(self::ARRITEMLIST);
    }

    /**
     * Returns true if 'arrItemList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItemList()
    {
        return count($this->get(self::ARRITEMLIST)) !== 0;
    }

    /**
     * Returns 'arrItemList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEMLIST));
    }

    /**
     * Returns element from 'arrItemList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemMerge
     */
    public function getArrItemListAt($offset)
    {
        return $this->get(self::ARRITEMLIST, $offset);
    }

    /**
     * Returns count of 'arrItemList' list
     *
     * @return int
     */
    public function getArrItemListCount()
    {
        return $this->count(self::ARRITEMLIST);
    }
}
}