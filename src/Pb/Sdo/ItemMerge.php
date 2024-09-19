<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ItemMerge message
 */
class ItemMerge extends \ProtobufMessage
{
    /* Field index constants */
    const NITEMINSID = 1;
    const NITEMID = 2;
    const NPOSITIONX = 3;
    const NPOSITIONY = 4;
    const NSTATUS = 5;
    const NCDTIME = 6;
    const NOPTION = 7;
    const NLEVEL = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NITEMINSID => array(
            'name' => 'nItemInsID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NITEMID => array(
            'name' => 'nItemID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPOSITIONX => array(
            'name' => 'nPositionX',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPOSITIONY => array(
            'name' => 'nPositionY',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTATUS => array(
            'default' => \Xnhd\Core\Pb\Sdo\MergeStatus::enmMergeStatus_Normal,
            'name' => 'nStatus',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCDTIME => array(
            'name' => 'nCDTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOPTION => array(
            'name' => 'nOption',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLEVEL => array(
            'name' => 'nLevel',
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
        $this->values[self::NITEMINSID] = null;
        $this->values[self::NITEMID] = null;
        $this->values[self::NPOSITIONX] = null;
        $this->values[self::NPOSITIONY] = null;
        $this->values[self::NSTATUS] = self::$fields[self::NSTATUS]['default'];
        $this->values[self::NCDTIME] = null;
        $this->values[self::NOPTION] = null;
        $this->values[self::NLEVEL] = null;
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
     * Sets value of 'nItemInsID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNItemInsID($value)
    {
        return $this->set(self::NITEMINSID, $value);
    }

    /**
     * Returns value of 'nItemInsID' property
     *
     * @return integer
     */
    public function getNItemInsID()
    {
        $value = $this->get(self::NITEMINSID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nItemInsID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNItemInsID()
    {
        return $this->get(self::NITEMINSID) !== null;
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
     * Sets value of 'nPositionX' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPositionX($value)
    {
        return $this->set(self::NPOSITIONX, $value);
    }

    /**
     * Returns value of 'nPositionX' property
     *
     * @return integer
     */
    public function getNPositionX()
    {
        $value = $this->get(self::NPOSITIONX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPositionX' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPositionX()
    {
        return $this->get(self::NPOSITIONX) !== null;
    }

    /**
     * Sets value of 'nPositionY' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPositionY($value)
    {
        return $this->set(self::NPOSITIONY, $value);
    }

    /**
     * Returns value of 'nPositionY' property
     *
     * @return integer
     */
    public function getNPositionY()
    {
        $value = $this->get(self::NPOSITIONY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPositionY' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPositionY()
    {
        return $this->get(self::NPOSITIONY) !== null;
    }

    /**
     * Sets value of 'nStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStatus($value)
    {
        return $this->set(self::NSTATUS, $value);
    }

    /**
     * Returns value of 'nStatus' property
     *
     * @return integer
     */
    public function getNStatus()
    {
        $value = $this->get(self::NSTATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStatus()
    {
        return $this->get(self::NSTATUS) !== null;
    }

    /**
     * Sets value of 'nCDTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCDTime($value)
    {
        return $this->set(self::NCDTIME, $value);
    }

    /**
     * Returns value of 'nCDTime' property
     *
     * @return integer
     */
    public function getNCDTime()
    {
        $value = $this->get(self::NCDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCDTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCDTime()
    {
        return $this->get(self::NCDTIME) !== null;
    }

    /**
     * Sets value of 'nOption' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOption($value)
    {
        return $this->set(self::NOPTION, $value);
    }

    /**
     * Returns value of 'nOption' property
     *
     * @return integer
     */
    public function getNOption()
    {
        $value = $this->get(self::NOPTION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOption' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOption()
    {
        return $this->get(self::NOPTION) !== null;
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
}
}