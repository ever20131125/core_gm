<?php
/**
 * Auto generated from petserver.proto at 2022-08-17 12:02:08
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PESClearColdTimeResp message
 */
class PESClearColdTimeResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ITEMID = 2;
    const FEEDSTATUS = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ITEMID => array(
            'name' => 'itemId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FEEDSTATUS => array(
            'name' => 'feedStatus',
            'required' => false,
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
        $this->values[self::ITEMID] = null;
        $this->values[self::FEEDSTATUS] = null;
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
     * Sets value of 'itemId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setItemId($value)
    {
        return $this->set(self::ITEMID, $value);
    }

    /**
     * Returns value of 'itemId' property
     *
     * @return integer
     */
    public function getItemId()
    {
        $value = $this->get(self::ITEMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'itemId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasItemId()
    {
        return $this->get(self::ITEMID) !== null;
    }

    /**
     * Sets value of 'feedStatus' property
     *
     * @param \Xnhd\Core\Pb\Sdo\FeedStatus $value Property value
     *
     * @return null
     */
    public function setFeedStatus(\Xnhd\Core\Pb\Sdo\FeedStatus $value=null)
    {
        return $this->set(self::FEEDSTATUS, $value);
    }

    /**
     * Returns value of 'feedStatus' property
     *
     * @return \Xnhd\Core\Pb\Sdo\FeedStatus
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
        return $this->get(self::FEEDSTATUS) !== null;
    }
}
}