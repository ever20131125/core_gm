<?php
/**
 * Auto generated from controlserver.proto at 2022-08-17 12:02:05
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * COSSetMusicDownLoadReq message
 */
class COSSetMusicDownLoadReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const ARRMP3ID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRMP3ID => array(
            'name' => 'arrMp3ID',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::ARRMP3ID] = array();
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
     * Appends value to 'arrMp3ID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrMp3ID($value)
    {
        return $this->append(self::ARRMP3ID, $value);
    }

    /**
     * Clears 'arrMp3ID' list
     *
     * @return null
     */
    public function clearArrMp3ID()
    {
        return $this->clear(self::ARRMP3ID);
    }

    /**
     * Returns 'arrMp3ID' list
     *
     * @return integer[]
     */
    public function getArrMp3ID()
    {
        return $this->get(self::ARRMP3ID);
    }

    /**
     * Returns true if 'arrMp3ID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrMp3ID()
    {
        return count($this->get(self::ARRMP3ID)) !== 0;
    }

    /**
     * Returns 'arrMp3ID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrMp3IDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRMP3ID));
    }

    /**
     * Returns element from 'arrMp3ID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrMp3IDAt($offset)
    {
        return $this->get(self::ARRMP3ID, $offset);
    }

    /**
     * Returns count of 'arrMp3ID' list
     *
     * @return int
     */
    public function getArrMp3IDCount()
    {
        return $this->count(self::ARRMP3ID);
    }
}
}