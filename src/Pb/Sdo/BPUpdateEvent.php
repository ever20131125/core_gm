<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * BPUpdateEvent message
 */
class BPUpdateEvent extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NLEVEL = 2;
    const NEXP = 3;
    const NADDEXP = 4;
    const NADDLEVEL = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLEVEL => array(
            'name' => 'nLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEXP => array(
            'name' => 'nExp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NADDEXP => array(
            'name' => 'nAddExp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NADDLEVEL => array(
            'name' => 'nAddLevel',
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
        $this->values[self::NLEVEL] = null;
        $this->values[self::NEXP] = null;
        $this->values[self::NADDEXP] = null;
        $this->values[self::NADDLEVEL] = null;
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
     * Sets value of 'nExp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNExp($value)
    {
        return $this->set(self::NEXP, $value);
    }

    /**
     * Returns value of 'nExp' property
     *
     * @return integer
     */
    public function getNExp()
    {
        $value = $this->get(self::NEXP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nExp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNExp()
    {
        return $this->get(self::NEXP) !== null;
    }

    /**
     * Sets value of 'nAddExp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAddExp($value)
    {
        return $this->set(self::NADDEXP, $value);
    }

    /**
     * Returns value of 'nAddExp' property
     *
     * @return integer
     */
    public function getNAddExp()
    {
        $value = $this->get(self::NADDEXP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAddExp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAddExp()
    {
        return $this->get(self::NADDEXP) !== null;
    }

    /**
     * Sets value of 'nAddLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAddLevel($value)
    {
        return $this->set(self::NADDLEVEL, $value);
    }

    /**
     * Returns value of 'nAddLevel' property
     *
     * @return integer
     */
    public function getNAddLevel()
    {
        $value = $this->get(self::NADDLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAddLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAddLevel()
    {
        return $this->get(self::NADDLEVEL) !== null;
    }
}
}