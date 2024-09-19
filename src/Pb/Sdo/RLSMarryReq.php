<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSMarryReq message
 */
class RLSMarryReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const LOVERID = 2;
    const WEDDINGID = 3;
    const WEDDINGDETAIL = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOVERID => array(
            'name' => 'loverID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WEDDINGID => array(
            'name' => 'weddingID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WEDDINGDETAIL => array(
            'name' => 'weddingDetail',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoomDetailInfo'
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
        $this->values[self::ROLEID] = null;
        $this->values[self::LOVERID] = null;
        $this->values[self::WEDDINGID] = null;
        $this->values[self::WEDDINGDETAIL] = null;
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
     * Sets value of 'loverID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLoverID($value)
    {
        return $this->set(self::LOVERID, $value);
    }

    /**
     * Returns value of 'loverID' property
     *
     * @return integer
     */
    public function getLoverID()
    {
        $value = $this->get(self::LOVERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'loverID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoverID()
    {
        return $this->get(self::LOVERID) !== null;
    }

    /**
     * Sets value of 'weddingID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWeddingID($value)
    {
        return $this->set(self::WEDDINGID, $value);
    }

    /**
     * Returns value of 'weddingID' property
     *
     * @return integer
     */
    public function getWeddingID()
    {
        $value = $this->get(self::WEDDINGID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'weddingID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWeddingID()
    {
        return $this->get(self::WEDDINGID) !== null;
    }

    /**
     * Sets value of 'weddingDetail' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoomDetailInfo $value Property value
     *
     * @return null
     */
    public function setWeddingDetail(\Xnhd\Core\Pb\Sdo\RoomDetailInfo $value=null)
    {
        return $this->set(self::WEDDINGDETAIL, $value);
    }

    /**
     * Returns value of 'weddingDetail' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoomDetailInfo
     */
    public function getWeddingDetail()
    {
        return $this->get(self::WEDDINGDETAIL);
    }

    /**
     * Returns true if 'weddingDetail' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWeddingDetail()
    {
        return $this->get(self::WEDDINGDETAIL) !== null;
    }
}
}