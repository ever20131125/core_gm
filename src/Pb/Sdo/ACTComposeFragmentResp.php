<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTComposeFragmentResp message
 */
class ACTComposeFragmentResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const NACTID = 3;
    const FRAGMENTINFO = 4;

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
        self::NACTID => array(
            'name' => 'nActID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRAGMENTINFO => array(
            'name' => 'fragmentInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\PuzzleFragmentInfo'
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
        $this->values[self::NACTID] = null;
        $this->values[self::FRAGMENTINFO] = null;
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
     * Sets value of 'nActID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNActID($value)
    {
        return $this->set(self::NACTID, $value);
    }

    /**
     * Returns value of 'nActID' property
     *
     * @return integer
     */
    public function getNActID()
    {
        $value = $this->get(self::NACTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nActID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNActID()
    {
        return $this->get(self::NACTID) !== null;
    }

    /**
     * Sets value of 'fragmentInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\PuzzleFragmentInfo $value Property value
     *
     * @return null
     */
    public function setFragmentInfo(\Xnhd\Core\Pb\Sdo\PuzzleFragmentInfo $value=null)
    {
        return $this->set(self::FRAGMENTINFO, $value);
    }

    /**
     * Returns value of 'fragmentInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\PuzzleFragmentInfo
     */
    public function getFragmentInfo()
    {
        return $this->get(self::FRAGMENTINFO);
    }

    /**
     * Returns true if 'fragmentInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFragmentInfo()
    {
        return $this->get(self::FRAGMENTINFO) !== null;
    }
}
}