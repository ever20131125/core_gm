<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSGetBeActionListResp message
 */
class RLSGetBeActionListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ROLEID = 2;
    const TYPE = 3;
    const ARRACTORLIST = 4;
    const ARRACTORTIME = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ROLEID => array(
            'name' => 'roleid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\InteractType::enmInteractType_None,
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRACTORLIST => array(
            'name' => 'arrActorList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleGeneralInfo'
        ),
        self::ARRACTORTIME => array(
            'name' => 'arrActorTime',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::TYPE] = self::$fields[self::TYPE]['default'];
        $this->values[self::ARRACTORLIST] = array();
        $this->values[self::ARRACTORTIME] = array();
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
     * Sets value of 'roleid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleid($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleid' property
     *
     * @return integer
     */
    public function getRoleid()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleid()
    {
        return $this->get(self::ROLEID) !== null;
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
     * Appends value to 'arrActorList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleGeneralInfo $value Value to append
     *
     * @return null
     */
    public function appendArrActorList(\Xnhd\Core\Pb\Sdo\RoleGeneralInfo $value)
    {
        return $this->append(self::ARRACTORLIST, $value);
    }

    /**
     * Clears 'arrActorList' list
     *
     * @return null
     */
    public function clearArrActorList()
    {
        return $this->clear(self::ARRACTORLIST);
    }

    /**
     * Returns 'arrActorList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleGeneralInfo[]
     */
    public function getArrActorList()
    {
        return $this->get(self::ARRACTORLIST);
    }

    /**
     * Returns true if 'arrActorList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrActorList()
    {
        return count($this->get(self::ARRACTORLIST)) !== 0;
    }

    /**
     * Returns 'arrActorList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrActorListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRACTORLIST));
    }

    /**
     * Returns element from 'arrActorList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleGeneralInfo
     */
    public function getArrActorListAt($offset)
    {
        return $this->get(self::ARRACTORLIST, $offset);
    }

    /**
     * Returns count of 'arrActorList' list
     *
     * @return int
     */
    public function getArrActorListCount()
    {
        return $this->count(self::ARRACTORLIST);
    }

    /**
     * Appends value to 'arrActorTime' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrActorTime($value)
    {
        return $this->append(self::ARRACTORTIME, $value);
    }

    /**
     * Clears 'arrActorTime' list
     *
     * @return null
     */
    public function clearArrActorTime()
    {
        return $this->clear(self::ARRACTORTIME);
    }

    /**
     * Returns 'arrActorTime' list
     *
     * @return integer[]
     */
    public function getArrActorTime()
    {
        return $this->get(self::ARRACTORTIME);
    }

    /**
     * Returns true if 'arrActorTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrActorTime()
    {
        return count($this->get(self::ARRACTORTIME)) !== 0;
    }

    /**
     * Returns 'arrActorTime' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrActorTimeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRACTORTIME));
    }

    /**
     * Returns element from 'arrActorTime' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrActorTimeAt($offset)
    {
        return $this->get(self::ARRACTORTIME, $offset);
    }

    /**
     * Returns count of 'arrActorTime' list
     *
     * @return int
     */
    public function getArrActorTimeCount()
    {
        return $this->count(self::ARRACTORTIME);
    }
}
}