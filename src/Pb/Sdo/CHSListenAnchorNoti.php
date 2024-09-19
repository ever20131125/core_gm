<?php
/**
 * Auto generated from chatserver.proto at 2023-02-13 12:39:15
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CHSListenAnchorNoti message
 */
class CHSListenAnchorNoti extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const BOPEN = 2;
    const DURING = 3;
    const NLISTENERCNT = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BOPEN => array(
            'name' => 'bOpen',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::DURING => array(
            'name' => 'during',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLISTENERCNT => array(
            'name' => 'nListenerCnt',
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
        $this->values[self::BOPEN] = null;
        $this->values[self::DURING] = null;
        $this->values[self::NLISTENERCNT] = null;
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
     * Sets value of 'bOpen' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBOpen($value)
    {
        return $this->set(self::BOPEN, $value);
    }

    /**
     * Returns value of 'bOpen' property
     *
     * @return boolean
     */
    public function getBOpen()
    {
        $value = $this->get(self::BOPEN);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bOpen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBOpen()
    {
        return $this->get(self::BOPEN) !== null;
    }

    /**
     * Sets value of 'during' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDuring($value)
    {
        return $this->set(self::DURING, $value);
    }

    /**
     * Returns value of 'during' property
     *
     * @return integer
     */
    public function getDuring()
    {
        $value = $this->get(self::DURING);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'during' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDuring()
    {
        return $this->get(self::DURING) !== null;
    }

    /**
     * Sets value of 'nListenerCnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNListenerCnt($value)
    {
        return $this->set(self::NLISTENERCNT, $value);
    }

    /**
     * Returns value of 'nListenerCnt' property
     *
     * @return integer
     */
    public function getNListenerCnt()
    {
        $value = $this->get(self::NLISTENERCNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nListenerCnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNListenerCnt()
    {
        return $this->get(self::NLISTENERCNT) !== null;
    }
}
}