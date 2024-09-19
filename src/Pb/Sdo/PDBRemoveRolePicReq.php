<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBRemoveRolePicReq message
 */
class PDBRemoveRolePicReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NPICINDEX = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPICINDEX => array(
            'name' => 'nPicIndex',
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
        $this->values[self::NPICINDEX] = null;
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
     * Sets value of 'nPicIndex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPicIndex($value)
    {
        return $this->set(self::NPICINDEX, $value);
    }

    /**
     * Returns value of 'nPicIndex' property
     *
     * @return integer
     */
    public function getNPicIndex()
    {
        $value = $this->get(self::NPICINDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPicIndex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPicIndex()
    {
        return $this->get(self::NPICINDEX) !== null;
    }
}
}