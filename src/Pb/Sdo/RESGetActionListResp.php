<?php
/**
 * Auto generated from recordserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RESGetActionListResp message
 */
class RESGetActionListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const NTHEMEID = 3;
    const TYPE = 4;
    const NTOTALCOUNT = 5;
    const ARRTARGETLIST = 6;
    const ARRACTIONTIME = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTHEMEID => array(
            'name' => 'nThemeID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\InteractType::enmInteractType_None,
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTOTALCOUNT => array(
            'name' => 'nTotalCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRTARGETLIST => array(
            'name' => 'arrTargetList',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRACTIONTIME => array(
            'name' => 'arrActionTime',
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::NROLEID] = null;
        $this->values[self::NTHEMEID] = null;
        $this->values[self::TYPE] = self::$fields[self::TYPE]['default'];
        $this->values[self::NTOTALCOUNT] = null;
        $this->values[self::ARRTARGETLIST] = array();
        $this->values[self::ARRACTIONTIME] = array();
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
     * Sets value of 'nThemeID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNThemeID($value)
    {
        return $this->set(self::NTHEMEID, $value);
    }

    /**
     * Returns value of 'nThemeID' property
     *
     * @return integer
     */
    public function getNThemeID()
    {
        $value = $this->get(self::NTHEMEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nThemeID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNThemeID()
    {
        return $this->get(self::NTHEMEID) !== null;
    }

    /**
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return $this->get(self::TYPE) !== null;
    }

    /**
     * Sets value of 'nTotalCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTotalCount($value)
    {
        return $this->set(self::NTOTALCOUNT, $value);
    }

    /**
     * Returns value of 'nTotalCount' property
     *
     * @return integer
     */
    public function getNTotalCount()
    {
        $value = $this->get(self::NTOTALCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTotalCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTotalCount()
    {
        return $this->get(self::NTOTALCOUNT) !== null;
    }

    /**
     * Appends value to 'arrTargetList' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrTargetList($value)
    {
        return $this->append(self::ARRTARGETLIST, $value);
    }

    /**
     * Clears 'arrTargetList' list
     *
     * @return null
     */
    public function clearArrTargetList()
    {
        return $this->clear(self::ARRTARGETLIST);
    }

    /**
     * Returns 'arrTargetList' list
     *
     * @return integer[]
     */
    public function getArrTargetList()
    {
        return $this->get(self::ARRTARGETLIST);
    }

    /**
     * Returns true if 'arrTargetList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrTargetList()
    {
        return count($this->get(self::ARRTARGETLIST)) !== 0;
    }

    /**
     * Returns 'arrTargetList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrTargetListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRTARGETLIST));
    }

    /**
     * Returns element from 'arrTargetList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrTargetListAt($offset)
    {
        return $this->get(self::ARRTARGETLIST, $offset);
    }

    /**
     * Returns count of 'arrTargetList' list
     *
     * @return int
     */
    public function getArrTargetListCount()
    {
        return $this->count(self::ARRTARGETLIST);
    }

    /**
     * Appends value to 'arrActionTime' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrActionTime($value)
    {
        return $this->append(self::ARRACTIONTIME, $value);
    }

    /**
     * Clears 'arrActionTime' list
     *
     * @return null
     */
    public function clearArrActionTime()
    {
        return $this->clear(self::ARRACTIONTIME);
    }

    /**
     * Returns 'arrActionTime' list
     *
     * @return integer[]
     */
    public function getArrActionTime()
    {
        return $this->get(self::ARRACTIONTIME);
    }

    /**
     * Returns true if 'arrActionTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrActionTime()
    {
        return count($this->get(self::ARRACTIONTIME)) !== 0;
    }

    /**
     * Returns 'arrActionTime' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrActionTimeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRACTIONTIME));
    }

    /**
     * Returns element from 'arrActionTime' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrActionTimeAt($offset)
    {
        return $this->get(self::ARRACTIONTIME, $offset);
    }

    /**
     * Returns count of 'arrActionTime' list
     *
     * @return int
     */
    public function getArrActionTimeCount()
    {
        return $this->count(self::ARRACTIONTIME);
    }
}
}