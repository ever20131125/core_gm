<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSWooGiftResp message
 */
class RLSWooGiftResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const GIFTCONF = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::GIFTCONF => array(
            'name' => 'giftConf',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\WooedGift'
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
        $this->values[self::GIFTCONF] = array();
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
     * Appends value to 'giftConf' list
     *
     * @param \Xnhd\Core\Pb\Sdo\WooedGift $value Value to append
     *
     * @return null
     */
    public function appendGiftConf(\Xnhd\Core\Pb\Sdo\WooedGift $value)
    {
        return $this->append(self::GIFTCONF, $value);
    }

    /**
     * Clears 'giftConf' list
     *
     * @return null
     */
    public function clearGiftConf()
    {
        return $this->clear(self::GIFTCONF);
    }

    /**
     * Returns 'giftConf' list
     *
     * @return \Xnhd\Core\Pb\Sdo\WooedGift[]
     */
    public function getGiftConf()
    {
        return $this->get(self::GIFTCONF);
    }

    /**
     * Returns true if 'giftConf' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGiftConf()
    {
        return count($this->get(self::GIFTCONF)) !== 0;
    }

    /**
     * Returns 'giftConf' iterator
     *
     * @return \ArrayIterator
     */
    public function getGiftConfIterator()
    {
        return new \ArrayIterator($this->get(self::GIFTCONF));
    }

    /**
     * Returns element from 'giftConf' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\WooedGift
     */
    public function getGiftConfAt($offset)
    {
        return $this->get(self::GIFTCONF, $offset);
    }

    /**
     * Returns count of 'giftConf' list
     *
     * @return int
     */
    public function getGiftConfCount()
    {
        return $this->count(self::GIFTCONF);
    }
}
}