<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGMOperateItemReq message
 */
class PDBGMOperateItemReq extends \ProtobufMessage
{
    /* Field index constants */
    const ARRMANAGE = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ARRMANAGE => array(
            'name' => 'arrManage',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ManageItem'
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
        $this->values[self::ARRMANAGE] = array();
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
     * Appends value to 'arrManage' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ManageItem $value Value to append
     *
     * @return null
     */
    public function appendArrManage(\Xnhd\Core\Pb\Sdo\ManageItem $value)
    {
        return $this->append(self::ARRMANAGE, $value);
    }

    /**
     * Clears 'arrManage' list
     *
     * @return null
     */
    public function clearArrManage()
    {
        return $this->clear(self::ARRMANAGE);
    }

    /**
     * Returns 'arrManage' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ManageItem[]
     */
    public function getArrManage()
    {
        return $this->get(self::ARRMANAGE);
    }

    /**
     * Returns true if 'arrManage' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrManage()
    {
        return count($this->get(self::ARRMANAGE)) !== 0;
    }

    /**
     * Returns 'arrManage' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrManageIterator()
    {
        return new \ArrayIterator($this->get(self::ARRMANAGE));
    }

    /**
     * Returns element from 'arrManage' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ManageItem
     */
    public function getArrManageAt($offset)
    {
        return $this->get(self::ARRMANAGE, $offset);
    }

    /**
     * Returns count of 'arrManage' list
     *
     * @return int
     */
    public function getArrManageCount()
    {
        return $this->count(self::ARRMANAGE);
    }
}
}