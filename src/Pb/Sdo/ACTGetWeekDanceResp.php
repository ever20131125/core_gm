<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTGetWeekDanceResp message
 */
class ACTGetWeekDanceResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEID = 2;
    const ARRACTMUSIC = 3;
    const NPRIZECNT1 = 4;
    const NPRIZECNT2 = 5;

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
        self::ARRACTMUSIC => array(
            'name' => 'arrActMusic',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ActMusic'
        ),
        self::NPRIZECNT1 => array(
            'name' => 'nPrizeCnt1',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPRIZECNT2 => array(
            'name' => 'nPrizeCnt2',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::ARRACTMUSIC] = array();
        $this->values[self::NPRIZECNT1] = null;
        $this->values[self::NPRIZECNT2] = null;
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
     * Appends value to 'arrActMusic' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ActMusic $value Value to append
     *
     * @return null
     */
    public function appendArrActMusic(\Xnhd\Core\Pb\Sdo\ActMusic $value)
    {
        return $this->append(self::ARRACTMUSIC, $value);
    }

    /**
     * Clears 'arrActMusic' list
     *
     * @return null
     */
    public function clearArrActMusic()
    {
        return $this->clear(self::ARRACTMUSIC);
    }

    /**
     * Returns 'arrActMusic' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ActMusic[]
     */
    public function getArrActMusic()
    {
        return $this->get(self::ARRACTMUSIC);
    }

    /**
     * Returns true if 'arrActMusic' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrActMusic()
    {
        return count($this->get(self::ARRACTMUSIC)) !== 0;
    }

    /**
     * Returns 'arrActMusic' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrActMusicIterator()
    {
        return new \ArrayIterator($this->get(self::ARRACTMUSIC));
    }

    /**
     * Returns element from 'arrActMusic' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ActMusic
     */
    public function getArrActMusicAt($offset)
    {
        return $this->get(self::ARRACTMUSIC, $offset);
    }

    /**
     * Returns count of 'arrActMusic' list
     *
     * @return int
     */
    public function getArrActMusicCount()
    {
        return $this->count(self::ARRACTMUSIC);
    }

    /**
     * Sets value of 'nPrizeCnt1' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPrizeCnt1($value)
    {
        return $this->set(self::NPRIZECNT1, $value);
    }

    /**
     * Returns value of 'nPrizeCnt1' property
     *
     * @return integer
     */
    public function getNPrizeCnt1()
    {
        $value = $this->get(self::NPRIZECNT1);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPrizeCnt1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPrizeCnt1()
    {
        return $this->get(self::NPRIZECNT1) !== null;
    }

    /**
     * Sets value of 'nPrizeCnt2' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPrizeCnt2($value)
    {
        return $this->set(self::NPRIZECNT2, $value);
    }

    /**
     * Returns value of 'nPrizeCnt2' property
     *
     * @return integer
     */
    public function getNPrizeCnt2()
    {
        $value = $this->get(self::NPRIZECNT2);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPrizeCnt2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPrizeCnt2()
    {
        return $this->get(self::NPRIZECNT2) !== null;
    }
}
}