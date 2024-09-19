<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSCoupleMedalResp message
 */
class RLSCoupleMedalResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRMEDAL = 2;
    const ARRMEDALUNIX = 3;
    const ARRPRIZE = 4;
    const ARRTHEME = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRMEDAL => array(
            'name' => 'arrMedal',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRMEDALUNIX => array(
            'name' => 'arrMedalUnix',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRPRIZE => array(
            'name' => 'arrPrize',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRTHEME => array(
            'name' => 'arrTheme',
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::ARRMEDAL] = array();
        $this->values[self::ARRMEDALUNIX] = array();
        $this->values[self::ARRPRIZE] = array();
        $this->values[self::ARRTHEME] = array();
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
     * Sets value of 'nErrorCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNErrorCode($value)
    {
        return $this->set(self::NERRORCODE, $value);
    }

    /**
     * Returns value of 'nErrorCode' property
     *
     * @return integer
     */
    public function getNErrorCode()
    {
        $value = $this->get(self::NERRORCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNErrorCode()
    {
        return $this->get(self::NERRORCODE) !== null;
    }

    /**
     * Appends value to 'arrMedal' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrMedal($value)
    {
        return $this->append(self::ARRMEDAL, $value);
    }

    /**
     * Clears 'arrMedal' list
     *
     * @return null
     */
    public function clearArrMedal()
    {
        return $this->clear(self::ARRMEDAL);
    }

    /**
     * Returns 'arrMedal' list
     *
     * @return integer[]
     */
    public function getArrMedal()
    {
        return $this->get(self::ARRMEDAL);
    }

    /**
     * Returns true if 'arrMedal' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrMedal()
    {
        return count($this->get(self::ARRMEDAL)) !== 0;
    }

    /**
     * Returns 'arrMedal' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrMedalIterator()
    {
        return new \ArrayIterator($this->get(self::ARRMEDAL));
    }

    /**
     * Returns element from 'arrMedal' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrMedalAt($offset)
    {
        return $this->get(self::ARRMEDAL, $offset);
    }

    /**
     * Returns count of 'arrMedal' list
     *
     * @return int
     */
    public function getArrMedalCount()
    {
        return $this->count(self::ARRMEDAL);
    }

    /**
     * Appends value to 'arrMedalUnix' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrMedalUnix($value)
    {
        return $this->append(self::ARRMEDALUNIX, $value);
    }

    /**
     * Clears 'arrMedalUnix' list
     *
     * @return null
     */
    public function clearArrMedalUnix()
    {
        return $this->clear(self::ARRMEDALUNIX);
    }

    /**
     * Returns 'arrMedalUnix' list
     *
     * @return integer[]
     */
    public function getArrMedalUnix()
    {
        return $this->get(self::ARRMEDALUNIX);
    }

    /**
     * Returns true if 'arrMedalUnix' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrMedalUnix()
    {
        return count($this->get(self::ARRMEDALUNIX)) !== 0;
    }

    /**
     * Returns 'arrMedalUnix' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrMedalUnixIterator()
    {
        return new \ArrayIterator($this->get(self::ARRMEDALUNIX));
    }

    /**
     * Returns element from 'arrMedalUnix' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrMedalUnixAt($offset)
    {
        return $this->get(self::ARRMEDALUNIX, $offset);
    }

    /**
     * Returns count of 'arrMedalUnix' list
     *
     * @return int
     */
    public function getArrMedalUnixCount()
    {
        return $this->count(self::ARRMEDALUNIX);
    }

    /**
     * Appends value to 'arrPrize' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrPrize($value)
    {
        return $this->append(self::ARRPRIZE, $value);
    }

    /**
     * Clears 'arrPrize' list
     *
     * @return null
     */
    public function clearArrPrize()
    {
        return $this->clear(self::ARRPRIZE);
    }

    /**
     * Returns 'arrPrize' list
     *
     * @return integer[]
     */
    public function getArrPrize()
    {
        return $this->get(self::ARRPRIZE);
    }

    /**
     * Returns true if 'arrPrize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPrize()
    {
        return count($this->get(self::ARRPRIZE)) !== 0;
    }

    /**
     * Returns 'arrPrize' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPrizeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPRIZE));
    }

    /**
     * Returns element from 'arrPrize' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrPrizeAt($offset)
    {
        return $this->get(self::ARRPRIZE, $offset);
    }

    /**
     * Returns count of 'arrPrize' list
     *
     * @return int
     */
    public function getArrPrizeCount()
    {
        return $this->count(self::ARRPRIZE);
    }

    /**
     * Appends value to 'arrTheme' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrTheme($value)
    {
        return $this->append(self::ARRTHEME, $value);
    }

    /**
     * Clears 'arrTheme' list
     *
     * @return null
     */
    public function clearArrTheme()
    {
        return $this->clear(self::ARRTHEME);
    }

    /**
     * Returns 'arrTheme' list
     *
     * @return integer[]
     */
    public function getArrTheme()
    {
        return $this->get(self::ARRTHEME);
    }

    /**
     * Returns true if 'arrTheme' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrTheme()
    {
        return count($this->get(self::ARRTHEME)) !== 0;
    }

    /**
     * Returns 'arrTheme' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrThemeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRTHEME));
    }

    /**
     * Returns element from 'arrTheme' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrThemeAt($offset)
    {
        return $this->get(self::ARRTHEME, $offset);
    }

    /**
     * Returns count of 'arrTheme' list
     *
     * @return int
     */
    public function getArrThemeCount()
    {
        return $this->count(self::ARRTHEME);
    }
}
}