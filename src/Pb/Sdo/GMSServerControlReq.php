<?php
/**
 * Auto generated from gmserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GMSServerControlReq message
 */
class GMSServerControlReq extends \ProtobufMessage
{
    /* Field index constants */
    const NSIGNAL = 1;
    const ENTITYTYPE = 2;
    const DESTID = 3;
    const DBCONFIG = 4;
    const FILECONFIG = 5;
    const NSN = 6;
    const ACCOUNT = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NSIGNAL => array(
            'name' => 'nSignal',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ENTITYTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\EntityType::enmEntityType_None,
            'name' => 'entityType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DESTID => array(
            'name' => 'destID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DBCONFIG => array(
            'name' => 'dbConfig',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FILECONFIG => array(
            'name' => 'fileConfig',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NSN => array(
            'name' => 'nSN',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ACCOUNT => array(
            'name' => 'account',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::NSIGNAL] = null;
        $this->values[self::ENTITYTYPE] = self::$fields[self::ENTITYTYPE]['default'];
        $this->values[self::DESTID] = null;
        $this->values[self::DBCONFIG] = array();
        $this->values[self::FILECONFIG] = array();
        $this->values[self::NSN] = null;
        $this->values[self::ACCOUNT] = null;
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
     * Sets value of 'nSignal' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSignal($value)
    {
        return $this->set(self::NSIGNAL, $value);
    }

    /**
     * Returns value of 'nSignal' property
     *
     * @return integer
     */
    public function getNSignal()
    {
        $value = $this->get(self::NSIGNAL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSignal' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSignal()
    {
        return $this->get(self::NSIGNAL) !== null;
    }

    /**
     * Sets value of 'entityType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEntityType($value)
    {
        return $this->set(self::ENTITYTYPE, $value);
    }

    /**
     * Returns value of 'entityType' property
     *
     * @return integer
     */
    public function getEntityType()
    {
        $value = $this->get(self::ENTITYTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'entityType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEntityType()
    {
        return $this->get(self::ENTITYTYPE) !== null;
    }

    /**
     * Sets value of 'destID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDestID($value)
    {
        return $this->set(self::DESTID, $value);
    }

    /**
     * Returns value of 'destID' property
     *
     * @return integer
     */
    public function getDestID()
    {
        $value = $this->get(self::DESTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'destID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDestID()
    {
        return $this->get(self::DESTID) !== null;
    }

    /**
     * Appends value to 'dbConfig' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendDbConfig($value)
    {
        return $this->append(self::DBCONFIG, $value);
    }

    /**
     * Clears 'dbConfig' list
     *
     * @return null
     */
    public function clearDbConfig()
    {
        return $this->clear(self::DBCONFIG);
    }

    /**
     * Returns 'dbConfig' list
     *
     * @return string[]
     */
    public function getDbConfig()
    {
        return $this->get(self::DBCONFIG);
    }

    /**
     * Returns true if 'dbConfig' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDbConfig()
    {
        return count($this->get(self::DBCONFIG)) !== 0;
    }

    /**
     * Returns 'dbConfig' iterator
     *
     * @return \ArrayIterator
     */
    public function getDbConfigIterator()
    {
        return new \ArrayIterator($this->get(self::DBCONFIG));
    }

    /**
     * Returns element from 'dbConfig' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getDbConfigAt($offset)
    {
        return $this->get(self::DBCONFIG, $offset);
    }

    /**
     * Returns count of 'dbConfig' list
     *
     * @return int
     */
    public function getDbConfigCount()
    {
        return $this->count(self::DBCONFIG);
    }

    /**
     * Appends value to 'fileConfig' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendFileConfig($value)
    {
        return $this->append(self::FILECONFIG, $value);
    }

    /**
     * Clears 'fileConfig' list
     *
     * @return null
     */
    public function clearFileConfig()
    {
        return $this->clear(self::FILECONFIG);
    }

    /**
     * Returns 'fileConfig' list
     *
     * @return string[]
     */
    public function getFileConfig()
    {
        return $this->get(self::FILECONFIG);
    }

    /**
     * Returns true if 'fileConfig' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFileConfig()
    {
        return count($this->get(self::FILECONFIG)) !== 0;
    }

    /**
     * Returns 'fileConfig' iterator
     *
     * @return \ArrayIterator
     */
    public function getFileConfigIterator()
    {
        return new \ArrayIterator($this->get(self::FILECONFIG));
    }

    /**
     * Returns element from 'fileConfig' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getFileConfigAt($offset)
    {
        return $this->get(self::FILECONFIG, $offset);
    }

    /**
     * Returns count of 'fileConfig' list
     *
     * @return int
     */
    public function getFileConfigCount()
    {
        return $this->count(self::FILECONFIG);
    }

    /**
     * Sets value of 'nSN' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSN($value)
    {
        return $this->set(self::NSN, $value);
    }

    /**
     * Returns value of 'nSN' property
     *
     * @return integer
     */
    public function getNSN()
    {
        $value = $this->get(self::NSN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSN' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSN()
    {
        return $this->get(self::NSN) !== null;
    }

    /**
     * Sets value of 'account' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAccount($value)
    {
        return $this->set(self::ACCOUNT, $value);
    }

    /**
     * Returns value of 'account' property
     *
     * @return string
     */
    public function getAccount()
    {
        $value = $this->get(self::ACCOUNT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'account' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAccount()
    {
        return $this->get(self::ACCOUNT) !== null;
    }
}
}