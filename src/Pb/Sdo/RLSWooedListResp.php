<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSWooedListResp message
 */
class RLSWooedListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const DETAILS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::DETAILS => array(
            'name' => 'details',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\WooedDetail'
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
        $this->values[self::DETAILS] = array();
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
     * Appends value to 'details' list
     *
     * @param \Xnhd\Core\Pb\Sdo\WooedDetail $value Value to append
     *
     * @return null
     */
    public function appendDetails(\Xnhd\Core\Pb\Sdo\WooedDetail $value)
    {
        return $this->append(self::DETAILS, $value);
    }

    /**
     * Clears 'details' list
     *
     * @return null
     */
    public function clearDetails()
    {
        return $this->clear(self::DETAILS);
    }

    /**
     * Returns 'details' list
     *
     * @return \Xnhd\Core\Pb\Sdo\WooedDetail[]
     */
    public function getDetails()
    {
        return $this->get(self::DETAILS);
    }

    /**
     * Returns true if 'details' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDetails()
    {
        return count($this->get(self::DETAILS)) !== 0;
    }

    /**
     * Returns 'details' iterator
     *
     * @return \ArrayIterator
     */
    public function getDetailsIterator()
    {
        return new \ArrayIterator($this->get(self::DETAILS));
    }

    /**
     * Returns element from 'details' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\WooedDetail
     */
    public function getDetailsAt($offset)
    {
        return $this->get(self::DETAILS, $offset);
    }

    /**
     * Returns count of 'details' list
     *
     * @return int
     */
    public function getDetailsCount()
    {
        return $this->count(self::DETAILS);
    }
}
}