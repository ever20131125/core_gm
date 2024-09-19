<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * InstanceRoleInfo message
 */
class InstanceRoleInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const STROLEINFO = 2;
    const STPOSINFO = 3;
    const ACSTATE = 4;
    const ARRACTIONPARAM = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STROLEINFO => array(
            'name' => 'stRoleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleInfo'
        ),
        self::STPOSINFO => array(
            'name' => 'stPosInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePosInfo'
        ),
        self::ACSTATE => array(
            'default' => \Xnhd\Core\Pb\Sdo\ActionState::enmActionState_Normal,
            'name' => 'acState',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRACTIONPARAM => array(
            'name' => 'arrActionParam',
            'repeated' => true,
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
        $this->values[self::ROLEID] = null;
        $this->values[self::STROLEINFO] = null;
        $this->values[self::STPOSINFO] = null;
        $this->values[self::ACSTATE] = self::$fields[self::ACSTATE]['default'];
        $this->values[self::ARRACTIONPARAM] = array();
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
     * Sets value of 'roleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoleID($value)
    {
        return $this->set(self::ROLEID, $value);
    }

    /**
     * Returns value of 'roleID' property
     *
     * @return integer
     */
    public function getRoleID()
    {
        $value = $this->get(self::ROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoleID()
    {
        return $this->get(self::ROLEID) !== null;
    }

    /**
     * Sets value of 'stRoleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleInfo $value Property value
     *
     * @return null
     */
    public function setStRoleInfo(\Xnhd\Core\Pb\Sdo\RoleInfo $value=null)
    {
        return $this->set(self::STROLEINFO, $value);
    }

    /**
     * Returns value of 'stRoleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleInfo
     */
    public function getStRoleInfo()
    {
        return $this->get(self::STROLEINFO);
    }

    /**
     * Returns true if 'stRoleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStRoleInfo()
    {
        return $this->get(self::STROLEINFO) !== null;
    }

    /**
     * Sets value of 'stPosInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePosInfo $value Property value
     *
     * @return null
     */
    public function setStPosInfo(\Xnhd\Core\Pb\Sdo\RolePosInfo $value=null)
    {
        return $this->set(self::STPOSINFO, $value);
    }

    /**
     * Returns value of 'stPosInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePosInfo
     */
    public function getStPosInfo()
    {
        return $this->get(self::STPOSINFO);
    }

    /**
     * Returns true if 'stPosInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStPosInfo()
    {
        return $this->get(self::STPOSINFO) !== null;
    }

    /**
     * Sets value of 'acState' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAcState($value)
    {
        return $this->set(self::ACSTATE, $value);
    }

    /**
     * Returns value of 'acState' property
     *
     * @return integer
     */
    public function getAcState()
    {
        $value = $this->get(self::ACSTATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'acState' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAcState()
    {
        return $this->get(self::ACSTATE) !== null;
    }

    /**
     * Appends value to 'arrActionParam' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrActionParam($value)
    {
        return $this->append(self::ARRACTIONPARAM, $value);
    }

    /**
     * Clears 'arrActionParam' list
     *
     * @return null
     */
    public function clearArrActionParam()
    {
        return $this->clear(self::ARRACTIONPARAM);
    }

    /**
     * Returns 'arrActionParam' list
     *
     * @return integer[]
     */
    public function getArrActionParam()
    {
        return $this->get(self::ARRACTIONPARAM);
    }

    /**
     * Returns true if 'arrActionParam' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrActionParam()
    {
        return count($this->get(self::ARRACTIONPARAM)) !== 0;
    }

    /**
     * Returns 'arrActionParam' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrActionParamIterator()
    {
        return new \ArrayIterator($this->get(self::ARRACTIONPARAM));
    }

    /**
     * Returns element from 'arrActionParam' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrActionParamAt($offset)
    {
        return $this->get(self::ARRACTIONPARAM, $offset);
    }

    /**
     * Returns count of 'arrActionParam' list
     *
     * @return int
     */
    public function getArrActionParamCount()
    {
        return $this->count(self::ARRACTIONPARAM);
    }
}
}