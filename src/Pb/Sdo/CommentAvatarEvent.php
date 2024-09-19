<?php
/**
 * Auto generated from event.proto at 2021-12-17 09:50:46
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * CommentAvatarEvent message
 */
class CommentAvatarEvent extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NITEMID = 2;
    const NSTAR = 3;
    const SZCOMMENT = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NITEMID => array(
            'name' => 'nItemID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSTAR => array(
            'name' => 'nStar',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZCOMMENT => array(
            'name' => 'szComment',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NITEMID] = null;
        $this->values[self::NSTAR] = null;
        $this->values[self::SZCOMMENT] = null;
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
     * Sets value of 'nItemID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNItemID($value)
    {
        return $this->set(self::NITEMID, $value);
    }

    /**
     * Returns value of 'nItemID' property
     *
     * @return integer
     */
    public function getNItemID()
    {
        $value = $this->get(self::NITEMID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nItemID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNItemID()
    {
        return $this->get(self::NITEMID) !== null;
    }

    /**
     * Sets value of 'nStar' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNStar($value)
    {
        return $this->set(self::NSTAR, $value);
    }

    /**
     * Returns value of 'nStar' property
     *
     * @return integer
     */
    public function getNStar()
    {
        $value = $this->get(self::NSTAR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nStar' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNStar()
    {
        return $this->get(self::NSTAR) !== null;
    }

    /**
     * Sets value of 'szComment' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzComment($value)
    {
        return $this->set(self::SZCOMMENT, $value);
    }

    /**
     * Returns value of 'szComment' property
     *
     * @return string
     */
    public function getSzComment()
    {
        $value = $this->get(self::SZCOMMENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szComment' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzComment()
    {
        return $this->get(self::SZCOMMENT) !== null;
    }
}
}