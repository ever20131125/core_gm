<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBTransferReq message
 */
class PDBTransferReq extends \ProtobufMessage
{
    /* Field index constants */
    const ARRTRANSFERINFO = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ARRTRANSFERINFO => array(
            'name' => 'arrTransferInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\TransferInfo'
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
        $this->values[self::ARRTRANSFERINFO] = array();
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
     * Appends value to 'arrTransferInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\TransferInfo $value Value to append
     *
     * @return null
     */
    public function appendArrTransferInfo(\Xnhd\Core\Pb\Sdo\TransferInfo $value)
    {
        return $this->append(self::ARRTRANSFERINFO, $value);
    }

    /**
     * Clears 'arrTransferInfo' list
     *
     * @return null
     */
    public function clearArrTransferInfo()
    {
        return $this->clear(self::ARRTRANSFERINFO);
    }

    /**
     * Returns 'arrTransferInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\TransferInfo[]
     */
    public function getArrTransferInfo()
    {
        return $this->get(self::ARRTRANSFERINFO);
    }

    /**
     * Returns true if 'arrTransferInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrTransferInfo()
    {
        return count($this->get(self::ARRTRANSFERINFO)) !== 0;
    }

    /**
     * Returns 'arrTransferInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrTransferInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRTRANSFERINFO));
    }

    /**
     * Returns element from 'arrTransferInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\TransferInfo
     */
    public function getArrTransferInfoAt($offset)
    {
        return $this->get(self::ARRTRANSFERINFO, $offset);
    }

    /**
     * Returns count of 'arrTransferInfo' list
     *
     * @return int
     */
    public function getArrTransferInfoCount()
    {
        return $this->count(self::ARRTRANSFERINFO);
    }
}
}