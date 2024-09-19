<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGetMusicScoreResp message
 */
class PDBGetMusicScoreResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NMUSICID = 2;
    const ARRSCORELIST = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NMUSICID => array(
            'name' => 'nMusicID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRSCORELIST => array(
            'name' => 'arrScoreList',
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
        $this->values[self::NMUSICID] = null;
        $this->values[self::ARRSCORELIST] = array();
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
     * Sets value of 'nMusicID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMusicID($value)
    {
        return $this->set(self::NMUSICID, $value);
    }

    /**
     * Returns value of 'nMusicID' property
     *
     * @return integer
     */
    public function getNMusicID()
    {
        $value = $this->get(self::NMUSICID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMusicID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMusicID()
    {
        return $this->get(self::NMUSICID) !== null;
    }

    /**
     * Appends value to 'arrScoreList' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrScoreList($value)
    {
        return $this->append(self::ARRSCORELIST, $value);
    }

    /**
     * Clears 'arrScoreList' list
     *
     * @return null
     */
    public function clearArrScoreList()
    {
        return $this->clear(self::ARRSCORELIST);
    }

    /**
     * Returns 'arrScoreList' list
     *
     * @return integer[]
     */
    public function getArrScoreList()
    {
        return $this->get(self::ARRSCORELIST);
    }

    /**
     * Returns true if 'arrScoreList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrScoreList()
    {
        return count($this->get(self::ARRSCORELIST)) !== 0;
    }

    /**
     * Returns 'arrScoreList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrScoreListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRSCORELIST));
    }

    /**
     * Returns element from 'arrScoreList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrScoreListAt($offset)
    {
        return $this->get(self::ARRSCORELIST, $offset);
    }

    /**
     * Returns count of 'arrScoreList' list
     *
     * @return int
     */
    public function getArrScoreListCount()
    {
        return $this->count(self::ARRSCORELIST);
    }
}
}