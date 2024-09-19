<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBOpenWishBoxReq message
 */
class IDBOpenWishBoxReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NITEMID = 2;
    const NQUANTITY = 3;
    const NFREE = 4;
    const NSOURCE = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NITEMID => array(
            'name' => 'nItemID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NQUANTITY => array(
            'name' => 'nQuantity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFREE => array(
            'name' => 'nFree',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSOURCE => array(
            'name' => 'nSource',
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
        $this->values[self::NITEMID] = null;
        $this->values[self::NQUANTITY] = null;
        $this->values[self::NFREE] = null;
        $this->values[self::NSOURCE] = null;
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
     * Sets value of 'nItemID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNItemID($value)
    {
        return $this->set(self::NITEMID, $value);
    }

    /**
     * Returns value of 'nItemID' property
     *
     * @return integer
     */
    public function getNItemID()
    {
        $value = $this->get(self::NITEMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nItemID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNItemID()
    {
        return $this->get(self::NITEMID) !== null;
    }

    /**
     * Sets value of 'nQuantity' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNQuantity($value)
    {
        return $this->set(self::NQUANTITY, $value);
    }

    /**
     * Returns value of 'nQuantity' property
     *
     * @return integer
     */
    public function getNQuantity()
    {
        $value = $this->get(self::NQUANTITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nQuantity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNQuantity()
    {
        return $this->get(self::NQUANTITY) !== null;
    }

    /**
     * Sets value of 'nFree' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFree($value)
    {
        return $this->set(self::NFREE, $value);
    }

    /**
     * Returns value of 'nFree' property
     *
     * @return integer
     */
    public function getNFree()
    {
        $value = $this->get(self::NFREE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFree' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFree()
    {
        return $this->get(self::NFREE) !== null;
    }

    /**
     * Sets value of 'nSource' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSource($value)
    {
        return $this->set(self::NSOURCE, $value);
    }

    /**
     * Returns value of 'nSource' property
     *
     * @return integer
     */
    public function getNSource()
    {
        $value = $this->get(self::NSOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSource' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSource()
    {
        return $this->get(self::NSOURCE) !== null;
    }
}
}