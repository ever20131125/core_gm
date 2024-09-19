<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBGetHotGoodsResp message
 */
class IDBGetHotGoodsResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const ARRHOTCATEGORY = 3;
    const SZURL = 4;

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
        self::ARRHOTCATEGORY => array(
            'name' => 'arrHotCategory',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\HotCategory'
        ),
        self::SZURL => array(
            'name' => 'szUrl',
            'required' => false,
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::NROLEID] = null;
        $this->values[self::ARRHOTCATEGORY] = array();
        $this->values[self::SZURL] = null;
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
     * Appends value to 'arrHotCategory' list
     *
     * @param \Xnhd\Core\Pb\Sdo\HotCategory $value Value to append
     *
     * @return null
     */
    public function appendArrHotCategory(\Xnhd\Core\Pb\Sdo\HotCategory $value)
    {
        return $this->append(self::ARRHOTCATEGORY, $value);
    }

    /**
     * Clears 'arrHotCategory' list
     *
     * @return null
     */
    public function clearArrHotCategory()
    {
        return $this->clear(self::ARRHOTCATEGORY);
    }

    /**
     * Returns 'arrHotCategory' list
     *
     * @return \Xnhd\Core\Pb\Sdo\HotCategory[]
     */
    public function getArrHotCategory()
    {
        return $this->get(self::ARRHOTCATEGORY);
    }

    /**
     * Returns true if 'arrHotCategory' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrHotCategory()
    {
        return count($this->get(self::ARRHOTCATEGORY)) !== 0;
    }

    /**
     * Returns 'arrHotCategory' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrHotCategoryIterator()
    {
        return new \ArrayIterator($this->get(self::ARRHOTCATEGORY));
    }

    /**
     * Returns element from 'arrHotCategory' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\HotCategory
     */
    public function getArrHotCategoryAt($offset)
    {
        return $this->get(self::ARRHOTCATEGORY, $offset);
    }

    /**
     * Returns count of 'arrHotCategory' list
     *
     * @return int
     */
    public function getArrHotCategoryCount()
    {
        return $this->count(self::ARRHOTCATEGORY);
    }

    /**
     * Sets value of 'szUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzUrl($value)
    {
        return $this->set(self::SZURL, $value);
    }

    /**
     * Returns value of 'szUrl' property
     *
     * @return string
     */
    public function getSzUrl()
    {
        $value = $this->get(self::SZURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzUrl()
    {
        return $this->get(self::SZURL) !== null;
    }
}
}