<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleQualifyInfo message
 */
class RoleQualifyInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const CURTITLE = 2;
    const BESTTITLE = 3;
    const MATCHCOUNT = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CURTITLE => array(
            'name' => 'curTitle',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\TitleInfo'
        ),
        self::BESTTITLE => array(
            'name' => 'bestTitle',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\TitleInfo'
        ),
        self::MATCHCOUNT => array(
            'name' => 'matchCount',
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
        $this->values[self::CURTITLE] = null;
        $this->values[self::BESTTITLE] = null;
        $this->values[self::MATCHCOUNT] = null;
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
     * Sets value of 'curTitle' property
     *
     * @param \Xnhd\Core\Pb\Sdo\TitleInfo $value Property value
     *
     * @return null
     */
    public function setCurTitle(\Xnhd\Core\Pb\Sdo\TitleInfo $value=null)
    {
        return $this->set(self::CURTITLE, $value);
    }

    /**
     * Returns value of 'curTitle' property
     *
     * @return \Xnhd\Core\Pb\Sdo\TitleInfo
     */
    public function getCurTitle()
    {
        return $this->get(self::CURTITLE);
    }

    /**
     * Returns true if 'curTitle' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCurTitle()
    {
        return $this->get(self::CURTITLE) !== null;
    }

    /**
     * Sets value of 'bestTitle' property
     *
     * @param \Xnhd\Core\Pb\Sdo\TitleInfo $value Property value
     *
     * @return null
     */
    public function setBestTitle(\Xnhd\Core\Pb\Sdo\TitleInfo $value=null)
    {
        return $this->set(self::BESTTITLE, $value);
    }

    /**
     * Returns value of 'bestTitle' property
     *
     * @return \Xnhd\Core\Pb\Sdo\TitleInfo
     */
    public function getBestTitle()
    {
        return $this->get(self::BESTTITLE);
    }

    /**
     * Returns true if 'bestTitle' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBestTitle()
    {
        return $this->get(self::BESTTITLE) !== null;
    }

    /**
     * Sets value of 'matchCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMatchCount($value)
    {
        return $this->set(self::MATCHCOUNT, $value);
    }

    /**
     * Returns value of 'matchCount' property
     *
     * @return integer
     */
    public function getMatchCount()
    {
        $value = $this->get(self::MATCHCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'matchCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMatchCount()
    {
        return $this->get(self::MATCHCOUNT) !== null;
    }
}
}