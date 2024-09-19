<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ConnUin message
 */
class ConnUin extends \ProtobufMessage
{
    /* Field index constants */
    const NVERSION = 1;
    const NTUNNELSERVER_ID = 2;
    const NTUNNEL_INDEX = 3;
    const SZACCOUNTID = 4;
    const NZONEID = 5;
    const NUIN = 6;
    const NCREATE_TIME = 7;
    const NISN = 8;
    const NIP = 9;
    const NPORT = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NVERSION => array(
            'default' => 1,
            'name' => 'nVersion',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTUNNELSERVER_ID => array(
            'name' => 'nTunnelserver_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTUNNEL_INDEX => array(
            'name' => 'nTunnel_index',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZACCOUNTID => array(
            'name' => 'szAccountID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NZONEID => array(
            'name' => 'nZoneID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NUIN => array(
            'name' => 'nUin',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCREATE_TIME => array(
            'name' => 'nCreate_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NISN => array(
            'name' => 'nIsn',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NIP => array(
            'name' => 'nIp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPORT => array(
            'name' => 'nPort',
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
        $this->values[self::NVERSION] = self::$fields[self::NVERSION]['default'];
        $this->values[self::NTUNNELSERVER_ID] = null;
        $this->values[self::NTUNNEL_INDEX] = null;
        $this->values[self::SZACCOUNTID] = null;
        $this->values[self::NZONEID] = null;
        $this->values[self::NUIN] = null;
        $this->values[self::NCREATE_TIME] = null;
        $this->values[self::NISN] = null;
        $this->values[self::NIP] = null;
        $this->values[self::NPORT] = null;
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
     * Sets value of 'nVersion' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNVersion($value)
    {
        return $this->set(self::NVERSION, $value);
    }

    /**
     * Returns value of 'nVersion' property
     *
     * @return integer
     */
    public function getNVersion()
    {
        $value = $this->get(self::NVERSION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nVersion' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNVersion()
    {
        return $this->get(self::NVERSION) !== null;
    }

    /**
     * Sets value of 'nTunnelserver_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTunnelserverId($value)
    {
        return $this->set(self::NTUNNELSERVER_ID, $value);
    }

    /**
     * Returns value of 'nTunnelserver_id' property
     *
     * @return integer
     */
    public function getNTunnelserverId()
    {
        $value = $this->get(self::NTUNNELSERVER_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTunnelserver_id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTunnelserverId()
    {
        return $this->get(self::NTUNNELSERVER_ID) !== null;
    }

    /**
     * Sets value of 'nTunnel_index' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTunnelIndex($value)
    {
        return $this->set(self::NTUNNEL_INDEX, $value);
    }

    /**
     * Returns value of 'nTunnel_index' property
     *
     * @return integer
     */
    public function getNTunnelIndex()
    {
        $value = $this->get(self::NTUNNEL_INDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTunnel_index' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTunnelIndex()
    {
        return $this->get(self::NTUNNEL_INDEX) !== null;
    }

    /**
     * Sets value of 'szAccountID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzAccountID($value)
    {
        return $this->set(self::SZACCOUNTID, $value);
    }

    /**
     * Returns value of 'szAccountID' property
     *
     * @return string
     */
    public function getSzAccountID()
    {
        $value = $this->get(self::SZACCOUNTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szAccountID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzAccountID()
    {
        return $this->get(self::SZACCOUNTID) !== null;
    }

    /**
     * Sets value of 'nZoneID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNZoneID($value)
    {
        return $this->set(self::NZONEID, $value);
    }

    /**
     * Returns value of 'nZoneID' property
     *
     * @return integer
     */
    public function getNZoneID()
    {
        $value = $this->get(self::NZONEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nZoneID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNZoneID()
    {
        return $this->get(self::NZONEID) !== null;
    }

    /**
     * Sets value of 'nUin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNUin($value)
    {
        return $this->set(self::NUIN, $value);
    }

    /**
     * Returns value of 'nUin' property
     *
     * @return integer
     */
    public function getNUin()
    {
        $value = $this->get(self::NUIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nUin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNUin()
    {
        return $this->get(self::NUIN) !== null;
    }

    /**
     * Sets value of 'nCreate_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCreateTime($value)
    {
        return $this->set(self::NCREATE_TIME, $value);
    }

    /**
     * Returns value of 'nCreate_time' property
     *
     * @return integer
     */
    public function getNCreateTime()
    {
        $value = $this->get(self::NCREATE_TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCreate_time' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCreateTime()
    {
        return $this->get(self::NCREATE_TIME) !== null;
    }

    /**
     * Sets value of 'nIsn' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNIsn($value)
    {
        return $this->set(self::NISN, $value);
    }

    /**
     * Returns value of 'nIsn' property
     *
     * @return integer
     */
    public function getNIsn()
    {
        $value = $this->get(self::NISN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nIsn' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNIsn()
    {
        return $this->get(self::NISN) !== null;
    }

    /**
     * Sets value of 'nIp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNIp($value)
    {
        return $this->set(self::NIP, $value);
    }

    /**
     * Returns value of 'nIp' property
     *
     * @return integer
     */
    public function getNIp()
    {
        $value = $this->get(self::NIP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nIp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNIp()
    {
        return $this->get(self::NIP) !== null;
    }

    /**
     * Sets value of 'nPort' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPort($value)
    {
        return $this->set(self::NPORT, $value);
    }

    /**
     * Returns value of 'nPort' property
     *
     * @return integer
     */
    public function getNPort()
    {
        $value = $this->get(self::NPORT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPort' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPort()
    {
        return $this->get(self::NPORT) !== null;
    }
}
}