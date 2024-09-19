<?php
/**
 * Auto generated from gameserver.proto at 2022-06-19 02:07:56
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GASGetActMusicResp message
 */
class GASGetActMusicResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRMUSIC = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRMUSIC => array(
            'name' => 'arrMusic',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ActMusic'
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
        $this->values[self::ARRMUSIC] = array();
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
     * Appends value to 'arrMusic' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ActMusic $value Value to append
     *
     * @return null
     */
    public function appendArrMusic(\Xnhd\Core\Pb\Sdo\ActMusic $value)
    {
        return $this->append(self::ARRMUSIC, $value);
    }

    /**
     * Clears 'arrMusic' list
     *
     * @return null
     */
    public function clearArrMusic()
    {
        return $this->clear(self::ARRMUSIC);
    }

    /**
     * Returns 'arrMusic' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ActMusic[]
     */
    public function getArrMusic()
    {
        return $this->get(self::ARRMUSIC);
    }

    /**
     * Returns true if 'arrMusic' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrMusic()
    {
        return count($this->get(self::ARRMUSIC)) !== 0;
    }

    /**
     * Returns 'arrMusic' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrMusicIterator()
    {
        return new \ArrayIterator($this->get(self::ARRMUSIC));
    }

    /**
     * Returns element from 'arrMusic' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ActMusic
     */
    public function getArrMusicAt($offset)
    {
        return $this->get(self::ARRMUSIC, $offset);
    }

    /**
     * Returns count of 'arrMusic' list
     *
     * @return int
     */
    public function getArrMusicCount()
    {
        return $this->count(self::ARRMUSIC);
    }
}
}