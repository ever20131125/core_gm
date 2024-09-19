<?php
/**
 * Auto generated from relationserver.proto at 2021-10-26 06:02:40
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSGetAnniversaryListResp message
 */
class RLSGetAnniversaryListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRCOUPLEDIARY = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRCOUPLEDIARY => array(
            'name' => 'arrCoupleDiary',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\CoupleDiary'
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
        $this->values[self::ARRCOUPLEDIARY] = array();
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
     * Appends value to 'arrCoupleDiary' list
     *
     * @param \Xnhd\Core\Pb\Sdo\CoupleDiary $value Value to append
     *
     * @return null
     */
    public function appendArrCoupleDiary(\Xnhd\Core\Pb\Sdo\CoupleDiary $value)
    {
        return $this->append(self::ARRCOUPLEDIARY, $value);
    }

    /**
     * Clears 'arrCoupleDiary' list
     *
     * @return null
     */
    public function clearArrCoupleDiary()
    {
        return $this->clear(self::ARRCOUPLEDIARY);
    }

    /**
     * Returns 'arrCoupleDiary' list
     *
     * @return \Xnhd\Core\Pb\Sdo\CoupleDiary[]
     */
    public function getArrCoupleDiary()
    {
        return $this->get(self::ARRCOUPLEDIARY);
    }

    /**
     * Returns true if 'arrCoupleDiary' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrCoupleDiary()
    {
        return count($this->get(self::ARRCOUPLEDIARY)) !== 0;
    }

    /**
     * Returns 'arrCoupleDiary' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrCoupleDiaryIterator()
    {
        return new \ArrayIterator($this->get(self::ARRCOUPLEDIARY));
    }

    /**
     * Returns element from 'arrCoupleDiary' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\CoupleDiary
     */
    public function getArrCoupleDiaryAt($offset)
    {
        return $this->get(self::ARRCOUPLEDIARY, $offset);
    }

    /**
     * Returns count of 'arrCoupleDiary' list
     *
     * @return int
     */
    public function getArrCoupleDiaryCount()
    {
        return $this->count(self::ARRCOUPLEDIARY);
    }
}
}