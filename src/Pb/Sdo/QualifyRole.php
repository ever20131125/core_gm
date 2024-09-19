<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * QualifyRole message
 */
class QualifyRole extends \ProtobufMessage
{
    /* Field index constants */
    const TITLEINFO = 1;
    const NMINSTAR = 2;
    const NMAXSTAR = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TITLEINFO => array(
            'name' => 'titleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\TitleInfo'
        ),
        self::NMINSTAR => array(
            'name' => 'nMinStar',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMAXSTAR => array(
            'name' => 'nMaxStar',
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
        $this->values[self::TITLEINFO] = null;
        $this->values[self::NMINSTAR] = null;
        $this->values[self::NMAXSTAR] = null;
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
     * Sets value of 'nMinStar' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMinStar($value)
    {
        return $this->set(self::NMINSTAR, $value);
    }

    /**
     * Returns value of 'nMinStar' property
     *
     * @return integer
     */
    public function getNMinStar()
    {
        $value = $this->get(self::NMINSTAR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMinStar' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMinStar()
    {
        return $this->get(self::NMINSTAR) !== null;
    }

    /**
     * Sets value of 'nMaxStar' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMaxStar($value)
    {
        return $this->set(self::NMAXSTAR, $value);
    }

    /**
     * Returns value of 'nMaxStar' property
     *
     * @return integer
     */
    public function getNMaxStar()
    {
        $value = $this->get(self::NMAXSTAR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMaxStar' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMaxStar()
    {
        return $this->get(self::NMAXSTAR) !== null;
    }
}
}