<?php
/**
 * Auto generated from complex.proto at 2021-06-05 14:13:39
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FaceInfo message
 */
class FaceInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NFACESLOT = 1;
    const SZACCOUNTID = 2;
    const NTIMETICK = 3;
    const SZFILEURL = 4;
    const GENDER = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NFACESLOT => array(
            'name' => 'nFaceSlot',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZACCOUNTID => array(
            'name' => 'szAccountID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NTIMETICK => array(
            'name' => 'nTimeTick',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZFILEURL => array(
            'name' => 'szFileUrl',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::GENDER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Gender::enmGender_Unknown,
            'name' => 'gender',
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
        $this->values[self::NFACESLOT] = null;
        $this->values[self::SZACCOUNTID] = null;
        $this->values[self::NTIMETICK] = null;
        $this->values[self::SZFILEURL] = null;
        $this->values[self::GENDER] = self::$fields[self::GENDER]['default'];
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
     * Sets value of 'nFaceSlot' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFaceSlot($value)
    {
        return $this->set(self::NFACESLOT, $value);
    }

    /**
     * Returns value of 'nFaceSlot' property
     *
     * @return integer
     */
    public function getNFaceSlot()
    {
        $value = $this->get(self::NFACESLOT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFaceSlot' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFaceSlot()
    {
        return $this->get(self::NFACESLOT) !== null;
    }

    /**
     * Sets value of 'szAccountID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzAccountID($value)
    {
        return $this->set(self::SZACCOUNTID, $value);
    }

    /**
     * Returns value of 'szAccountID' property
     *
     * @return string
     */
    public function getSzAccountID()
    {
        $value = $this->get(self::SZACCOUNTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szAccountID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzAccountID()
    {
        return $this->get(self::SZACCOUNTID) !== null;
    }

    /**
     * Sets value of 'nTimeTick' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTimeTick($value)
    {
        return $this->set(self::NTIMETICK, $value);
    }

    /**
     * Returns value of 'nTimeTick' property
     *
     * @return integer
     */
    public function getNTimeTick()
    {
        $value = $this->get(self::NTIMETICK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTimeTick' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTimeTick()
    {
        return $this->get(self::NTIMETICK) !== null;
    }

    /**
     * Sets value of 'szFileUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzFileUrl($value)
    {
        return $this->set(self::SZFILEURL, $value);
    }

    /**
     * Returns value of 'szFileUrl' property
     *
     * @return string
     */
    public function getSzFileUrl()
    {
        $value = $this->get(self::SZFILEURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szFileUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzFileUrl()
    {
        return $this->get(self::SZFILEURL) !== null;
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
}
}