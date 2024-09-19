<?php
/**
 * Auto generated from rankserver.proto at 2022-08-17 12:02:07
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RASGetRankReq message
 */
class RASGetRankReq extends \ProtobufMessage
{
    /* Field index constants */
    const MODE = 1;
    const RANKTYPE = 2;
    const PAGEID = 3;
    const OPTIONARR = 4;
    const MUSICID = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MODE => array(
            'name' => 'mode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RANKTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\RankType::enmRankType_None,
            'name' => 'rankType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PAGEID => array(
            'name' => 'pageID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OPTIONARR => array(
            'name' => 'optionArr',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MUSICID => array(
            'name' => 'musicID',
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
        $this->values[self::MODE] = null;
        $this->values[self::RANKTYPE] = self::$fields[self::RANKTYPE]['default'];
        $this->values[self::PAGEID] = null;
        $this->values[self::OPTIONARR] = array();
        $this->values[self::MUSICID] = null;
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
     * Sets value of 'mode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMode($value)
    {
        return $this->set(self::MODE, $value);
    }

    /**
     * Returns value of 'mode' property
     *
     * @return integer
     */
    public function getMode()
    {
        $value = $this->get(self::MODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'mode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMode()
    {
        return $this->get(self::MODE) !== null;
    }

    /**
     * Sets value of 'rankType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRankType($value)
    {
        return $this->set(self::RANKTYPE, $value);
    }

    /**
     * Returns value of 'rankType' property
     *
     * @return integer
     */
    public function getRankType()
    {
        $value = $this->get(self::RANKTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rankType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRankType()
    {
        return $this->get(self::RANKTYPE) !== null;
    }

    /**
     * Sets value of 'pageID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPageID($value)
    {
        return $this->set(self::PAGEID, $value);
    }

    /**
     * Returns value of 'pageID' property
     *
     * @return integer
     */
    public function getPageID()
    {
        $value = $this->get(self::PAGEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'pageID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPageID()
    {
        return $this->get(self::PAGEID) !== null;
    }

    /**
     * Appends value to 'optionArr' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendOptionArr($value)
    {
        return $this->append(self::OPTIONARR, $value);
    }

    /**
     * Clears 'optionArr' list
     *
     * @return null
     */
    public function clearOptionArr()
    {
        return $this->clear(self::OPTIONARR);
    }

    /**
     * Returns 'optionArr' list
     *
     * @return integer[]
     */
    public function getOptionArr()
    {
        return $this->get(self::OPTIONARR);
    }

    /**
     * Returns true if 'optionArr' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOptionArr()
    {
        return count($this->get(self::OPTIONARR)) !== 0;
    }

    /**
     * Returns 'optionArr' iterator
     *
     * @return \ArrayIterator
     */
    public function getOptionArrIterator()
    {
        return new \ArrayIterator($this->get(self::OPTIONARR));
    }

    /**
     * Returns element from 'optionArr' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getOptionArrAt($offset)
    {
        return $this->get(self::OPTIONARR, $offset);
    }

    /**
     * Returns count of 'optionArr' list
     *
     * @return int
     */
    public function getOptionArrCount()
    {
        return $this->count(self::OPTIONARR);
    }

    /**
     * Sets value of 'musicID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMusicID($value)
    {
        return $this->set(self::MUSICID, $value);
    }

    /**
     * Returns value of 'musicID' property
     *
     * @return integer
     */
    public function getMusicID()
    {
        $value = $this->get(self::MUSICID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'musicID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMusicID()
    {
        return $this->get(self::MUSICID) !== null;
    }
}
}