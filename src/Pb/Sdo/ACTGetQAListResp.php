<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTGetQAListResp message
 */
class ACTGetQAListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEID = 2;
    const ARRQALIST = 3;
    const ARRANSWER = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRQALIST => array(
            'name' => 'arrQAList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\QAQuest'
        ),
        self::ARRANSWER => array(
            'name' => 'arrAnswer',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\QAAnswer'
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
        $this->values[self::ROLEID] = null;
        $this->values[self::ARRQALIST] = array();
        $this->values[self::ARRANSWER] = array();
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
     * Appends value to 'arrQAList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\QAQuest $value Value to append
     *
     * @return null
     */
    public function appendArrQAList(\Xnhd\Core\Pb\Sdo\QAQuest $value)
    {
        return $this->append(self::ARRQALIST, $value);
    }

    /**
     * Clears 'arrQAList' list
     *
     * @return null
     */
    public function clearArrQAList()
    {
        return $this->clear(self::ARRQALIST);
    }

    /**
     * Returns 'arrQAList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\QAQuest[]
     */
    public function getArrQAList()
    {
        return $this->get(self::ARRQALIST);
    }

    /**
     * Returns true if 'arrQAList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrQAList()
    {
        return count($this->get(self::ARRQALIST)) !== 0;
    }

    /**
     * Returns 'arrQAList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrQAListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRQALIST));
    }

    /**
     * Returns element from 'arrQAList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\QAQuest
     */
    public function getArrQAListAt($offset)
    {
        return $this->get(self::ARRQALIST, $offset);
    }

    /**
     * Returns count of 'arrQAList' list
     *
     * @return int
     */
    public function getArrQAListCount()
    {
        return $this->count(self::ARRQALIST);
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
}
}