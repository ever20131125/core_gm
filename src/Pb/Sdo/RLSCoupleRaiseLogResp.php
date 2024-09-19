<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSCoupleRaiseLogResp message
 */
class RLSCoupleRaiseLogResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NRAISEID = 2;
    const NROLEID = 3;
    const NTYPE = 4;
    const STRPARAM1 = 5;
    const STRPARAM2 = 6;
    const NTIME = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NRAISEID => array(
            'name' => 'nRaiseID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTYPE => array(
            'name' => 'nType',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STRPARAM1 => array(
            'name' => 'strParam1',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STRPARAM2 => array(
            'name' => 'strParam2',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NTIME => array(
            'name' => 'nTime',
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
        $this->values[self::NRAISEID] = null;
        $this->values[self::NROLEID] = array();
        $this->values[self::NTYPE] = array();
        $this->values[self::STRPARAM1] = array();
        $this->values[self::STRPARAM2] = array();
        $this->values[self::NTIME] = array();
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
     * Sets value of 'nRaiseID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRaiseID($value)
    {
        return $this->set(self::NRAISEID, $value);
    }

    /**
     * Returns value of 'nRaiseID' property
     *
     * @return integer
     */
    public function getNRaiseID()
    {
        $value = $this->get(self::NRAISEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRaiseID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRaiseID()
    {
        return $this->get(self::NRAISEID) !== null;
    }

    /**
     * Appends value to 'nRoleID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendNRoleID($value)
    {
        return $this->append(self::NROLEID, $value);
    }

    /**
     * Clears 'nRoleID' list
     *
     * @return null
     */
    public function clearNRoleID()
    {
        return $this->clear(self::NROLEID);
    }

    /**
     * Returns 'nRoleID' list
     *
     * @return integer[]
     */
    public function getNRoleID()
    {
        return $this->get(self::NROLEID);
    }

    /**
     * Returns true if 'nRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID()
    {
        return count($this->get(self::NROLEID)) !== 0;
    }

    /**
     * Returns 'nRoleID' iterator
     *
     * @return \ArrayIterator
     */
    public function getNRoleIDIterator()
    {
        return new \ArrayIterator($this->get(self::NROLEID));
    }

    /**
     * Returns element from 'nRoleID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getNRoleIDAt($offset)
    {
        return $this->get(self::NROLEID, $offset);
    }

    /**
     * Returns count of 'nRoleID' list
     *
     * @return int
     */
    public function getNRoleIDCount()
    {
        return $this->count(self::NROLEID);
    }

    /**
     * Appends value to 'nType' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendNType($value)
    {
        return $this->append(self::NTYPE, $value);
    }

    /**
     * Clears 'nType' list
     *
     * @return null
     */
    public function clearNType()
    {
        return $this->clear(self::NTYPE);
    }

    /**
     * Returns 'nType' list
     *
     * @return integer[]
     */
    public function getNType()
    {
        return $this->get(self::NTYPE);
    }

    /**
     * Returns true if 'nType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNType()
    {
        return count($this->get(self::NTYPE)) !== 0;
    }

    /**
     * Returns 'nType' iterator
     *
     * @return \ArrayIterator
     */
    public function getNTypeIterator()
    {
        return new \ArrayIterator($this->get(self::NTYPE));
    }

    /**
     * Returns element from 'nType' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getNTypeAt($offset)
    {
        return $this->get(self::NTYPE, $offset);
    }

    /**
     * Returns count of 'nType' list
     *
     * @return int
     */
    public function getNTypeCount()
    {
        return $this->count(self::NTYPE);
    }

    /**
     * Appends value to 'strParam1' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendStrParam1($value)
    {
        return $this->append(self::STRPARAM1, $value);
    }

    /**
     * Clears 'strParam1' list
     *
     * @return null
     */
    public function clearStrParam1()
    {
        return $this->clear(self::STRPARAM1);
    }

    /**
     * Returns 'strParam1' list
     *
     * @return string[]
     */
    public function getStrParam1()
    {
        return $this->get(self::STRPARAM1);
    }

    /**
     * Returns true if 'strParam1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStrParam1()
    {
        return count($this->get(self::STRPARAM1)) !== 0;
    }

    /**
     * Returns 'strParam1' iterator
     *
     * @return \ArrayIterator
     */
    public function getStrParam1Iterator()
    {
        return new \ArrayIterator($this->get(self::STRPARAM1));
    }

    /**
     * Returns element from 'strParam1' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getStrParam1At($offset)
    {
        return $this->get(self::STRPARAM1, $offset);
    }

    /**
     * Returns count of 'strParam1' list
     *
     * @return int
     */
    public function getStrParam1Count()
    {
        return $this->count(self::STRPARAM1);
    }

    /**
     * Appends value to 'strParam2' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendStrParam2($value)
    {
        return $this->append(self::STRPARAM2, $value);
    }

    /**
     * Clears 'strParam2' list
     *
     * @return null
     */
    public function clearStrParam2()
    {
        return $this->clear(self::STRPARAM2);
    }

    /**
     * Returns 'strParam2' list
     *
     * @return string[]
     */
    public function getStrParam2()
    {
        return $this->get(self::STRPARAM2);
    }

    /**
     * Returns true if 'strParam2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStrParam2()
    {
        return count($this->get(self::STRPARAM2)) !== 0;
    }

    /**
     * Returns 'strParam2' iterator
     *
     * @return \ArrayIterator
     */
    public function getStrParam2Iterator()
    {
        return new \ArrayIterator($this->get(self::STRPARAM2));
    }

    /**
     * Returns element from 'strParam2' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getStrParam2At($offset)
    {
        return $this->get(self::STRPARAM2, $offset);
    }

    /**
     * Returns count of 'strParam2' list
     *
     * @return int
     */
    public function getStrParam2Count()
    {
        return $this->count(self::STRPARAM2);
    }

    /**
     * Appends value to 'nTime' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendNTime($value)
    {
        return $this->append(self::NTIME, $value);
    }

    /**
     * Clears 'nTime' list
     *
     * @return null
     */
    public function clearNTime()
    {
        return $this->clear(self::NTIME);
    }

    /**
     * Returns 'nTime' list
     *
     * @return integer[]
     */
    public function getNTime()
    {
        return $this->get(self::NTIME);
    }

    /**
     * Returns true if 'nTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTime()
    {
        return count($this->get(self::NTIME)) !== 0;
    }

    /**
     * Returns 'nTime' iterator
     *
     * @return \ArrayIterator
     */
    public function getNTimeIterator()
    {
        return new \ArrayIterator($this->get(self::NTIME));
    }

    /**
     * Returns element from 'nTime' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getNTimeAt($offset)
    {
        return $this->get(self::NTIME, $offset);
    }

    /**
     * Returns count of 'nTime' list
     *
     * @return int
     */
    public function getNTimeCount()
    {
        return $this->count(self::NTIME);
    }
}
}