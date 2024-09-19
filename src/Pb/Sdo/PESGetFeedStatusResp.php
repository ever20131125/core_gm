<?php
/**
 * Auto generated from petserver.proto at 2022-08-17 12:02:08
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PESGetFeedStatusResp message
 */
class PESGetFeedStatusResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const FEEDSTATUS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::FEEDSTATUS => array(
            'name' => 'feedStatus',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\FeedStatus'
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
        $this->values[self::FEEDSTATUS] = array();
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
     * Appends value to 'feedStatus' list
     *
     * @param \Xnhd\Core\Pb\Sdo\FeedStatus $value Value to append
     *
     * @return null
     */
    public function appendFeedStatus(\Xnhd\Core\Pb\Sdo\FeedStatus $value)
    {
        return $this->append(self::FEEDSTATUS, $value);
    }

    /**
     * Clears 'feedStatus' list
     *
     * @return null
     */
    public function clearFeedStatus()
    {
        return $this->clear(self::FEEDSTATUS);
    }

    /**
     * Returns 'feedStatus' list
     *
     * @return \Xnhd\Core\Pb\Sdo\FeedStatus[]
     */
    public function getFeedStatus()
    {
        return $this->get(self::FEEDSTATUS);
    }

    /**
     * Returns true if 'feedStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFeedStatus()
    {
        return count($this->get(self::FEEDSTATUS)) !== 0;
    }

    /**
     * Returns 'feedStatus' iterator
     *
     * @return \ArrayIterator
     */
    public function getFeedStatusIterator()
    {
        return new \ArrayIterator($this->get(self::FEEDSTATUS));
    }

    /**
     * Returns element from 'feedStatus' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\FeedStatus
     */
    public function getFeedStatusAt($offset)
    {
        return $this->get(self::FEEDSTATUS, $offset);
    }

    /**
     * Returns count of 'feedStatus' list
     *
     * @return int
     */
    public function getFeedStatusCount()
    {
        return $this->count(self::FEEDSTATUS);
    }
}
}