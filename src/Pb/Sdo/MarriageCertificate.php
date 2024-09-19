<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * MarriageCertificate message
 */
class MarriageCertificate extends \ProtobufMessage
{
    /* Field index constants */
    const MARRIGEINTDEX = 1;
    const MARRIGETIME = 2;
    const DIVORCETIME = 3;
    const NICKNAME = 4;
    const LOVEDECLARATION = 5;
    const ITEM = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MARRIGEINTDEX => array(
            'name' => 'marrigeIntdex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MARRIGETIME => array(
            'name' => 'marrigeTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DIVORCETIME => array(
            'name' => 'divorceTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NICKNAME => array(
            'name' => 'nickname',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LOVEDECLARATION => array(
            'name' => 'loveDeclaration',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ITEM => array(
            'name' => 'item',
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
        $this->values[self::MARRIGEINTDEX] = null;
        $this->values[self::MARRIGETIME] = null;
        $this->values[self::DIVORCETIME] = null;
        $this->values[self::NICKNAME] = null;
        $this->values[self::LOVEDECLARATION] = null;
        $this->values[self::ITEM] = array();
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
     * Sets value of 'marrigeIntdex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMarrigeIntdex($value)
    {
        return $this->set(self::MARRIGEINTDEX, $value);
    }

    /**
     * Returns value of 'marrigeIntdex' property
     *
     * @return integer
     */
    public function getMarrigeIntdex()
    {
        $value = $this->get(self::MARRIGEINTDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'marrigeIntdex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMarrigeIntdex()
    {
        return $this->get(self::MARRIGEINTDEX) !== null;
    }

    /**
     * Sets value of 'marrigeTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMarrigeTime($value)
    {
        return $this->set(self::MARRIGETIME, $value);
    }

    /**
     * Returns value of 'marrigeTime' property
     *
     * @return integer
     */
    public function getMarrigeTime()
    {
        $value = $this->get(self::MARRIGETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'marrigeTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMarrigeTime()
    {
        return $this->get(self::MARRIGETIME) !== null;
    }

    /**
     * Sets value of 'divorceTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDivorceTime($value)
    {
        return $this->set(self::DIVORCETIME, $value);
    }

    /**
     * Returns value of 'divorceTime' property
     *
     * @return integer
     */
    public function getDivorceTime()
    {
        $value = $this->get(self::DIVORCETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'divorceTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDivorceTime()
    {
        return $this->get(self::DIVORCETIME) !== null;
    }

    /**
     * Sets value of 'nickname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNickname($value)
    {
        return $this->set(self::NICKNAME, $value);
    }

    /**
     * Returns value of 'nickname' property
     *
     * @return string
     */
    public function getNickname()
    {
        $value = $this->get(self::NICKNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'nickname' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNickname()
    {
        return $this->get(self::NICKNAME) !== null;
    }

    /**
     * Sets value of 'loveDeclaration' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLoveDeclaration($value)
    {
        return $this->set(self::LOVEDECLARATION, $value);
    }

    /**
     * Returns value of 'loveDeclaration' property
     *
     * @return string
     */
    public function getLoveDeclaration()
    {
        $value = $this->get(self::LOVEDECLARATION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'loveDeclaration' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoveDeclaration()
    {
        return $this->get(self::LOVEDECLARATION) !== null;
    }

    /**
     * Appends value to 'item' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendItem($value)
    {
        return $this->append(self::ITEM, $value);
    }

    /**
     * Clears 'item' list
     *
     * @return null
     */
    public function clearItem()
    {
        return $this->clear(self::ITEM);
    }

    /**
     * Returns 'item' list
     *
     * @return integer[]
     */
    public function getItem()
    {
        return $this->get(self::ITEM);
    }

    /**
     * Returns true if 'item' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasItem()
    {
        return count($this->get(self::ITEM)) !== 0;
    }

    /**
     * Returns 'item' iterator
     *
     * @return \ArrayIterator
     */
    public function getItemIterator()
    {
        return new \ArrayIterator($this->get(self::ITEM));
    }

    /**
     * Returns element from 'item' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getItemAt($offset)
    {
        return $this->get(self::ITEM, $offset);
    }

    /**
     * Returns count of 'item' list
     *
     * @return int
     */
    public function getItemCount()
    {
        return $this->count(self::ITEM);
    }
}
}