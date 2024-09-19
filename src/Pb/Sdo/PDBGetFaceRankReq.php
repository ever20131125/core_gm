<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGetFaceRankReq message
 */
class PDBGetFaceRankReq extends \ProtobufMessage
{
    /* Field index constants */
    const GENDER = 1;
    const NSTARTINDEX = 2;
    const NENDINDEX = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GENDER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Gender::enmGender_Unknown,
            'name' => 'gender',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTARTINDEX => array(
            'name' => 'nStartIndex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NENDINDEX => array(
            'name' => 'nEndIndex',
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
        $this->values[self::GENDER] = self::$fields[self::GENDER]['default'];
        $this->values[self::NSTARTINDEX] = null;
        $this->values[self::NENDINDEX] = null;
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
     * Sets value of 'nStartIndex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStartIndex($value)
    {
        return $this->set(self::NSTARTINDEX, $value);
    }

    /**
     * Returns value of 'nStartIndex' property
     *
     * @return integer
     */
    public function getNStartIndex()
    {
        $value = $this->get(self::NSTARTINDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStartIndex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStartIndex()
    {
        return $this->get(self::NSTARTINDEX) !== null;
    }

    /**
     * Sets value of 'nEndIndex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNEndIndex($value)
    {
        return $this->set(self::NENDINDEX, $value);
    }

    /**
     * Returns value of 'nEndIndex' property
     *
     * @return integer
     */
    public function getNEndIndex()
    {
        $value = $this->get(self::NENDINDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nEndIndex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNEndIndex()
    {
        return $this->get(self::NENDINDEX) !== null;
    }
}
}