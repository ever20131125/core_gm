<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGetRedBagDetailResp message
 */
class PDBGetRedBagDetailResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const STREDBAGINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::STREDBAGINFO => array(
            'name' => 'stRedBagInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RedBagDetail'
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
        $this->values[self::STREDBAGINFO] = null;
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
     * Sets value of 'stRedBagInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RedBagDetail $value Property value
     *
     * @return null
     */
    public function setStRedBagInfo(\Xnhd\Core\Pb\Sdo\RedBagDetail $value=null)
    {
        return $this->set(self::STREDBAGINFO, $value);
    }

    /**
     * Returns value of 'stRedBagInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RedBagDetail
     */
    public function getStRedBagInfo()
    {
        return $this->get(self::STREDBAGINFO);
    }

    /**
     * Returns true if 'stRedBagInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRedBagInfo()
    {
        return $this->get(self::STREDBAGINFO) !== null;
    }
}
}