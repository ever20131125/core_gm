<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBUpdateRoleFaceReq message
 */
class IDBUpdateRoleFaceReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NFACESLOT = 2;
    const NFACEID = 3;
    const ARRFACEITEM = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFACESLOT => array(
            'name' => 'nFaceSlot',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFACEID => array(
            'name' => 'nFaceID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRFACEITEM => array(
            'name' => 'arrFaceItem',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NFACESLOT] = null;
        $this->values[self::NFACEID] = null;
        $this->values[self::ARRFACEITEM] = array();
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
     * Sets value of 'nFaceSlot' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFaceSlot($value)
    {
        return $this->set(self::NFACESLOT, $value);
    }

    /**
     * Returns value of 'nFaceSlot' property
     *
     * @return integer
     */
    public function getNFaceSlot()
    {
        $value = $this->get(self::NFACESLOT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFaceSlot' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFaceSlot()
    {
        return $this->get(self::NFACESLOT) !== null;
    }

    /**
     * Sets value of 'nFaceID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFaceID($value)
    {
        return $this->set(self::NFACEID, $value);
    }

    /**
     * Returns value of 'nFaceID' property
     *
     * @return integer
     */
    public function getNFaceID()
    {
        $value = $this->get(self::NFACEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFaceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFaceID()
    {
        return $this->get(self::NFACEID) !== null;
    }

    /**
     * Appends value to 'arrFaceItem' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrFaceItem($value)
    {
        return $this->append(self::ARRFACEITEM, $value);
    }

    /**
     * Clears 'arrFaceItem' list
     *
     * @return null
     */
    public function clearArrFaceItem()
    {
        return $this->clear(self::ARRFACEITEM);
    }

    /**
     * Returns 'arrFaceItem' list
     *
     * @return integer[]
     */
    public function getArrFaceItem()
    {
        return $this->get(self::ARRFACEITEM);
    }

    /**
     * Returns true if 'arrFaceItem' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrFaceItem()
    {
        return count($this->get(self::ARRFACEITEM)) !== 0;
    }

    /**
     * Returns 'arrFaceItem' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrFaceItemIterator()
    {
        return new \ArrayIterator($this->get(self::ARRFACEITEM));
    }

    /**
     * Returns element from 'arrFaceItem' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrFaceItemAt($offset)
    {
        return $this->get(self::ARRFACEITEM, $offset);
    }

    /**
     * Returns count of 'arrFaceItem' list
     *
     * @return int
     */
    public function getArrFaceItemCount()
    {
        return $this->count(self::ARRFACEITEM);
    }
}
}