<?php
/**
 * Auto generated from guildserver.proto at 2023-02-13 12:39:16
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GDSSendGuildMailReq message
 */
class GDSSendGuildMailReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const ENMSENDGUILDMAILTYPE = 2;
    const MAILTITLE = 3;
    const MAILCONTENT = 4;
    const ARRROLEID = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ENMSENDGUILDMAILTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\SendGuildMailType::enmSendGuildMailType_Invalid,
            'name' => 'enmSendGuildMailType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAILTITLE => array(
            'name' => 'mailTitle',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MAILCONTENT => array(
            'name' => 'mailContent',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ARRROLEID => array(
            'name' => 'arrRoleID',
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
        $this->values[self::ENMSENDGUILDMAILTYPE] = self::$fields[self::ENMSENDGUILDMAILTYPE]['default'];
        $this->values[self::MAILTITLE] = null;
        $this->values[self::MAILCONTENT] = null;
        $this->values[self::ARRROLEID] = array();
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
     * Sets value of 'enmSendGuildMailType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEnmSendGuildMailType($value)
    {
        return $this->set(self::ENMSENDGUILDMAILTYPE, $value);
    }

    /**
     * Returns value of 'enmSendGuildMailType' property
     *
     * @return integer
     */
    public function getEnmSendGuildMailType()
    {
        $value = $this->get(self::ENMSENDGUILDMAILTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'enmSendGuildMailType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEnmSendGuildMailType()
    {
        return $this->get(self::ENMSENDGUILDMAILTYPE) !== null;
    }

    /**
     * Sets value of 'mailTitle' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMailTitle($value)
    {
        return $this->set(self::MAILTITLE, $value);
    }

    /**
     * Returns value of 'mailTitle' property
     *
     * @return string
     */
    public function getMailTitle()
    {
        $value = $this->get(self::MAILTITLE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'mailTitle' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMailTitle()
    {
        return $this->get(self::MAILTITLE) !== null;
    }

    /**
     * Sets value of 'mailContent' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMailContent($value)
    {
        return $this->set(self::MAILCONTENT, $value);
    }

    /**
     * Returns value of 'mailContent' property
     *
     * @return string
     */
    public function getMailContent()
    {
        $value = $this->get(self::MAILCONTENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'mailContent' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMailContent()
    {
        return $this->get(self::MAILCONTENT) !== null;
    }

    /**
     * Appends value to 'arrRoleID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrRoleID($value)
    {
        return $this->append(self::ARRROLEID, $value);
    }

    /**
     * Clears 'arrRoleID' list
     *
     * @return null
     */
    public function clearArrRoleID()
    {
        return $this->clear(self::ARRROLEID);
    }

    /**
     * Returns 'arrRoleID' list
     *
     * @return integer[]
     */
    public function getArrRoleID()
    {
        return $this->get(self::ARRROLEID);
    }

    /**
     * Returns true if 'arrRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRoleID()
    {
        return count($this->get(self::ARRROLEID)) !== 0;
    }

    /**
     * Returns 'arrRoleID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRoleIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRROLEID));
    }

    /**
     * Returns element from 'arrRoleID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrRoleIDAt($offset)
    {
        return $this->get(self::ARRROLEID, $offset);
    }

    /**
     * Returns count of 'arrRoleID' list
     *
     * @return int
     */
    public function getArrRoleIDCount()
    {
        return $this->count(self::ARRROLEID);
    }
}
}