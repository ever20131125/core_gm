<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleFriendInfo message
 */
class RoleFriendInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NFRIENDID = 1;
    const NLEVEL = 2;
    const NINTIMACYLEVEL = 3;
    const NFRIENDTYPE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NFRIENDID => array(
            'name' => 'nFriendID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLEVEL => array(
            'name' => 'nLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NINTIMACYLEVEL => array(
            'name' => 'nIntimacyLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NFRIENDTYPE => array(
            'name' => 'nFriendType',
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
        $this->values[self::NFRIENDID] = null;
        $this->values[self::NLEVEL] = null;
        $this->values[self::NINTIMACYLEVEL] = null;
        $this->values[self::NFRIENDTYPE] = null;
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
     * Sets value of 'nFriendID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFriendID($value)
    {
        return $this->set(self::NFRIENDID, $value);
    }

    /**
     * Returns value of 'nFriendID' property
     *
     * @return integer
     */
    public function getNFriendID()
    {
        $value = $this->get(self::NFRIENDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFriendID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFriendID()
    {
        return $this->get(self::NFRIENDID) !== null;
    }

    /**
     * Sets value of 'nLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLevel($value)
    {
        return $this->set(self::NLEVEL, $value);
    }

    /**
     * Returns value of 'nLevel' property
     *
     * @return integer
     */
    public function getNLevel()
    {
        $value = $this->get(self::NLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLevel()
    {
        return $this->get(self::NLEVEL) !== null;
    }

    /**
     * Sets value of 'nIntimacyLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNIntimacyLevel($value)
    {
        return $this->set(self::NINTIMACYLEVEL, $value);
    }

    /**
     * Returns value of 'nIntimacyLevel' property
     *
     * @return integer
     */
    public function getNIntimacyLevel()
    {
        $value = $this->get(self::NINTIMACYLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nIntimacyLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNIntimacyLevel()
    {
        return $this->get(self::NINTIMACYLEVEL) !== null;
    }

    /**
     * Sets value of 'nFriendType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFriendType($value)
    {
        return $this->set(self::NFRIENDTYPE, $value);
    }

    /**
     * Returns value of 'nFriendType' property
     *
     * @return integer
     */
    public function getNFriendType()
    {
        $value = $this->get(self::NFRIENDTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFriendType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFriendType()
    {
        return $this->get(self::NFRIENDTYPE) !== null;
    }
}
}