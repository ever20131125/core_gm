<?php
/**
 * Auto generated from rankserver.proto at 2022-08-17 12:02:07
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RASGetRankResp message
 */
class RASGetRankResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const MODE = 2;
    const RANKTYPE = 3;
    const PAGEID = 4;
    const RANKINFOLIST = 5;
    const TOTALPAGEID = 6;
    const OPENRANK = 7;
    const MUSICID = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
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
        self::RANKINFOLIST => array(
            'name' => 'rankInfoList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RankInfoUnit'
        ),
        self::TOTALPAGEID => array(
            'name' => 'totalPageID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OPENRANK => array(
            'name' => 'openRank',
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::MODE] = null;
        $this->values[self::RANKTYPE] = self::$fields[self::RANKTYPE]['default'];
        $this->values[self::PAGEID] = null;
        $this->values[self::RANKINFOLIST] = array();
        $this->values[self::TOTALPAGEID] = null;
        $this->values[self::OPENRANK] = array();
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
     * Appends value to 'rankInfoList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RankInfoUnit $value Value to append
     *
     * @return null
     */
    public function appendRankInfoList(\Xnhd\Core\Pb\Sdo\RankInfoUnit $value)
    {
        return $this->append(self::RANKINFOLIST, $value);
    }

    /**
     * Clears 'rankInfoList' list
     *
     * @return null
     */
    public function clearRankInfoList()
    {
        return $this->clear(self::RANKINFOLIST);
    }

    /**
     * Returns 'rankInfoList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RankInfoUnit[]
     */
    public function getRankInfoList()
    {
        return $this->get(self::RANKINFOLIST);
    }

    /**
     * Returns true if 'rankInfoList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRankInfoList()
    {
        return count($this->get(self::RANKINFOLIST)) !== 0;
    }

    /**
     * Returns 'rankInfoList' iterator
     *
     * @return \ArrayIterator
     */
    public function getRankInfoListIterator()
    {
        return new \ArrayIterator($this->get(self::RANKINFOLIST));
    }

    /**
     * Returns element from 'rankInfoList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RankInfoUnit
     */
    public function getRankInfoListAt($offset)
    {
        return $this->get(self::RANKINFOLIST, $offset);
    }

    /**
     * Returns count of 'rankInfoList' list
     *
     * @return int
     */
    public function getRankInfoListCount()
    {
        return $this->count(self::RANKINFOLIST);
    }

    /**
     * Sets value of 'totalPageID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTotalPageID($value)
    {
        return $this->set(self::TOTALPAGEID, $value);
    }

    /**
     * Returns value of 'totalPageID' property
     *
     * @return integer
     */
    public function getTotalPageID()
    {
        $value = $this->get(self::TOTALPAGEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'totalPageID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTotalPageID()
    {
        return $this->get(self::TOTALPAGEID) !== null;
    }

    /**
     * Appends value to 'openRank' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendOpenRank($value)
    {
        return $this->append(self::OPENRANK, $value);
    }

    /**
     * Clears 'openRank' list
     *
     * @return null
     */
    public function clearOpenRank()
    {
        return $this->clear(self::OPENRANK);
    }

    /**
     * Returns 'openRank' list
     *
     * @return integer[]
     */
    public function getOpenRank()
    {
        return $this->get(self::OPENRANK);
    }

    /**
     * Returns true if 'openRank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOpenRank()
    {
        return count($this->get(self::OPENRANK)) !== 0;
    }

    /**
     * Returns 'openRank' iterator
     *
     * @return \ArrayIterator
     */
    public function getOpenRankIterator()
    {
        return new \ArrayIterator($this->get(self::OPENRANK));
    }

    /**
     * Returns element from 'openRank' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getOpenRankAt($offset)
    {
        return $this->get(self::OPENRANK, $offset);
    }

    /**
     * Returns count of 'openRank' list
     *
     * @return int
     */
    public function getOpenRankCount()
    {
        return $this->count(self::OPENRANK);
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