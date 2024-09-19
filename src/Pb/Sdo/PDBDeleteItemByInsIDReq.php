<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBDeleteItemByInsIDReq message
 */
class PDBDeleteItemByInsIDReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const SOURCE = 2;
    const BAGTYPE = 3;
    const THEME = 4;
    const ARRITEMINSID = 5;
    const ARRQUANTITY = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCE => array(
            'name' => 'source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BAGTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\BagType::enmBagType_Normal,
            'name' => 'bagType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::THEME => array(
            'name' => 'theme',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRITEMINSID => array(
            'name' => 'arrItemInsID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRQUANTITY => array(
            'name' => 'arrQuantity',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::SOURCE] = null;
        $this->values[self::BAGTYPE] = self::$fields[self::BAGTYPE]['default'];
        $this->values[self::THEME] = null;
        $this->values[self::ARRITEMINSID] = array();
        $this->values[self::ARRQUANTITY] = array();
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
     * Sets value of 'source' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSource($value)
    {
        return $this->set(self::SOURCE, $value);
    }

    /**
     * Returns value of 'source' property
     *
     * @return integer
     */
    public function getSource()
    {
        $value = $this->get(self::SOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'source' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSource()
    {
        return $this->get(self::SOURCE) !== null;
    }

    /**
     * Sets value of 'bagType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBagType($value)
    {
        return $this->set(self::BAGTYPE, $value);
    }

    /**
     * Returns value of 'bagType' property
     *
     * @return integer
     */
    public function getBagType()
    {
        $value = $this->get(self::BAGTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bagType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBagType()
    {
        return $this->get(self::BAGTYPE) !== null;
    }

    /**
     * Sets value of 'theme' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTheme($value)
    {
        return $this->set(self::THEME, $value);
    }

    /**
     * Returns value of 'theme' property
     *
     * @return integer
     */
    public function getTheme()
    {
        $value = $this->get(self::THEME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'theme' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTheme()
    {
        return $this->get(self::THEME) !== null;
    }

    /**
     * Appends value to 'arrItemInsID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrItemInsID($value)
    {
        return $this->append(self::ARRITEMINSID, $value);
    }

    /**
     * Clears 'arrItemInsID' list
     *
     * @return null
     */
    public function clearArrItemInsID()
    {
        return $this->clear(self::ARRITEMINSID);
    }

    /**
     * Returns 'arrItemInsID' list
     *
     * @return integer[]
     */
    public function getArrItemInsID()
    {
        return $this->get(self::ARRITEMINSID);
    }

    /**
     * Returns true if 'arrItemInsID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItemInsID()
    {
        return count($this->get(self::ARRITEMINSID)) !== 0;
    }

    /**
     * Returns 'arrItemInsID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemInsIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEMINSID));
    }

    /**
     * Returns element from 'arrItemInsID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrItemInsIDAt($offset)
    {
        return $this->get(self::ARRITEMINSID, $offset);
    }

    /**
     * Returns count of 'arrItemInsID' list
     *
     * @return int
     */
    public function getArrItemInsIDCount()
    {
        return $this->count(self::ARRITEMINSID);
    }

    /**
     * Appends value to 'arrQuantity' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrQuantity($value)
    {
        return $this->append(self::ARRQUANTITY, $value);
    }

    /**
     * Clears 'arrQuantity' list
     *
     * @return null
     */
    public function clearArrQuantity()
    {
        return $this->clear(self::ARRQUANTITY);
    }

    /**
     * Returns 'arrQuantity' list
     *
     * @return integer[]
     */
    public function getArrQuantity()
    {
        return $this->get(self::ARRQUANTITY);
    }

    /**
     * Returns true if 'arrQuantity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrQuantity()
    {
        return count($this->get(self::ARRQUANTITY)) !== 0;
    }

    /**
     * Returns 'arrQuantity' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrQuantityIterator()
    {
        return new \ArrayIterator($this->get(self::ARRQUANTITY));
    }

    /**
     * Returns element from 'arrQuantity' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrQuantityAt($offset)
    {
        return $this->get(self::ARRQUANTITY, $offset);
    }

    /**
     * Returns count of 'arrQuantity' list
     *
     * @return int
     */
    public function getArrQuantityCount()
    {
        return $this->count(self::ARRQUANTITY);
    }
}
}