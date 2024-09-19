<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGMSendItemReq message
 */
class PDBGMSendItemReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const ARRITEMS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRITEMS => array(
            'name' => 'arrItems',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
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
        $this->values[self::ARRITEMS] = array();
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
     * Appends value to 'arrItems' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendArrItems(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::ARRITEMS, $value);
    }

    /**
     * Clears 'arrItems' list
     *
     * @return null
     */
    public function clearArrItems()
    {
        return $this->clear(self::ARRITEMS);
    }

    /**
     * Returns 'arrItems' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getArrItems()
    {
        return $this->get(self::ARRITEMS);
    }

    /**
     * Returns true if 'arrItems' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItems()
    {
        return count($this->get(self::ARRITEMS)) !== 0;
    }

    /**
     * Returns 'arrItems' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemsIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEMS));
    }

    /**
     * Returns element from 'arrItems' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getArrItemsAt($offset)
    {
        return $this->get(self::ARRITEMS, $offset);
    }

    /**
     * Returns count of 'arrItems' list
     *
     * @return int
     */
    public function getArrItemsCount()
    {
        return $this->count(self::ARRITEMS);
    }
}
}