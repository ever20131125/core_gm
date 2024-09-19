<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * LoverLetter message
 */
class LoverLetter extends \ProtobufMessage
{
    /* Field index constants */
    const RECERID = 1;
    const WRITERID = 2;
    const WRITERNAME = 3;
    const WRITETIME = 4;
    const LETTERID = 5;
    const LETTERTEXT = 6;
    const STATE = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RECERID => array(
            'name' => 'recerID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WRITERID => array(
            'name' => 'writerID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WRITERNAME => array(
            'name' => 'writerName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::WRITETIME => array(
            'default' => \Xnhd\Core\Pb\Sdo\FriendType::enmFriendType_None,
            'name' => 'writeTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LETTERID => array(
            'name' => 'letterID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LETTERTEXT => array(
            'name' => 'letterText',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STATE => array(
            'name' => 'state',
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
        $this->values[self::RECERID] = null;
        $this->values[self::WRITERID] = null;
        $this->values[self::WRITERNAME] = null;
        $this->values[self::WRITETIME] = self::$fields[self::WRITETIME]['default'];
        $this->values[self::LETTERID] = null;
        $this->values[self::LETTERTEXT] = null;
        $this->values[self::STATE] = null;
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
     * Sets value of 'recerID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRecerID($value)
    {
        return $this->set(self::RECERID, $value);
    }

    /**
     * Returns value of 'recerID' property
     *
     * @return integer
     */
    public function getRecerID()
    {
        $value = $this->get(self::RECERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'recerID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRecerID()
    {
        return $this->get(self::RECERID) !== null;
    }

    /**
     * Sets value of 'writerID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWriterID($value)
    {
        return $this->set(self::WRITERID, $value);
    }

    /**
     * Returns value of 'writerID' property
     *
     * @return integer
     */
    public function getWriterID()
    {
        $value = $this->get(self::WRITERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'writerID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWriterID()
    {
        return $this->get(self::WRITERID) !== null;
    }

    /**
     * Sets value of 'writerName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWriterName($value)
    {
        return $this->set(self::WRITERNAME, $value);
    }

    /**
     * Returns value of 'writerName' property
     *
     * @return string
     */
    public function getWriterName()
    {
        $value = $this->get(self::WRITERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'writerName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWriterName()
    {
        return $this->get(self::WRITERNAME) !== null;
    }

    /**
     * Sets value of 'writeTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWriteTime($value)
    {
        return $this->set(self::WRITETIME, $value);
    }

    /**
     * Returns value of 'writeTime' property
     *
     * @return integer
     */
    public function getWriteTime()
    {
        $value = $this->get(self::WRITETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'writeTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWriteTime()
    {
        return $this->get(self::WRITETIME) !== null;
    }

    /**
     * Sets value of 'letterID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLetterID($value)
    {
        return $this->set(self::LETTERID, $value);
    }

    /**
     * Returns value of 'letterID' property
     *
     * @return integer
     */
    public function getLetterID()
    {
        $value = $this->get(self::LETTERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'letterID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLetterID()
    {
        return $this->get(self::LETTERID) !== null;
    }

    /**
     * Sets value of 'letterText' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLetterText($value)
    {
        return $this->set(self::LETTERTEXT, $value);
    }

    /**
     * Returns value of 'letterText' property
     *
     * @return string
     */
    public function getLetterText()
    {
        $value = $this->get(self::LETTERTEXT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'letterText' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLetterText()
    {
        return $this->get(self::LETTERTEXT) !== null;
    }

    /**
     * Sets value of 'state' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setState($value)
    {
        return $this->set(self::STATE, $value);
    }

    /**
     * Returns value of 'state' property
     *
     * @return integer
     */
    public function getState()
    {
        $value = $this->get(self::STATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'state' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasState()
    {
        return $this->get(self::STATE) !== null;
    }
}
}