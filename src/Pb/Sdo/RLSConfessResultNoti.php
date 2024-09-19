<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSConfessResultNoti message
 */
class RLSConfessResultNoti extends \ProtobufMessage
{
    /* Field index constants */
    const CONFESSERID = 1;
    const CONFESSEEID = 2;
    const CONFESSERNAME = 3;
    const CONFESSEENAME = 4;
    const CONFESSRESULT = 5;
    const ITEMRETURN = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONFESSERID => array(
            'name' => 'confesserID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONFESSEEID => array(
            'name' => 'confesseeID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONFESSERNAME => array(
            'name' => 'confesserName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CONFESSEENAME => array(
            'name' => 'confesseeName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CONFESSRESULT => array(
            'default' => \Xnhd\Core\Pb\Sdo\AnswerResultType::enmAnswerResultType_None,
            'name' => 'confessResult',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ITEMRETURN => array(
            'name' => 'itemReturn',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
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
        $this->values[self::CONFESSERID] = null;
        $this->values[self::CONFESSEEID] = null;
        $this->values[self::CONFESSERNAME] = null;
        $this->values[self::CONFESSEENAME] = null;
        $this->values[self::CONFESSRESULT] = self::$fields[self::CONFESSRESULT]['default'];
        $this->values[self::ITEMRETURN] = array();
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
     * Sets value of 'confesserID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setConfesserID($value)
    {
        return $this->set(self::CONFESSERID, $value);
    }

    /**
     * Returns value of 'confesserID' property
     *
     * @return integer
     */
    public function getConfesserID()
    {
        $value = $this->get(self::CONFESSERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'confesserID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConfesserID()
    {
        return $this->get(self::CONFESSERID) !== null;
    }

    /**
     * Sets value of 'confesseeID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setConfesseeID($value)
    {
        return $this->set(self::CONFESSEEID, $value);
    }

    /**
     * Returns value of 'confesseeID' property
     *
     * @return integer
     */
    public function getConfesseeID()
    {
        $value = $this->get(self::CONFESSEEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'confesseeID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConfesseeID()
    {
        return $this->get(self::CONFESSEEID) !== null;
    }

    /**
     * Sets value of 'confesserName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setConfesserName($value)
    {
        return $this->set(self::CONFESSERNAME, $value);
    }

    /**
     * Returns value of 'confesserName' property
     *
     * @return string
     */
    public function getConfesserName()
    {
        $value = $this->get(self::CONFESSERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'confesserName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConfesserName()
    {
        return $this->get(self::CONFESSERNAME) !== null;
    }

    /**
     * Sets value of 'confesseeName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setConfesseeName($value)
    {
        return $this->set(self::CONFESSEENAME, $value);
    }

    /**
     * Returns value of 'confesseeName' property
     *
     * @return string
     */
    public function getConfesseeName()
    {
        $value = $this->get(self::CONFESSEENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'confesseeName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConfesseeName()
    {
        return $this->get(self::CONFESSEENAME) !== null;
    }

    /**
     * Sets value of 'confessResult' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setConfessResult($value)
    {
        return $this->set(self::CONFESSRESULT, $value);
    }

    /**
     * Returns value of 'confessResult' property
     *
     * @return integer
     */
    public function getConfessResult()
    {
        $value = $this->get(self::CONFESSRESULT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'confessResult' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasConfessResult()
    {
        return $this->get(self::CONFESSRESULT) !== null;
    }

    /**
     * Appends value to 'itemReturn' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendItemReturn(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::ITEMRETURN, $value);
    }

    /**
     * Clears 'itemReturn' list
     *
     * @return null
     */
    public function clearItemReturn()
    {
        return $this->clear(self::ITEMRETURN);
    }

    /**
     * Returns 'itemReturn' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getItemReturn()
    {
        return $this->get(self::ITEMRETURN);
    }

    /**
     * Returns true if 'itemReturn' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasItemReturn()
    {
        return count($this->get(self::ITEMRETURN)) !== 0;
    }

    /**
     * Returns 'itemReturn' iterator
     *
     * @return \ArrayIterator
     */
    public function getItemReturnIterator()
    {
        return new \ArrayIterator($this->get(self::ITEMRETURN));
    }

    /**
     * Returns element from 'itemReturn' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getItemReturnAt($offset)
    {
        return $this->get(self::ITEMRETURN, $offset);
    }

    /**
     * Returns count of 'itemReturn' list
     *
     * @return int
     */
    public function getItemReturnCount()
    {
        return $this->count(self::ITEMRETURN);
    }
}
}