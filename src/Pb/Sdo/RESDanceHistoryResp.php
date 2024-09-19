<?php
/**
 * Auto generated from recordserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RESDanceHistoryResp message
 */
class RESDanceHistoryResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRMATCHRECORD = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRMATCHRECORD => array(
            'name' => 'arrMatchRecord',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\MatchRecord'
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
        $this->values[self::ARRMATCHRECORD] = array();
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
     * Appends value to 'arrMatchRecord' list
     *
     * @param \Xnhd\Core\Pb\Sdo\MatchRecord $value Value to append
     *
     * @return null
     */
    public function appendArrMatchRecord(\Xnhd\Core\Pb\Sdo\MatchRecord $value)
    {
        return $this->append(self::ARRMATCHRECORD, $value);
    }

    /**
     * Clears 'arrMatchRecord' list
     *
     * @return null
     */
    public function clearArrMatchRecord()
    {
        return $this->clear(self::ARRMATCHRECORD);
    }

    /**
     * Returns 'arrMatchRecord' list
     *
     * @return \Xnhd\Core\Pb\Sdo\MatchRecord[]
     */
    public function getArrMatchRecord()
    {
        return $this->get(self::ARRMATCHRECORD);
    }

    /**
     * Returns true if 'arrMatchRecord' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrMatchRecord()
    {
        return count($this->get(self::ARRMATCHRECORD)) !== 0;
    }

    /**
     * Returns 'arrMatchRecord' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrMatchRecordIterator()
    {
        return new \ArrayIterator($this->get(self::ARRMATCHRECORD));
    }

    /**
     * Returns element from 'arrMatchRecord' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\MatchRecord
     */
    public function getArrMatchRecordAt($offset)
    {
        return $this->get(self::ARRMATCHRECORD, $offset);
    }

    /**
     * Returns count of 'arrMatchRecord' list
     *
     * @return int
     */
    public function getArrMatchRecordCount()
    {
        return $this->count(self::ARRMATCHRECORD);
    }
}
}