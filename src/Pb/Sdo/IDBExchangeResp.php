<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBExchangeResp message
 */
class IDBExchangeResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const SOURCE = 3;
    const NTHEME = 4;
    const ARRID = 5;
    const ARRQUANTITY = 6;

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
        self::SOURCE => array(
            'default' => \Xnhd\Core\Pb\Sdo\SourceChannel::enmSourceChannel_Mall_Qualify,
            'name' => 'source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTHEME => array(
            'name' => 'nTheme',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRID => array(
            'name' => 'arrID',
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::NROLEID] = null;
        $this->values[self::SOURCE] = self::$fields[self::SOURCE]['default'];
        $this->values[self::NTHEME] = null;
        $this->values[self::ARRID] = array();
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
     * Sets value of 'nTheme' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTheme($value)
    {
        return $this->set(self::NTHEME, $value);
    }

    /**
     * Returns value of 'nTheme' property
     *
     * @return integer
     */
    public function getNTheme()
    {
        $value = $this->get(self::NTHEME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTheme' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTheme()
    {
        return $this->get(self::NTHEME) !== null;
    }

    /**
     * Appends value to 'arrID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrID($value)
    {
        return $this->append(self::ARRID, $value);
    }

    /**
     * Clears 'arrID' list
     *
     * @return null
     */
    public function clearArrID()
    {
        return $this->clear(self::ARRID);
    }

    /**
     * Returns 'arrID' list
     *
     * @return integer[]
     */
    public function getArrID()
    {
        return $this->get(self::ARRID);
    }

    /**
     * Returns true if 'arrID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrID()
    {
        return count($this->get(self::ARRID)) !== 0;
    }

    /**
     * Returns 'arrID' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrIDIterator()
    {
        return new \ArrayIterator($this->get(self::ARRID));
    }

    /**
     * Returns element from 'arrID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrIDAt($offset)
    {
        return $this->get(self::ARRID, $offset);
    }

    /**
     * Returns count of 'arrID' list
     *
     * @return int
     */
    public function getArrIDCount()
    {
        return $this->count(self::ARRID);
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