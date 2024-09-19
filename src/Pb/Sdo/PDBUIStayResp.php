<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBUIStayResp message
 */
class PDBUIStayResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const UI = 3;
    const NTIME = 4;

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
        self::UI => array(
            'default' => \Xnhd\Core\Pb\Sdo\UIType::enmUIType_None,
            'name' => 'ui',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTIME => array(
            'name' => 'nTime',
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
        $this->values[self::UI] = self::$fields[self::UI]['default'];
        $this->values[self::NTIME] = null;
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
     * Sets value of 'ui' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUi($value)
    {
        return $this->set(self::UI, $value);
    }

    /**
     * Returns value of 'ui' property
     *
     * @return integer
     */
    public function getUi()
    {
        $value = $this->get(self::UI);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ui' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUi()
    {
        return $this->get(self::UI) !== null;
    }

    /**
     * Sets value of 'nTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTime($value)
    {
        return $this->set(self::NTIME, $value);
    }

    /**
     * Returns value of 'nTime' property
     *
     * @return integer
     */
    public function getNTime()
    {
        $value = $this->get(self::NTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTime()
    {
        return $this->get(self::NTIME) !== null;
    }
}
}