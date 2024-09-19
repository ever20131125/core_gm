<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTGetBPInfoResp message
 */
class ACTGetBPInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const NACTIVEWEEK = 3;
    const NACTIVETOTAL = 4;
    const NSHOW = 5;
    const NEXP = 6;
    const NPAYMENT = 7;
    const NLEVEL = 8;
    const NACTIVE = 9;

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
        self::NACTIVEWEEK => array(
            'name' => 'nActiveWeek',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NACTIVETOTAL => array(
            'name' => 'nActiveTotal',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSHOW => array(
            'name' => 'nShow',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEXP => array(
            'name' => 'nExp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NPAYMENT => array(
            'name' => 'nPayment',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLEVEL => array(
            'name' => 'nLevel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NACTIVE => array(
            'name' => 'nActive',
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::NROLEID] = null;
        $this->values[self::NACTIVEWEEK] = null;
        $this->values[self::NACTIVETOTAL] = null;
        $this->values[self::NSHOW] = null;
        $this->values[self::NEXP] = null;
        $this->values[self::NPAYMENT] = null;
        $this->values[self::NLEVEL] = null;
        $this->values[self::NACTIVE] = null;
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
     * Sets value of 'nActiveWeek' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNActiveWeek($value)
    {
        return $this->set(self::NACTIVEWEEK, $value);
    }

    /**
     * Returns value of 'nActiveWeek' property
     *
     * @return integer
     */
    public function getNActiveWeek()
    {
        $value = $this->get(self::NACTIVEWEEK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nActiveWeek' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNActiveWeek()
    {
        return $this->get(self::NACTIVEWEEK) !== null;
    }

    /**
     * Sets value of 'nActiveTotal' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNActiveTotal($value)
    {
        return $this->set(self::NACTIVETOTAL, $value);
    }

    /**
     * Returns value of 'nActiveTotal' property
     *
     * @return integer
     */
    public function getNActiveTotal()
    {
        $value = $this->get(self::NACTIVETOTAL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nActiveTotal' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNActiveTotal()
    {
        return $this->get(self::NACTIVETOTAL) !== null;
    }

    /**
     * Sets value of 'nShow' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNShow($value)
    {
        return $this->set(self::NSHOW, $value);
    }

    /**
     * Returns value of 'nShow' property
     *
     * @return integer
     */
    public function getNShow()
    {
        $value = $this->get(self::NSHOW);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nShow' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNShow()
    {
        return $this->get(self::NSHOW) !== null;
    }

    /**
     * Sets value of 'nExp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNExp($value)
    {
        return $this->set(self::NEXP, $value);
    }

    /**
     * Returns value of 'nExp' property
     *
     * @return integer
     */
    public function getNExp()
    {
        $value = $this->get(self::NEXP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nExp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNExp()
    {
        return $this->get(self::NEXP) !== null;
    }

    /**
     * Sets value of 'nPayment' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNPayment($value)
    {
        return $this->set(self::NPAYMENT, $value);
    }

    /**
     * Returns value of 'nPayment' property
     *
     * @return integer
     */
    public function getNPayment()
    {
        $value = $this->get(self::NPAYMENT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nPayment' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNPayment()
    {
        return $this->get(self::NPAYMENT) !== null;
    }

    /**
     * Sets value of 'nLevel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLevel($value)
    {
        return $this->set(self::NLEVEL, $value);
    }

    /**
     * Returns value of 'nLevel' property
     *
     * @return integer
     */
    public function getNLevel()
    {
        $value = $this->get(self::NLEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLevel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLevel()
    {
        return $this->get(self::NLEVEL) !== null;
    }

    /**
     * Sets value of 'nActive' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNActive($value)
    {
        return $this->set(self::NACTIVE, $value);
    }

    /**
     * Returns value of 'nActive' property
     *
     * @return integer
     */
    public function getNActive()
    {
        $value = $this->get(self::NACTIVE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nActive' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNActive()
    {
        return $this->get(self::NACTIVE) !== null;
    }
}
}