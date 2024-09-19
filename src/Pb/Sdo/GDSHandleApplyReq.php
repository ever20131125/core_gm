<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSHandleApplyReq message
 */
class GDSHandleApplyReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const ANSWERTYPE = 2;
    const DEALLIST = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ANSWERTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\Answer::enmAnswer_Unknow,
            'name' => 'answerType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DEALLIST => array(
            'name' => 'dealList',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::ANSWERTYPE] = self::$fields[self::ANSWERTYPE]['default'];
        $this->values[self::DEALLIST] = array();
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
     * Sets value of 'answerType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAnswerType($value)
    {
        return $this->set(self::ANSWERTYPE, $value);
    }

    /**
     * Returns value of 'answerType' property
     *
     * @return integer
     */
    public function getAnswerType()
    {
        $value = $this->get(self::ANSWERTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'answerType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAnswerType()
    {
        return $this->get(self::ANSWERTYPE) !== null;
    }

    /**
     * Appends value to 'dealList' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendDealList($value)
    {
        return $this->append(self::DEALLIST, $value);
    }

    /**
     * Clears 'dealList' list
     *
     * @return null
     */
    public function clearDealList()
    {
        return $this->clear(self::DEALLIST);
    }

    /**
     * Returns 'dealList' list
     *
     * @return integer[]
     */
    public function getDealList()
    {
        return $this->get(self::DEALLIST);
    }

    /**
     * Returns true if 'dealList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDealList()
    {
        return count($this->get(self::DEALLIST)) !== 0;
    }

    /**
     * Returns 'dealList' iterator
     *
     * @return \ArrayIterator
     */
    public function getDealListIterator()
    {
        return new \ArrayIterator($this->get(self::DEALLIST));
    }

    /**
     * Returns element from 'dealList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getDealListAt($offset)
    {
        return $this->get(self::DEALLIST, $offset);
    }

    /**
     * Returns count of 'dealList' list
     *
     * @return int
     */
    public function getDealListCount()
    {
        return $this->count(self::DEALLIST);
    }
}
}