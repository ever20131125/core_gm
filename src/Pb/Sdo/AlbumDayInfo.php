<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * AlbumDayInfo message
 */
class AlbumDayInfo extends \ProtobufMessage
{
    /* Field index constants */
    const DAY = 1;
    const DAYTYPE = 2;
    const DAYDATA = 3;
    const DAYDATAPARAM = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DAY => array(
            'name' => 'day',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DAYTYPE => array(
            'name' => 'dayType',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DAYDATA => array(
            'name' => 'dayData',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DAYDATAPARAM => array(
            'name' => 'dayDataParam',
            'repeated' => true,
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
        $this->values[self::DAY] = null;
        $this->values[self::DAYTYPE] = array();
        $this->values[self::DAYDATA] = array();
        $this->values[self::DAYDATAPARAM] = array();
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
     * Sets value of 'day' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDay($value)
    {
        return $this->set(self::DAY, $value);
    }

    /**
     * Returns value of 'day' property
     *
     * @return integer
     */
    public function getDay()
    {
        $value = $this->get(self::DAY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'day' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDay()
    {
        return $this->get(self::DAY) !== null;
    }

    /**
     * Appends value to 'dayType' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendDayType($value)
    {
        return $this->append(self::DAYTYPE, $value);
    }

    /**
     * Clears 'dayType' list
     *
     * @return null
     */
    public function clearDayType()
    {
        return $this->clear(self::DAYTYPE);
    }

    /**
     * Returns 'dayType' list
     *
     * @return integer[]
     */
    public function getDayType()
    {
        return $this->get(self::DAYTYPE);
    }

    /**
     * Returns true if 'dayType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDayType()
    {
        return count($this->get(self::DAYTYPE)) !== 0;
    }

    /**
     * Returns 'dayType' iterator
     *
     * @return \ArrayIterator
     */
    public function getDayTypeIterator()
    {
        return new \ArrayIterator($this->get(self::DAYTYPE));
    }

    /**
     * Returns element from 'dayType' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getDayTypeAt($offset)
    {
        return $this->get(self::DAYTYPE, $offset);
    }

    /**
     * Returns count of 'dayType' list
     *
     * @return int
     */
    public function getDayTypeCount()
    {
        return $this->count(self::DAYTYPE);
    }

    /**
     * Appends value to 'dayData' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendDayData($value)
    {
        return $this->append(self::DAYDATA, $value);
    }

    /**
     * Clears 'dayData' list
     *
     * @return null
     */
    public function clearDayData()
    {
        return $this->clear(self::DAYDATA);
    }

    /**
     * Returns 'dayData' list
     *
     * @return integer[]
     */
    public function getDayData()
    {
        return $this->get(self::DAYDATA);
    }

    /**
     * Returns true if 'dayData' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDayData()
    {
        return count($this->get(self::DAYDATA)) !== 0;
    }

    /**
     * Returns 'dayData' iterator
     *
     * @return \ArrayIterator
     */
    public function getDayDataIterator()
    {
        return new \ArrayIterator($this->get(self::DAYDATA));
    }

    /**
     * Returns element from 'dayData' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getDayDataAt($offset)
    {
        return $this->get(self::DAYDATA, $offset);
    }

    /**
     * Returns count of 'dayData' list
     *
     * @return int
     */
    public function getDayDataCount()
    {
        return $this->count(self::DAYDATA);
    }

    /**
     * Appends value to 'dayDataParam' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendDayDataParam($value)
    {
        return $this->append(self::DAYDATAPARAM, $value);
    }

    /**
     * Clears 'dayDataParam' list
     *
     * @return null
     */
    public function clearDayDataParam()
    {
        return $this->clear(self::DAYDATAPARAM);
    }

    /**
     * Returns 'dayDataParam' list
     *
     * @return integer[]
     */
    public function getDayDataParam()
    {
        return $this->get(self::DAYDATAPARAM);
    }

    /**
     * Returns true if 'dayDataParam' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDayDataParam()
    {
        return count($this->get(self::DAYDATAPARAM)) !== 0;
    }

    /**
     * Returns 'dayDataParam' iterator
     *
     * @return \ArrayIterator
     */
    public function getDayDataParamIterator()
    {
        return new \ArrayIterator($this->get(self::DAYDATAPARAM));
    }

    /**
     * Returns element from 'dayDataParam' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getDayDataParamAt($offset)
    {
        return $this->get(self::DAYDATAPARAM, $offset);
    }

    /**
     * Returns count of 'dayDataParam' list
     *
     * @return int
     */
    public function getDayDataParamCount()
    {
        return $this->count(self::DAYDATAPARAM);
    }
}
}