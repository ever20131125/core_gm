<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBDeleteBoardItemReq message
 */
class PDBDeleteBoardItemReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NTHEME = 2;
    const OPERATEITEMTYPE = 3;
    const ARRITEMEXTRA = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTHEME => array(
            'name' => 'nTheme',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OPERATEITEMTYPE => array(
            'default' => \Xnhd\Core\Pb\Sdo\OperateItemType::enmOperateItemType_None,
            'name' => 'operateItemType',
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
        $this->values[self::NTHEME] = null;
        $this->values[self::OPERATEITEMTYPE] = self::$fields[self::OPERATEITEMTYPE]['default'];
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
     * Sets value of 'nTheme' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTheme($value)
    {
        return $this->set(self::NTHEME, $value);
    }

    /**
     * Returns value of 'nTheme' property
     *
     * @return integer
     */
    public function getNTheme()
    {
        $value = $this->get(self::NTHEME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTheme' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTheme()
    {
        return $this->get(self::NTHEME) !== null;
    }

    /**
     * Sets value of 'operateItemType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOperateItemType($value)
    {
        return $this->set(self::OPERATEITEMTYPE, $value);
    }

    /**
     * Returns value of 'operateItemType' property
     *
     * @return integer
     */
    public function getOperateItemType()
    {
        $value = $this->get(self::OPERATEITEMTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'operateItemType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOperateItemType()
    {
        return $this->get(self::OPERATEITEMTYPE) !== null;
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