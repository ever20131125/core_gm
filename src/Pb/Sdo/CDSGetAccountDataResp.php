<?php
/**
 * Auto generated from centerdataserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CDSGetAccountDataResp message
 */
class CDSGetAccountDataResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const PUBLICINFOLIST = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::PUBLICINFOLIST => array(
            'name' => 'PublicInfoList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
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
        $this->values[self::PUBLICINFOLIST] = array();
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
     * Appends value to 'PublicInfoList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePublicInfo $value Value to append
     *
     * @return null
     */
    public function appendPublicInfoList(\Xnhd\Core\Pb\Sdo\RolePublicInfo $value)
    {
        return $this->append(self::PUBLICINFOLIST, $value);
    }

    /**
     * Clears 'PublicInfoList' list
     *
     * @return null
     */
    public function clearPublicInfoList()
    {
        return $this->clear(self::PUBLICINFOLIST);
    }

    /**
     * Returns 'PublicInfoList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo[]
     */
    public function getPublicInfoList()
    {
        return $this->get(self::PUBLICINFOLIST);
    }

    /**
     * Returns true if 'PublicInfoList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPublicInfoList()
    {
        return count($this->get(self::PUBLICINFOLIST)) !== 0;
    }

    /**
     * Returns 'PublicInfoList' iterator
     *
     * @return \ArrayIterator
     */
    public function getPublicInfoListIterator()
    {
        return new \ArrayIterator($this->get(self::PUBLICINFOLIST));
    }

    /**
     * Returns element from 'PublicInfoList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo
     */
    public function getPublicInfoListAt($offset)
    {
        return $this->get(self::PUBLICINFOLIST, $offset);
    }

    /**
     * Returns count of 'PublicInfoList' list
     *
     * @return int
     */
    public function getPublicInfoListCount()
    {
        return $this->count(self::PUBLICINFOLIST);
    }
}
}