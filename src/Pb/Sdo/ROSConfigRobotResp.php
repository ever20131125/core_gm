<?php
/**
 * Auto generated from robotserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ROSConfigRobotResp message
 */
class ROSConfigRobotResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const VERSION = 2;
    const RESULT = 3;
    const ROBOTID = 4;
    const STARTUSERID = 5;
    const USERS = 6;
    const URLADDR = 7;
    const LUACONF = 8;
    const OPENPREFIX = 9;
    const ZONE_ID = 10;
    const DBUSER = 12;
    const DBPWD = 13;
    const DBNAME = 14;
    const DBIP = 15;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::VERSION => array(
            'name' => 'version',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RESULT => array(
            'name' => 'result',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROBOTID => array(
            'name' => 'robotid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STARTUSERID => array(
            'name' => 'startuserid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::USERS => array(
            'name' => 'users',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::URLADDR => array(
            'name' => 'urladdr',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LUACONF => array(
            'name' => 'luaconf',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::OPENPREFIX => array(
            'name' => 'openprefix',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ZONE_ID => array(
            'name' => 'zone_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DBUSER => array(
            'name' => 'dbuser',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DBPWD => array(
            'name' => 'dbpwd',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DBNAME => array(
            'name' => 'dbname',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DBIP => array(
            'name' => 'dbip',
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::VERSION] = null;
        $this->values[self::RESULT] = null;
        $this->values[self::ROBOTID] = null;
        $this->values[self::STARTUSERID] = null;
        $this->values[self::USERS] = null;
        $this->values[self::URLADDR] = null;
        $this->values[self::LUACONF] = null;
        $this->values[self::OPENPREFIX] = null;
        $this->values[self::ZONE_ID] = null;
        $this->values[self::DBUSER] = null;
        $this->values[self::DBPWD] = null;
        $this->values[self::DBNAME] = null;
        $this->values[self::DBIP] = null;
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
     * Sets value of 'version' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVersion($value)
    {
        return $this->set(self::VERSION, $value);
    }

    /**
     * Returns value of 'version' property
     *
     * @return integer
     */
    public function getVersion()
    {
        $value = $this->get(self::VERSION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'version' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVersion()
    {
        return $this->get(self::VERSION) !== null;
    }

    /**
     * Sets value of 'result' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setResult($value)
    {
        return $this->set(self::RESULT, $value);
    }

    /**
     * Returns value of 'result' property
     *
     * @return integer
     */
    public function getResult()
    {
        $value = $this->get(self::RESULT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'result' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasResult()
    {
        return $this->get(self::RESULT) !== null;
    }

    /**
     * Sets value of 'robotid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRobotid($value)
    {
        return $this->set(self::ROBOTID, $value);
    }

    /**
     * Returns value of 'robotid' property
     *
     * @return integer
     */
    public function getRobotid()
    {
        $value = $this->get(self::ROBOTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'robotid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRobotid()
    {
        return $this->get(self::ROBOTID) !== null;
    }

    /**
     * Sets value of 'startuserid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStartuserid($value)
    {
        return $this->set(self::STARTUSERID, $value);
    }

    /**
     * Returns value of 'startuserid' property
     *
     * @return integer
     */
    public function getStartuserid()
    {
        $value = $this->get(self::STARTUSERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'startuserid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStartuserid()
    {
        return $this->get(self::STARTUSERID) !== null;
    }

    /**
     * Sets value of 'users' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUsers($value)
    {
        return $this->set(self::USERS, $value);
    }

    /**
     * Returns value of 'users' property
     *
     * @return integer
     */
    public function getUsers()
    {
        $value = $this->get(self::USERS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'users' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUsers()
    {
        return $this->get(self::USERS) !== null;
    }

    /**
     * Sets value of 'urladdr' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUrladdr($value)
    {
        return $this->set(self::URLADDR, $value);
    }

    /**
     * Returns value of 'urladdr' property
     *
     * @return string
     */
    public function getUrladdr()
    {
        $value = $this->get(self::URLADDR);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'urladdr' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUrladdr()
    {
        return $this->get(self::URLADDR) !== null;
    }

    /**
     * Sets value of 'luaconf' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLuaconf($value)
    {
        return $this->set(self::LUACONF, $value);
    }

    /**
     * Returns value of 'luaconf' property
     *
     * @return string
     */
    public function getLuaconf()
    {
        $value = $this->get(self::LUACONF);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'luaconf' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLuaconf()
    {
        return $this->get(self::LUACONF) !== null;
    }

    /**
     * Sets value of 'openprefix' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOpenprefix($value)
    {
        return $this->set(self::OPENPREFIX, $value);
    }

    /**
     * Returns value of 'openprefix' property
     *
     * @return string
     */
    public function getOpenprefix()
    {
        $value = $this->get(self::OPENPREFIX);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'openprefix' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOpenprefix()
    {
        return $this->get(self::OPENPREFIX) !== null;
    }

    /**
     * Sets value of 'zone_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setZoneId($value)
    {
        return $this->set(self::ZONE_ID, $value);
    }

    /**
     * Returns value of 'zone_id' property
     *
     * @return integer
     */
    public function getZoneId()
    {
        $value = $this->get(self::ZONE_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'zone_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasZoneId()
    {
        return $this->get(self::ZONE_ID) !== null;
    }

    /**
     * Sets value of 'dbuser' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDbuser($value)
    {
        return $this->set(self::DBUSER, $value);
    }

    /**
     * Returns value of 'dbuser' property
     *
     * @return string
     */
    public function getDbuser()
    {
        $value = $this->get(self::DBUSER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'dbuser' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDbuser()
    {
        return $this->get(self::DBUSER) !== null;
    }

    /**
     * Sets value of 'dbpwd' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDbpwd($value)
    {
        return $this->set(self::DBPWD, $value);
    }

    /**
     * Returns value of 'dbpwd' property
     *
     * @return string
     */
    public function getDbpwd()
    {
        $value = $this->get(self::DBPWD);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'dbpwd' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDbpwd()
    {
        return $this->get(self::DBPWD) !== null;
    }

    /**
     * Sets value of 'dbname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDbname($value)
    {
        return $this->set(self::DBNAME, $value);
    }

    /**
     * Returns value of 'dbname' property
     *
     * @return string
     */
    public function getDbname()
    {
        $value = $this->get(self::DBNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'dbname' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDbname()
    {
        return $this->get(self::DBNAME) !== null;
    }

    /**
     * Sets value of 'dbip' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDbip($value)
    {
        return $this->set(self::DBIP, $value);
    }

    /**
     * Returns value of 'dbip' property
     *
     * @return string
     */
    public function getDbip()
    {
        $value = $this->get(self::DBIP);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'dbip' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDbip()
    {
        return $this->get(self::DBIP) !== null;
    }
}
}