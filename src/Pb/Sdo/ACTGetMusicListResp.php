<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTGetMusicListResp message
 */
class ACTGetMusicListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEID = 2;
    const ACTID = 3;
    const ARRMUSICID = 4;
    const ARRBESTSCORE = 5;
    const ARRMUSICRANK = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ACTID => array(
            'name' => 'actID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRMUSICID => array(
            'name' => 'arrMusicID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRBESTSCORE => array(
            'name' => 'arrBestScore',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRMUSICRANK => array(
            'name' => 'arrMusicRank',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::ACTID] = null;
        $this->values[self::ARRMUSICID] = array();
        $this->values[self::ARRBESTSCORE] = array();
        $this->values[self::ARRMUSICRANK] = array();
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
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Sets value of 'actID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setActID($value)
    {
        return $this->set(self::ACTID, $value);
    }

    /**
     * Returns value of 'actID' property
     *
     * @return integer
     */
    public function getActID()
    {
        $value = $this->get(self::ACTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'actID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasActID()
    {
        return $this->get(self::ACTID) !== null;
    }

    /**
     * Appends value to 'arrMusicID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrMusicID($value)
    {
        return $this->append(self::ARRMUSICID, $value);
    }

    /**
     * Clears 'arrMusicID' list
     *
     * @return null
     */
    public function clearArrMusicID()
    {
        return $this->clear(self::ARRMUSICID);
    }

    /**
     * Returns 'arrMusicID' list
     *
     * @return integer[]
     */
    public function getArrMusicID()
    {
        return $this->get(self::ARRMUSICID);
    }

    /**
     * Returns true if 'arrMusicID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrMusicID()
    {
        return count($this->get(self::ARRMUSICID)) !== 0;
    }

    /**
     * Returns 'arrMusicID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrMusicIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRMUSICID));
    }

    /**
     * Returns element from 'arrMusicID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrMusicIDAt($offset)
    {
        return $this->get(self::ARRMUSICID, $offset);
    }

    /**
     * Returns count of 'arrMusicID' list
     *
     * @return int
     */
    public function getArrMusicIDCount()
    {
        return $this->count(self::ARRMUSICID);
    }

    /**
     * Appends value to 'arrBestScore' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrBestScore($value)
    {
        return $this->append(self::ARRBESTSCORE, $value);
    }

    /**
     * Clears 'arrBestScore' list
     *
     * @return null
     */
    public function clearArrBestScore()
    {
        return $this->clear(self::ARRBESTSCORE);
    }

    /**
     * Returns 'arrBestScore' list
     *
     * @return integer[]
     */
    public function getArrBestScore()
    {
        return $this->get(self::ARRBESTSCORE);
    }

    /**
     * Returns true if 'arrBestScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrBestScore()
    {
        return count($this->get(self::ARRBESTSCORE)) !== 0;
    }

    /**
     * Returns 'arrBestScore' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrBestScoreIterator()
    {
        return new \ArrayIterator($this->get(self::ARRBESTSCORE));
    }

    /**
     * Returns element from 'arrBestScore' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrBestScoreAt($offset)
    {
        return $this->get(self::ARRBESTSCORE, $offset);
    }

    /**
     * Returns count of 'arrBestScore' list
     *
     * @return int
     */
    public function getArrBestScoreCount()
    {
        return $this->count(self::ARRBESTSCORE);
    }

    /**
     * Appends value to 'arrMusicRank' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrMusicRank($value)
    {
        return $this->append(self::ARRMUSICRANK, $value);
    }

    /**
     * Clears 'arrMusicRank' list
     *
     * @return null
     */
    public function clearArrMusicRank()
    {
        return $this->clear(self::ARRMUSICRANK);
    }

    /**
     * Returns 'arrMusicRank' list
     *
     * @return integer[]
     */
    public function getArrMusicRank()
    {
        return $this->get(self::ARRMUSICRANK);
    }

    /**
     * Returns true if 'arrMusicRank' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrMusicRank()
    {
        return count($this->get(self::ARRMUSICRANK)) !== 0;
    }

    /**
     * Returns 'arrMusicRank' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrMusicRankIterator()
    {
        return new \ArrayIterator($this->get(self::ARRMUSICRANK));
    }

    /**
     * Returns element from 'arrMusicRank' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrMusicRankAt($offset)
    {
        return $this->get(self::ARRMUSICRANK, $offset);
    }

    /**
     * Returns count of 'arrMusicRank' list
     *
     * @return int
     */
    public function getArrMusicRankCount()
    {
        return $this->count(self::ARRMUSICRANK);
    }
}
}