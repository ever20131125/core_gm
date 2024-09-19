<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * QualifyTitleEvent message
 */
class QualifyTitleEvent extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const TITLEINFO = 2;
    const NCWIN = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TITLEINFO => array(
            'name' => 'titleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\TitleInfo'
        ),
        self::NCWIN => array(
            'name' => 'nCWin',
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
        $this->values[self::TITLEINFO] = null;
        $this->values[self::NCWIN] = null;
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
     * Sets value of 'titleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\TitleInfo $value Property value
     *
     * @return null
     */
    public function setTitleInfo(\Xnhd\Core\Pb\Sdo\TitleInfo $value=null)
    {
        return $this->set(self::TITLEINFO, $value);
    }

    /**
     * Returns value of 'titleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\TitleInfo
     */
    public function getTitleInfo()
    {
        return $this->get(self::TITLEINFO);
    }

    /**
     * Returns true if 'titleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTitleInfo()
    {
        return $this->get(self::TITLEINFO) !== null;
    }

    /**
     * Sets value of 'nCWin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCWin($value)
    {
        return $this->set(self::NCWIN, $value);
    }

    /**
     * Returns value of 'nCWin' property
     *
     * @return integer
     */
    public function getNCWin()
    {
        $value = $this->get(self::NCWIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCWin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCWin()
    {
        return $this->get(self::NCWIN) !== null;
    }
}
}