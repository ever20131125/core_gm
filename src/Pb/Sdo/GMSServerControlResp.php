<?php
/**
 * Auto generated from gmserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GMSServerControlResp message
 */
class GMSServerControlResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NSIGNAL = 2;
    const ENTITYTYPE = 3;
    const DESTID = 4;
    const NSN = 5;
    const ACCOUNT = 6;
    const NTIME = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
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
        self::NTIME => array(
            'name' => 'nTime',
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::NSIGNAL] = null;
        $this->values[self::ENTITYTYPE] = self::$fields[self::ENTITYTYPE]['default'];
        $this->values[self::DESTID] = null;
        $this->values[self::NSN] = null;
        $this->values[self::ACCOUNT] = null;
        $this->values[self::NTIME] = null;
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

    /**
     * Sets value of 'nTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTime($value)
    {
        return $this->set(self::NTIME, $value);
    }

    /**
     * Returns value of 'nTime' property
     *
     * @return integer
     */
    public function getNTime()
    {
        $value = $this->get(self::NTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTime()
    {
        return $this->get(self::NTIME) !== null;
    }
}
}