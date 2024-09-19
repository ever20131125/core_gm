<?php
/**
 * Auto generated from recordserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RESQualifyStatisticResp message
 */
class RESQualifyStatisticResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const ARRSTATISTIC = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRSTATISTIC => array(
            'name' => 'arrStatistic',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\QualifyStatistic'
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
        $this->values[self::NROLEID] = null;
        $this->values[self::ARRSTATISTIC] = array();
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
     * Appends value to 'arrStatistic' list
     *
     * @param \Xnhd\Core\Pb\Sdo\QualifyStatistic $value Value to append
     *
     * @return null
     */
    public function appendArrStatistic(\Xnhd\Core\Pb\Sdo\QualifyStatistic $value)
    {
        return $this->append(self::ARRSTATISTIC, $value);
    }

    /**
     * Clears 'arrStatistic' list
     *
     * @return null
     */
    public function clearArrStatistic()
    {
        return $this->clear(self::ARRSTATISTIC);
    }

    /**
     * Returns 'arrStatistic' list
     *
     * @return \Xnhd\Core\Pb\Sdo\QualifyStatistic[]
     */
    public function getArrStatistic()
    {
        return $this->get(self::ARRSTATISTIC);
    }

    /**
     * Returns true if 'arrStatistic' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrStatistic()
    {
        return count($this->get(self::ARRSTATISTIC)) !== 0;
    }

    /**
     * Returns 'arrStatistic' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrStatisticIterator()
    {
        return new \ArrayIterator($this->get(self::ARRSTATISTIC));
    }

    /**
     * Returns element from 'arrStatistic' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\QualifyStatistic
     */
    public function getArrStatisticAt($offset)
    {
        return $this->get(self::ARRSTATISTIC, $offset);
    }

    /**
     * Returns count of 'arrStatistic' list
     *
     * @return int
     */
    public function getArrStatisticCount()
    {
        return $this->count(self::ARRSTATISTIC);
    }
}
}