<?php
/**
 * Auto generated from mailserver.proto at 2023-02-13 12:39:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MAIDeleteMailReq message
 */
class MAIDeleteMailReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NMAILID = 2;
    const MAILTYPE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMAILID => array(
            'name' => 'nMailID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAILTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\MailType::enmMailType_Syetem,
            'name' => 'mailType',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NMAILID] = array();
        $this->values[self::MAILTYPE] = self::$fields[self::MAILTYPE]['default'];
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
     * Appends value to 'nMailID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendNMailID($value)
    {
        return $this->append(self::NMAILID, $value);
    }

    /**
     * Clears 'nMailID' list
     *
     * @return null
     */
    public function clearNMailID()
    {
        return $this->clear(self::NMAILID);
    }

    /**
     * Returns 'nMailID' list
     *
     * @return integer[]
     */
    public function getNMailID()
    {
        return $this->get(self::NMAILID);
    }

    /**
     * Returns true if 'nMailID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMailID()
    {
        return count($this->get(self::NMAILID)) !== 0;
    }

    /**
     * Returns 'nMailID' iterator
     *
     * @return \ArrayIterator
     */
    public function getNMailIDIterator()
    {
        return new \ArrayIterator($this->get(self::NMAILID));
    }

    /**
     * Returns element from 'nMailID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getNMailIDAt($offset)
    {
        return $this->get(self::NMAILID, $offset);
    }

    /**
     * Returns count of 'nMailID' list
     *
     * @return int
     */
    public function getNMailIDCount()
    {
        return $this->count(self::NMAILID);
    }

    /**
     * Sets value of 'mailType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMailType($value)
    {
        return $this->set(self::MAILTYPE, $value);
    }

    /**
     * Returns value of 'mailType' property
     *
     * @return integer
     */
    public function getMailType()
    {
        $value = $this->get(self::MAILTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'mailType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMailType()
    {
        return $this->get(self::MAILTYPE) !== null;
    }
}
}