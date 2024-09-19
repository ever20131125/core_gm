<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBRecoverItemReq message
 */
class IDBRecoverItemReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const ARRITEMEXTRA = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRITEMEXTRA => array(
            'name' => 'arrItemExtra',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemExtra'
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
        $this->values[self::ARRITEMEXTRA] = array();
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
     * Appends value to 'arrItemExtra' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemExtra $value Value to append
     *
     * @return null
     */
    public function appendArrItemExtra(\Xnhd\Core\Pb\Sdo\ItemExtra $value)
    {
        return $this->append(self::ARRITEMEXTRA, $value);
    }

    /**
     * Clears 'arrItemExtra' list
     *
     * @return null
     */
    public function clearArrItemExtra()
    {
        return $this->clear(self::ARRITEMEXTRA);
    }

    /**
     * Returns 'arrItemExtra' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemExtra[]
     */
    public function getArrItemExtra()
    {
        return $this->get(self::ARRITEMEXTRA);
    }

    /**
     * Returns true if 'arrItemExtra' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItemExtra()
    {
        return count($this->get(self::ARRITEMEXTRA)) !== 0;
    }

    /**
     * Returns 'arrItemExtra' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemExtraIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEMEXTRA));
    }

    /**
     * Returns element from 'arrItemExtra' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemExtra
     */
    public function getArrItemExtraAt($offset)
    {
        return $this->get(self::ARRITEMEXTRA, $offset);
    }

    /**
     * Returns count of 'arrItemExtra' list
     *
     * @return int
     */
    public function getArrItemExtraCount()
    {
        return $this->count(self::ARRITEMEXTRA);
    }
}
}