<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * WeddingRankInfo message
 */
class WeddingRankInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NWEDDINGID = 1;
    const SZGROOMNAME = 2;
    const NGROOMID = 3;
    const GROOMGENDER = 4;
    const SZBRIDENAME = 5;
    const NBRIDEID = 6;
    const BRIDEGENDER = 7;
    const NLUXURY = 8;
    const NSTATE = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NWEDDINGID => array(
            'name' => 'nWeddingID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZGROOMNAME => array(
            'name' => 'szGroomName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NGROOMID => array(
            'name' => 'nGroomID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GROOMGENDER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Gender::enmGender_Unknown,
            'name' => 'groomGender',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZBRIDENAME => array(
            'name' => 'szBrideName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NBRIDEID => array(
            'name' => 'nBrideID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BRIDEGENDER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Gender::enmGender_Unknown,
            'name' => 'brideGender',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLUXURY => array(
            'name' => 'nLuxury',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTATE => array(
            'default' => \Xnhd\Core\Pb\Sdo\WeddingState::enmWeddingState_Normal,
            'name' => 'nState',
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
        $this->values[self::NWEDDINGID] = null;
        $this->values[self::SZGROOMNAME] = null;
        $this->values[self::NGROOMID] = null;
        $this->values[self::GROOMGENDER] = self::$fields[self::GROOMGENDER]['default'];
        $this->values[self::SZBRIDENAME] = null;
        $this->values[self::NBRIDEID] = null;
        $this->values[self::BRIDEGENDER] = self::$fields[self::BRIDEGENDER]['default'];
        $this->values[self::NLUXURY] = null;
        $this->values[self::NSTATE] = self::$fields[self::NSTATE]['default'];
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
     * Sets value of 'nWeddingID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNWeddingID($value)
    {
        return $this->set(self::NWEDDINGID, $value);
    }

    /**
     * Returns value of 'nWeddingID' property
     *
     * @return integer
     */
    public function getNWeddingID()
    {
        $value = $this->get(self::NWEDDINGID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nWeddingID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNWeddingID()
    {
        return $this->get(self::NWEDDINGID) !== null;
    }

    /**
     * Sets value of 'szGroomName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzGroomName($value)
    {
        return $this->set(self::SZGROOMNAME, $value);
    }

    /**
     * Returns value of 'szGroomName' property
     *
     * @return string
     */
    public function getSzGroomName()
    {
        $value = $this->get(self::SZGROOMNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szGroomName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzGroomName()
    {
        return $this->get(self::SZGROOMNAME) !== null;
    }

    /**
     * Sets value of 'nGroomID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNGroomID($value)
    {
        return $this->set(self::NGROOMID, $value);
    }

    /**
     * Returns value of 'nGroomID' property
     *
     * @return integer
     */
    public function getNGroomID()
    {
        $value = $this->get(self::NGROOMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nGroomID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNGroomID()
    {
        return $this->get(self::NGROOMID) !== null;
    }

    /**
     * Sets value of 'groomGender' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGroomGender($value)
    {
        return $this->set(self::GROOMGENDER, $value);
    }

    /**
     * Returns value of 'groomGender' property
     *
     * @return integer
     */
    public function getGroomGender()
    {
        $value = $this->get(self::GROOMGENDER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'groomGender' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGroomGender()
    {
        return $this->get(self::GROOMGENDER) !== null;
    }

    /**
     * Sets value of 'szBrideName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzBrideName($value)
    {
        return $this->set(self::SZBRIDENAME, $value);
    }

    /**
     * Returns value of 'szBrideName' property
     *
     * @return string
     */
    public function getSzBrideName()
    {
        $value = $this->get(self::SZBRIDENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szBrideName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzBrideName()
    {
        return $this->get(self::SZBRIDENAME) !== null;
    }

    /**
     * Sets value of 'nBrideID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBrideID($value)
    {
        return $this->set(self::NBRIDEID, $value);
    }

    /**
     * Returns value of 'nBrideID' property
     *
     * @return integer
     */
    public function getNBrideID()
    {
        $value = $this->get(self::NBRIDEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBrideID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBrideID()
    {
        return $this->get(self::NBRIDEID) !== null;
    }

    /**
     * Sets value of 'brideGender' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBrideGender($value)
    {
        return $this->set(self::BRIDEGENDER, $value);
    }

    /**
     * Returns value of 'brideGender' property
     *
     * @return integer
     */
    public function getBrideGender()
    {
        $value = $this->get(self::BRIDEGENDER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'brideGender' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBrideGender()
    {
        return $this->get(self::BRIDEGENDER) !== null;
    }

    /**
     * Sets value of 'nLuxury' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLuxury($value)
    {
        return $this->set(self::NLUXURY, $value);
    }

    /**
     * Returns value of 'nLuxury' property
     *
     * @return integer
     */
    public function getNLuxury()
    {
        $value = $this->get(self::NLUXURY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLuxury' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLuxury()
    {
        return $this->get(self::NLUXURY) !== null;
    }

    /**
     * Sets value of 'nState' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNState($value)
    {
        return $this->set(self::NSTATE, $value);
    }

    /**
     * Returns value of 'nState' property
     *
     * @return integer
     */
    public function getNState()
    {
        $value = $this->get(self::NSTATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nState' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNState()
    {
        return $this->get(self::NSTATE) !== null;
    }
}
}