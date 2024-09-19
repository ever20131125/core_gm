<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FeteReportInfo message
 */
class FeteReportInfo extends \ProtobufMessage
{
    /* Field index constants */
    const WINERID = 1;
    const WINERNAME = 2;
    const WINERGAMESCORE = 3;
    const LOSERID = 4;
    const LOSERNAME = 5;
    const LOSERGAMESCORE = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::WINERID => array(
            'name' => 'winerID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WINERNAME => array(
            'name' => 'winerName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::WINERGAMESCORE => array(
            'name' => 'winerGameScore',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOSERID => array(
            'name' => 'loserID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOSERNAME => array(
            'name' => 'loserName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LOSERGAMESCORE => array(
            'name' => 'loserGameScore',
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
        $this->values[self::WINERID] = null;
        $this->values[self::WINERNAME] = null;
        $this->values[self::WINERGAMESCORE] = null;
        $this->values[self::LOSERID] = null;
        $this->values[self::LOSERNAME] = null;
        $this->values[self::LOSERGAMESCORE] = null;
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
     * Sets value of 'winerID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWinerID($value)
    {
        return $this->set(self::WINERID, $value);
    }

    /**
     * Returns value of 'winerID' property
     *
     * @return integer
     */
    public function getWinerID()
    {
        $value = $this->get(self::WINERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'winerID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWinerID()
    {
        return $this->get(self::WINERID) !== null;
    }

    /**
     * Sets value of 'winerName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWinerName($value)
    {
        return $this->set(self::WINERNAME, $value);
    }

    /**
     * Returns value of 'winerName' property
     *
     * @return string
     */
    public function getWinerName()
    {
        $value = $this->get(self::WINERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'winerName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWinerName()
    {
        return $this->get(self::WINERNAME) !== null;
    }

    /**
     * Sets value of 'winerGameScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWinerGameScore($value)
    {
        return $this->set(self::WINERGAMESCORE, $value);
    }

    /**
     * Returns value of 'winerGameScore' property
     *
     * @return integer
     */
    public function getWinerGameScore()
    {
        $value = $this->get(self::WINERGAMESCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'winerGameScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWinerGameScore()
    {
        return $this->get(self::WINERGAMESCORE) !== null;
    }

    /**
     * Sets value of 'loserID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLoserID($value)
    {
        return $this->set(self::LOSERID, $value);
    }

    /**
     * Returns value of 'loserID' property
     *
     * @return integer
     */
    public function getLoserID()
    {
        $value = $this->get(self::LOSERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'loserID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoserID()
    {
        return $this->get(self::LOSERID) !== null;
    }

    /**
     * Sets value of 'loserName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLoserName($value)
    {
        return $this->set(self::LOSERNAME, $value);
    }

    /**
     * Returns value of 'loserName' property
     *
     * @return string
     */
    public function getLoserName()
    {
        $value = $this->get(self::LOSERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'loserName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoserName()
    {
        return $this->get(self::LOSERNAME) !== null;
    }

    /**
     * Sets value of 'loserGameScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLoserGameScore($value)
    {
        return $this->set(self::LOSERGAMESCORE, $value);
    }

    /**
     * Returns value of 'loserGameScore' property
     *
     * @return integer
     */
    public function getLoserGameScore()
    {
        $value = $this->get(self::LOSERGAMESCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'loserGameScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoserGameScore()
    {
        return $this->get(self::LOSERGAMESCORE) !== null;
    }
}
}