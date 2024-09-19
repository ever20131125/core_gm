<?php
/**
 * Auto generated from taskserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TASAddPuzzlePartNoti message
 */
class TASAddPuzzlePartNoti extends \ProtobufMessage
{
    /* Field index constants */
    const ARRPART = 1;
    const THEMEID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ARRPART => array(
            'name' => 'arrPart',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\TourPart'
        ),
        self::THEMEID => array(
            'name' => 'themeID',
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
        $this->values[self::ARRPART] = array();
        $this->values[self::THEMEID] = null;
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
     * Appends value to 'arrPart' list
     *
     * @param \Xnhd\Core\Pb\Sdo\TourPart $value Value to append
     *
     * @return null
     */
    public function appendArrPart(\Xnhd\Core\Pb\Sdo\TourPart $value)
    {
        return $this->append(self::ARRPART, $value);
    }

    /**
     * Clears 'arrPart' list
     *
     * @return null
     */
    public function clearArrPart()
    {
        return $this->clear(self::ARRPART);
    }

    /**
     * Returns 'arrPart' list
     *
     * @return \Xnhd\Core\Pb\Sdo\TourPart[]
     */
    public function getArrPart()
    {
        return $this->get(self::ARRPART);
    }

    /**
     * Returns true if 'arrPart' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPart()
    {
        return count($this->get(self::ARRPART)) !== 0;
    }

    /**
     * Returns 'arrPart' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPartIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPART));
    }

    /**
     * Returns element from 'arrPart' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\TourPart
     */
    public function getArrPartAt($offset)
    {
        return $this->get(self::ARRPART, $offset);
    }

    /**
     * Returns count of 'arrPart' list
     *
     * @return int
     */
    public function getArrPartCount()
    {
        return $this->count(self::ARRPART);
    }

    /**
     * Sets value of 'themeID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setThemeID($value)
    {
        return $this->set(self::THEMEID, $value);
    }

    /**
     * Returns value of 'themeID' property
     *
     * @return integer
     */
    public function getThemeID()
    {
        $value = $this->get(self::THEMEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'themeID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasThemeID()
    {
        return $this->get(self::THEMEID) !== null;
    }
}
}