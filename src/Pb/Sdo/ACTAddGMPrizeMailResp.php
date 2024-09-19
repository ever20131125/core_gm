<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTAddGMPrizeMailResp message
 */
class ACTAddGMPrizeMailResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const STMAIL = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::STMAIL => array(
            'name' => 'stMail',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\GMPrizeMail'
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
        $this->values[self::STMAIL] = null;
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
     * Sets value of 'stMail' property
     *
     * @param \Xnhd\Core\Pb\Sdo\GMPrizeMail $value Property value
     *
     * @return null
     */
    public function setStMail(\Xnhd\Core\Pb\Sdo\GMPrizeMail $value=null)
    {
        return $this->set(self::STMAIL, $value);
    }

    /**
     * Returns value of 'stMail' property
     *
     * @return \Xnhd\Core\Pb\Sdo\GMPrizeMail
     */
    public function getStMail()
    {
        return $this->get(self::STMAIL);
    }

    /**
     * Returns true if 'stMail' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStMail()
    {
        return $this->get(self::STMAIL) !== null;
    }
}
}