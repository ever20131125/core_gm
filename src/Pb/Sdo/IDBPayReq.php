<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBPayReq message
 */
class IDBPayReq extends \ProtobufMessage
{
    /* Field index constants */
    const SZACCOUNTID = 1;
    const SZPRODUCTID = 2;
    const SZORDER = 3;
    const NRMB = 4;
    const SOURCE = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SZACCOUNTID => array(
            'name' => 'szAccountID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SZPRODUCTID => array(
            'name' => 'szProductID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SZORDER => array(
            'name' => 'szOrder',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NRMB => array(
            'name' => 'nRMB',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCE => array(
            'name' => 'source',
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
        $this->values[self::SZACCOUNTID] = null;
        $this->values[self::SZPRODUCTID] = null;
        $this->values[self::SZORDER] = null;
        $this->values[self::NRMB] = null;
        $this->values[self::SOURCE] = null;
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
     * Sets value of 'szAccountID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzAccountID($value)
    {
        return $this->set(self::SZACCOUNTID, $value);
    }

    /**
     * Returns value of 'szAccountID' property
     *
     * @return string
     */
    public function getSzAccountID()
    {
        $value = $this->get(self::SZACCOUNTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szAccountID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzAccountID()
    {
        return $this->get(self::SZACCOUNTID) !== null;
    }

    /**
     * Sets value of 'szProductID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzProductID($value)
    {
        return $this->set(self::SZPRODUCTID, $value);
    }

    /**
     * Returns value of 'szProductID' property
     *
     * @return string
     */
    public function getSzProductID()
    {
        $value = $this->get(self::SZPRODUCTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szProductID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzProductID()
    {
        return $this->get(self::SZPRODUCTID) !== null;
    }

    /**
     * Sets value of 'szOrder' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzOrder($value)
    {
        return $this->set(self::SZORDER, $value);
    }

    /**
     * Returns value of 'szOrder' property
     *
     * @return string
     */
    public function getSzOrder()
    {
        $value = $this->get(self::SZORDER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szOrder' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzOrder()
    {
        return $this->get(self::SZORDER) !== null;
    }

    /**
     * Sets value of 'nRMB' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRMB($value)
    {
        return $this->set(self::NRMB, $value);
    }

    /**
     * Returns value of 'nRMB' property
     *
     * @return integer
     */
    public function getNRMB()
    {
        $value = $this->get(self::NRMB);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRMB' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRMB()
    {
        return $this->get(self::NRMB) !== null;
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
}
}