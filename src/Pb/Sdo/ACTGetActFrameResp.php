<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTGetActFrameResp message
 */
class ACTGetActFrameResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEID = 2;
    const ARRFRAMELIST = 3;
    const ARRBANNERLIST = 4;
    const ROLEACTINFO = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRFRAMELIST => array(
            'name' => 'arrFrameList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ActFrame'
        ),
        self::ARRBANNERLIST => array(
            'name' => 'arrBannerList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\BannerInfo'
        ),
        self::ROLEACTINFO => array(
            'name' => 'roleActInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleActInfo'
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
        $this->values[self::ROLEID] = null;
        $this->values[self::ARRFRAMELIST] = array();
        $this->values[self::ARRBANNERLIST] = array();
        $this->values[self::ROLEACTINFO] = null;
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
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Appends value to 'arrFrameList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ActFrame $value Value to append
     *
     * @return null
     */
    public function appendArrFrameList(\Xnhd\Core\Pb\Sdo\ActFrame $value)
    {
        return $this->append(self::ARRFRAMELIST, $value);
    }

    /**
     * Clears 'arrFrameList' list
     *
     * @return null
     */
    public function clearArrFrameList()
    {
        return $this->clear(self::ARRFRAMELIST);
    }

    /**
     * Returns 'arrFrameList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ActFrame[]
     */
    public function getArrFrameList()
    {
        return $this->get(self::ARRFRAMELIST);
    }

    /**
     * Returns true if 'arrFrameList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrFrameList()
    {
        return count($this->get(self::ARRFRAMELIST)) !== 0;
    }

    /**
     * Returns 'arrFrameList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrFrameListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRFRAMELIST));
    }

    /**
     * Returns element from 'arrFrameList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ActFrame
     */
    public function getArrFrameListAt($offset)
    {
        return $this->get(self::ARRFRAMELIST, $offset);
    }

    /**
     * Returns count of 'arrFrameList' list
     *
     * @return int
     */
    public function getArrFrameListCount()
    {
        return $this->count(self::ARRFRAMELIST);
    }

    /**
     * Appends value to 'arrBannerList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\BannerInfo $value Value to append
     *
     * @return null
     */
    public function appendArrBannerList(\Xnhd\Core\Pb\Sdo\BannerInfo $value)
    {
        return $this->append(self::ARRBANNERLIST, $value);
    }

    /**
     * Clears 'arrBannerList' list
     *
     * @return null
     */
    public function clearArrBannerList()
    {
        return $this->clear(self::ARRBANNERLIST);
    }

    /**
     * Returns 'arrBannerList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\BannerInfo[]
     */
    public function getArrBannerList()
    {
        return $this->get(self::ARRBANNERLIST);
    }

    /**
     * Returns true if 'arrBannerList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrBannerList()
    {
        return count($this->get(self::ARRBANNERLIST)) !== 0;
    }

    /**
     * Returns 'arrBannerList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrBannerListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRBANNERLIST));
    }

    /**
     * Returns element from 'arrBannerList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\BannerInfo
     */
    public function getArrBannerListAt($offset)
    {
        return $this->get(self::ARRBANNERLIST, $offset);
    }

    /**
     * Returns count of 'arrBannerList' list
     *
     * @return int
     */
    public function getArrBannerListCount()
    {
        return $this->count(self::ARRBANNERLIST);
    }

    /**
     * Sets value of 'roleActInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleActInfo $value Property value
     *
     * @return null
     */
    public function setRoleActInfo(\Xnhd\Core\Pb\Sdo\RoleActInfo $value=null)
    {
        return $this->set(self::ROLEACTINFO, $value);
    }

    /**
     * Returns value of 'roleActInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleActInfo
     */
    public function getRoleActInfo()
    {
        return $this->get(self::ROLEACTINFO);
    }

    /**
     * Returns true if 'roleActInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleActInfo()
    {
        return $this->get(self::ROLEACTINFO) !== null;
    }
}
}