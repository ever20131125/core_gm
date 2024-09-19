<?php
/**
 * Auto generated from roledbserver.proto at 2021-12-17 09:50:47
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RDBUpdateMusicListNoti message
 */
class RDBUpdateMusicListNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const MUSICINFOLIST = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
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
        $this->values[self::NROLEID] = null;
        $this->values[self::MUSICINFOLIST] = array();
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
}
}