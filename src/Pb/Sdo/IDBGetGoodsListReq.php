<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBGetGoodsListReq message
 */
class IDBGetGoodsListReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const GENDER = 2;
    const ARRCATEGORY = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GENDER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Gender::enmGender_Unknown,
            'name' => 'gender',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRCATEGORY => array(
            'name' => 'arrCategory',
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
        $this->values[self::GENDER] = self::$fields[self::GENDER]['default'];
        $this->values[self::ARRCATEGORY] = array();
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
     * Sets value of 'gender' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGender($value)
    {
        return $this->set(self::GENDER, $value);
    }

    /**
     * Returns value of 'gender' property
     *
     * @return integer
     */
    public function getGender()
    {
        $value = $this->get(self::GENDER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'gender' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGender()
    {
        return $this->get(self::GENDER) !== null;
    }

    /**
     * Appends value to 'arrCategory' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrCategory($value)
    {
        return $this->append(self::ARRCATEGORY, $value);
    }

    /**
     * Clears 'arrCategory' list
     *
     * @return null
     */
    public function clearArrCategory()
    {
        return $this->clear(self::ARRCATEGORY);
    }

    /**
     * Returns 'arrCategory' list
     *
     * @return integer[]
     */
    public function getArrCategory()
    {
        return $this->get(self::ARRCATEGORY);
    }

    /**
     * Returns true if 'arrCategory' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrCategory()
    {
        return count($this->get(self::ARRCATEGORY)) !== 0;
    }

    /**
     * Returns 'arrCategory' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrCategoryIterator()
    {
        return new \ArrayIterator($this->get(self::ARRCATEGORY));
    }

    /**
     * Returns element from 'arrCategory' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrCategoryAt($offset)
    {
        return $this->get(self::ARRCATEGORY, $offset);
    }

    /**
     * Returns count of 'arrCategory' list
     *
     * @return int
     */
    public function getArrCategoryCount()
    {
        return $this->count(self::ARRCATEGORY);
    }
}
}