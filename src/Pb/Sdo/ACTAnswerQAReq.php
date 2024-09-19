<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTAnswerQAReq message
 */
class ACTAnswerQAReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const ARRANSWER = 2;
    const NSTARTTIME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRANSWER => array(
            'name' => 'arrAnswer',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\QAAnswer'
        ),
        self::NSTARTTIME => array(
            'name' => 'nStartTime',
            'required' => false,
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
        $this->values[self::ROLEID] = null;
        $this->values[self::ARRANSWER] = array();
        $this->values[self::NSTARTTIME] = null;
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
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Appends value to 'arrAnswer' list
     *
     * @param \Xnhd\Core\Pb\Sdo\QAAnswer $value Value to append
     *
     * @return null
     */
    public function appendArrAnswer(\Xnhd\Core\Pb\Sdo\QAAnswer $value)
    {
        return $this->append(self::ARRANSWER, $value);
    }

    /**
     * Clears 'arrAnswer' list
     *
     * @return null
     */
    public function clearArrAnswer()
    {
        return $this->clear(self::ARRANSWER);
    }

    /**
     * Returns 'arrAnswer' list
     *
     * @return \Xnhd\Core\Pb\Sdo\QAAnswer[]
     */
    public function getArrAnswer()
    {
        return $this->get(self::ARRANSWER);
    }

    /**
     * Returns true if 'arrAnswer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrAnswer()
    {
        return count($this->get(self::ARRANSWER)) !== 0;
    }

    /**
     * Returns 'arrAnswer' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrAnswerIterator()
    {
        return new \ArrayIterator($this->get(self::ARRANSWER));
    }

    /**
     * Returns element from 'arrAnswer' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\QAAnswer
     */
    public function getArrAnswerAt($offset)
    {
        return $this->get(self::ARRANSWER, $offset);
    }

    /**
     * Returns count of 'arrAnswer' list
     *
     * @return int
     */
    public function getArrAnswerCount()
    {
        return $this->count(self::ARRANSWER);
    }

    /**
     * Sets value of 'nStartTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStartTime($value)
    {
        return $this->set(self::NSTARTTIME, $value);
    }

    /**
     * Returns value of 'nStartTime' property
     *
     * @return integer
     */
    public function getNStartTime()
    {
        $value = $this->get(self::NSTARTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStartTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStartTime()
    {
        return $this->get(self::NSTARTTIME) !== null;
    }
}
}