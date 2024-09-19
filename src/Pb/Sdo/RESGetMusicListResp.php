<?php
/**
 * Auto generated from recordserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RESGetMusicListResp message
 */
class RESGetMusicListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const MUSICINFOLIST = 3;
    const CUPINFO = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MUSICINFOLIST => array(
            'name' => 'musicInfoList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\MusicInfo'
        ),
        self::CUPINFO => array(
            'name' => 'cupInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\CupInfo'
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
        $this->values[self::NROLEID] = null;
        $this->values[self::MUSICINFOLIST] = array();
        $this->values[self::CUPINFO] = null;
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
     * Appends value to 'musicInfoList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\MusicInfo $value Value to append
     *
     * @return null
     */
    public function appendMusicInfoList(\Xnhd\Core\Pb\Sdo\MusicInfo $value)
    {
        return $this->append(self::MUSICINFOLIST, $value);
    }

    /**
     * Clears 'musicInfoList' list
     *
     * @return null
     */
    public function clearMusicInfoList()
    {
        return $this->clear(self::MUSICINFOLIST);
    }

    /**
     * Returns 'musicInfoList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\MusicInfo[]
     */
    public function getMusicInfoList()
    {
        return $this->get(self::MUSICINFOLIST);
    }

    /**
     * Returns true if 'musicInfoList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMusicInfoList()
    {
        return count($this->get(self::MUSICINFOLIST)) !== 0;
    }

    /**
     * Returns 'musicInfoList' iterator
     *
     * @return \ArrayIterator
     */
    public function getMusicInfoListIterator()
    {
        return new \ArrayIterator($this->get(self::MUSICINFOLIST));
    }

    /**
     * Returns element from 'musicInfoList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\MusicInfo
     */
    public function getMusicInfoListAt($offset)
    {
        return $this->get(self::MUSICINFOLIST, $offset);
    }

    /**
     * Returns count of 'musicInfoList' list
     *
     * @return int
     */
    public function getMusicInfoListCount()
    {
        return $this->count(self::MUSICINFOLIST);
    }

    /**
     * Sets value of 'cupInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\CupInfo $value Property value
     *
     * @return null
     */
    public function setCupInfo(\Xnhd\Core\Pb\Sdo\CupInfo $value=null)
    {
        return $this->set(self::CUPINFO, $value);
    }

    /**
     * Returns value of 'cupInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\CupInfo
     */
    public function getCupInfo()
    {
        return $this->get(self::CUPINFO);
    }

    /**
     * Returns true if 'cupInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCupInfo()
    {
        return $this->get(self::CUPINFO) !== null;
    }
}
}