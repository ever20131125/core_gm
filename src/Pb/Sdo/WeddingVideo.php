<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * WeddingVideo message
 */
class WeddingVideo extends \ProtobufMessage
{
    /* Field index constants */
    const NTIME = 1;
    const NSTAGE = 2;
    const ARRPLAYER = 3;
    const ARRWEDDINGITEM = 4;
    const ARRCHATID = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NTIME => array(
            'name' => 'nTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTAGE => array(
            'name' => 'nStage',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRPLAYER => array(
            'name' => 'arrPlayer',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\PlayerVideo'
        ),
        self::ARRWEDDINGITEM => array(
            'name' => 'arrWeddingItem',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRCHATID => array(
            'name' => 'arrChatID',
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
        $this->values[self::NTIME] = null;
        $this->values[self::NSTAGE] = null;
        $this->values[self::ARRPLAYER] = array();
        $this->values[self::ARRWEDDINGITEM] = array();
        $this->values[self::ARRCHATID] = array();
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
     * Sets value of 'nTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTime($value)
    {
        return $this->set(self::NTIME, $value);
    }

    /**
     * Returns value of 'nTime' property
     *
     * @return integer
     */
    public function getNTime()
    {
        $value = $this->get(self::NTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTime()
    {
        return $this->get(self::NTIME) !== null;
    }

    /**
     * Sets value of 'nStage' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStage($value)
    {
        return $this->set(self::NSTAGE, $value);
    }

    /**
     * Returns value of 'nStage' property
     *
     * @return integer
     */
    public function getNStage()
    {
        $value = $this->get(self::NSTAGE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStage' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStage()
    {
        return $this->get(self::NSTAGE) !== null;
    }

    /**
     * Appends value to 'arrPlayer' list
     *
     * @param \Xnhd\Core\Pb\Sdo\PlayerVideo $value Value to append
     *
     * @return null
     */
    public function appendArrPlayer(\Xnhd\Core\Pb\Sdo\PlayerVideo $value)
    {
        return $this->append(self::ARRPLAYER, $value);
    }

    /**
     * Clears 'arrPlayer' list
     *
     * @return null
     */
    public function clearArrPlayer()
    {
        return $this->clear(self::ARRPLAYER);
    }

    /**
     * Returns 'arrPlayer' list
     *
     * @return \Xnhd\Core\Pb\Sdo\PlayerVideo[]
     */
    public function getArrPlayer()
    {
        return $this->get(self::ARRPLAYER);
    }

    /**
     * Returns true if 'arrPlayer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPlayer()
    {
        return count($this->get(self::ARRPLAYER)) !== 0;
    }

    /**
     * Returns 'arrPlayer' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPlayerIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPLAYER));
    }

    /**
     * Returns element from 'arrPlayer' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\PlayerVideo
     */
    public function getArrPlayerAt($offset)
    {
        return $this->get(self::ARRPLAYER, $offset);
    }

    /**
     * Returns count of 'arrPlayer' list
     *
     * @return int
     */
    public function getArrPlayerCount()
    {
        return $this->count(self::ARRPLAYER);
    }

    /**
     * Appends value to 'arrWeddingItem' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrWeddingItem($value)
    {
        return $this->append(self::ARRWEDDINGITEM, $value);
    }

    /**
     * Clears 'arrWeddingItem' list
     *
     * @return null
     */
    public function clearArrWeddingItem()
    {
        return $this->clear(self::ARRWEDDINGITEM);
    }

    /**
     * Returns 'arrWeddingItem' list
     *
     * @return integer[]
     */
    public function getArrWeddingItem()
    {
        return $this->get(self::ARRWEDDINGITEM);
    }

    /**
     * Returns true if 'arrWeddingItem' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrWeddingItem()
    {
        return count($this->get(self::ARRWEDDINGITEM)) !== 0;
    }

    /**
     * Returns 'arrWeddingItem' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrWeddingItemIterator()
    {
        return new \ArrayIterator($this->get(self::ARRWEDDINGITEM));
    }

    /**
     * Returns element from 'arrWeddingItem' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrWeddingItemAt($offset)
    {
        return $this->get(self::ARRWEDDINGITEM, $offset);
    }

    /**
     * Returns count of 'arrWeddingItem' list
     *
     * @return int
     */
    public function getArrWeddingItemCount()
    {
        return $this->count(self::ARRWEDDINGITEM);
    }

    /**
     * Appends value to 'arrChatID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrChatID($value)
    {
        return $this->append(self::ARRCHATID, $value);
    }

    /**
     * Clears 'arrChatID' list
     *
     * @return null
     */
    public function clearArrChatID()
    {
        return $this->clear(self::ARRCHATID);
    }

    /**
     * Returns 'arrChatID' list
     *
     * @return integer[]
     */
    public function getArrChatID()
    {
        return $this->get(self::ARRCHATID);
    }

    /**
     * Returns true if 'arrChatID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrChatID()
    {
        return count($this->get(self::ARRCHATID)) !== 0;
    }

    /**
     * Returns 'arrChatID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrChatIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRCHATID));
    }

    /**
     * Returns element from 'arrChatID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrChatIDAt($offset)
    {
        return $this->get(self::ARRCHATID, $offset);
    }

    /**
     * Returns count of 'arrChatID' list
     *
     * @return int
     */
    public function getArrChatIDCount()
    {
        return $this->count(self::ARRCHATID);
    }
}
}