<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBSendRedBagNoti message
 */
class PDBSendRedBagNoti extends \ProtobufMessage
{
    /* Field index constants */
    const STREDBAGDETAIL = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STREDBAGDETAIL => array(
            'name' => 'stRedBagDetail',
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
        $this->values[self::STREDBAGDETAIL] = null;
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
     * Sets value of 'stRedBagDetail' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RedBagDetail $value Property value
     *
     * @return null
     */
    public function setStRedBagDetail(\Xnhd\Core\Pb\Sdo\RedBagDetail $value=null)
    {
        return $this->set(self::STREDBAGDETAIL, $value);
    }

    /**
     * Returns value of 'stRedBagDetail' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RedBagDetail
     */
    public function getStRedBagDetail()
    {
        return $this->get(self::STREDBAGDETAIL);
    }

    /**
     * Returns true if 'stRedBagDetail' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRedBagDetail()
    {
        return $this->get(self::STREDBAGDETAIL) !== null;
    }
}
}