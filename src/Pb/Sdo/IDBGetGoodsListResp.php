<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBGetGoodsListResp message
 */
class IDBGetGoodsListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const GENDER = 3;
    const ARRCATEGORYINFO = 4;

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
        self::GENDER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Gender::enmGender_Unknown,
            'name' => 'gender',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRCATEGORYINFO => array(
            'name' => 'arrCategoryInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\CategoryInfo'
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
        $this->values[self::GENDER] = self::$fields[self::GENDER]['default'];
        $this->values[self::ARRCATEGORYINFO] = array();
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
     * Appends value to 'arrCategoryInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\CategoryInfo $value Value to append
     *
     * @return null
     */
    public function appendArrCategoryInfo(\Xnhd\Core\Pb\Sdo\CategoryInfo $value)
    {
        return $this->append(self::ARRCATEGORYINFO, $value);
    }

    /**
     * Clears 'arrCategoryInfo' list
     *
     * @return null
     */
    public function clearArrCategoryInfo()
    {
        return $this->clear(self::ARRCATEGORYINFO);
    }

    /**
     * Returns 'arrCategoryInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\CategoryInfo[]
     */
    public function getArrCategoryInfo()
    {
        return $this->get(self::ARRCATEGORYINFO);
    }

    /**
     * Returns true if 'arrCategoryInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrCategoryInfo()
    {
        return count($this->get(self::ARRCATEGORYINFO)) !== 0;
    }

    /**
     * Returns 'arrCategoryInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrCategoryInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRCATEGORYINFO));
    }

    /**
     * Returns element from 'arrCategoryInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\CategoryInfo
     */
    public function getArrCategoryInfoAt($offset)
    {
        return $this->get(self::ARRCATEGORYINFO, $offset);
    }

    /**
     * Returns count of 'arrCategoryInfo' list
     *
     * @return int
     */
    public function getArrCategoryInfoCount()
    {
        return $this->count(self::ARRCATEGORYINFO);
    }
}
}