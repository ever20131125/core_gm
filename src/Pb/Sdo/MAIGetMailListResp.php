<?php
/**
 * Auto generated from mailserver.proto at 2023-02-13 12:39:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MAIGetMailListResp message
 */
class MAIGetMailListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const ARRMAILLIST = 3;

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
        self::ARRMAILLIST => array(
            'name' => 'arrMailList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\MailGeneral'
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
        $this->values[self::ARRMAILLIST] = array();
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
     * Appends value to 'arrMailList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\MailGeneral $value Value to append
     *
     * @return null
     */
    public function appendArrMailList(\Xnhd\Core\Pb\Sdo\MailGeneral $value)
    {
        return $this->append(self::ARRMAILLIST, $value);
    }

    /**
     * Clears 'arrMailList' list
     *
     * @return null
     */
    public function clearArrMailList()
    {
        return $this->clear(self::ARRMAILLIST);
    }

    /**
     * Returns 'arrMailList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\MailGeneral[]
     */
    public function getArrMailList()
    {
        return $this->get(self::ARRMAILLIST);
    }

    /**
     * Returns true if 'arrMailList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrMailList()
    {
        return count($this->get(self::ARRMAILLIST)) !== 0;
    }

    /**
     * Returns 'arrMailList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrMailListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRMAILLIST));
    }

    /**
     * Returns element from 'arrMailList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\MailGeneral
     */
    public function getArrMailListAt($offset)
    {
        return $this->get(self::ARRMAILLIST, $offset);
    }

    /**
     * Returns count of 'arrMailList' list
     *
     * @return int
     */
    public function getArrMailListCount()
    {
        return $this->count(self::ARRMAILLIST);
    }
}
}