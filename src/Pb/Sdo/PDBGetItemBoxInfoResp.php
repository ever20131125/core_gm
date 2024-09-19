<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGetItemBoxInfoResp message
 */
class PDBGetItemBoxInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const NBOXID = 3;
    const STBOXINFO = 4;

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
        self::NBOXID => array(
            'name' => 'nBoxID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STBOXINFO => array(
            'name' => 'stBoxInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBoxInfo'
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
        $this->values[self::NBOXID] = null;
        $this->values[self::STBOXINFO] = null;
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
     * Sets value of 'nBoxID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBoxID($value)
    {
        return $this->set(self::NBOXID, $value);
    }

    /**
     * Returns value of 'nBoxID' property
     *
     * @return integer
     */
    public function getNBoxID()
    {
        $value = $this->get(self::NBOXID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBoxID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBoxID()
    {
        return $this->get(self::NBOXID) !== null;
    }

    /**
     * Sets value of 'stBoxInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBoxInfo $value Property value
     *
     * @return null
     */
    public function setStBoxInfo(\Xnhd\Core\Pb\Sdo\ItemBoxInfo $value=null)
    {
        return $this->set(self::STBOXINFO, $value);
    }

    /**
     * Returns value of 'stBoxInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBoxInfo
     */
    public function getStBoxInfo()
    {
        return $this->get(self::STBOXINFO);
    }

    /**
     * Returns true if 'stBoxInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStBoxInfo()
    {
        return $this->get(self::STBOXINFO) !== null;
    }
}
}