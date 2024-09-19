<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * UnlockMusicEvent message
 */
class UnlockMusicEvent extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NLEISUREUNLOCKEDNUM = 2;
    const NPROFESSIONUNLOCKEDNUM = 3;
    const NMASTERUNLOCKEDNUM = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLEISUREUNLOCKEDNUM => array(
            'name' => 'nLeisureUnlockedNum',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPROFESSIONUNLOCKEDNUM => array(
            'name' => 'nProfessionUnlockedNum',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMASTERUNLOCKEDNUM => array(
            'name' => 'nMasterUnlockedNum',
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
        $this->values[self::NLEISUREUNLOCKEDNUM] = null;
        $this->values[self::NPROFESSIONUNLOCKEDNUM] = null;
        $this->values[self::NMASTERUNLOCKEDNUM] = null;
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
     * Sets value of 'nLeisureUnlockedNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLeisureUnlockedNum($value)
    {
        return $this->set(self::NLEISUREUNLOCKEDNUM, $value);
    }

    /**
     * Returns value of 'nLeisureUnlockedNum' property
     *
     * @return integer
     */
    public function getNLeisureUnlockedNum()
    {
        $value = $this->get(self::NLEISUREUNLOCKEDNUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLeisureUnlockedNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLeisureUnlockedNum()
    {
        return $this->get(self::NLEISUREUNLOCKEDNUM) !== null;
    }

    /**
     * Sets value of 'nProfessionUnlockedNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNProfessionUnlockedNum($value)
    {
        return $this->set(self::NPROFESSIONUNLOCKEDNUM, $value);
    }

    /**
     * Returns value of 'nProfessionUnlockedNum' property
     *
     * @return integer
     */
    public function getNProfessionUnlockedNum()
    {
        $value = $this->get(self::NPROFESSIONUNLOCKEDNUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nProfessionUnlockedNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNProfessionUnlockedNum()
    {
        return $this->get(self::NPROFESSIONUNLOCKEDNUM) !== null;
    }

    /**
     * Sets value of 'nMasterUnlockedNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMasterUnlockedNum($value)
    {
        return $this->set(self::NMASTERUNLOCKEDNUM, $value);
    }

    /**
     * Returns value of 'nMasterUnlockedNum' property
     *
     * @return integer
     */
    public function getNMasterUnlockedNum()
    {
        $value = $this->get(self::NMASTERUNLOCKEDNUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMasterUnlockedNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMasterUnlockedNum()
    {
        return $this->get(self::NMASTERUNLOCKEDNUM) !== null;
    }
}
}