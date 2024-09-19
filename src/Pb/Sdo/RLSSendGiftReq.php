<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSSendGiftReq message
 */
class RLSSendGiftReq extends \ProtobufMessage
{
    /* Field index constants */
    const ROLEID = 1;
    const TARGETID = 2;
    const ARRGIFTLIST = 3;
    const SCENE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ROLEID => array(
            'name' => 'roleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TARGETID => array(
            'name' => 'targetID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRGIFTLIST => array(
            'name' => 'arrGiftList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::SCENE => array(
            'default' => \Xnhd\Core\Pb\Sdo\InteractScene::enmInteractScene_None,
            'name' => 'scene',
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
        $this->values[self::ROLEID] = null;
        $this->values[self::TARGETID] = null;
        $this->values[self::ARRGIFTLIST] = array();
        $this->values[self::SCENE] = self::$fields[self::SCENE]['default'];
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
     * Sets value of 'targetID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTargetID($value)
    {
        return $this->set(self::TARGETID, $value);
    }

    /**
     * Returns value of 'targetID' property
     *
     * @return integer
     */
    public function getTargetID()
    {
        $value = $this->get(self::TARGETID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'targetID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTargetID()
    {
        return $this->get(self::TARGETID) !== null;
    }

    /**
     * Appends value to 'arrGiftList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendArrGiftList(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::ARRGIFTLIST, $value);
    }

    /**
     * Clears 'arrGiftList' list
     *
     * @return null
     */
    public function clearArrGiftList()
    {
        return $this->clear(self::ARRGIFTLIST);
    }

    /**
     * Returns 'arrGiftList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getArrGiftList()
    {
        return $this->get(self::ARRGIFTLIST);
    }

    /**
     * Returns true if 'arrGiftList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrGiftList()
    {
        return count($this->get(self::ARRGIFTLIST)) !== 0;
    }

    /**
     * Returns 'arrGiftList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrGiftListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRGIFTLIST));
    }

    /**
     * Returns element from 'arrGiftList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getArrGiftListAt($offset)
    {
        return $this->get(self::ARRGIFTLIST, $offset);
    }

    /**
     * Returns count of 'arrGiftList' list
     *
     * @return int
     */
    public function getArrGiftListCount()
    {
        return $this->count(self::ARRGIFTLIST);
    }

    /**
     * Sets value of 'scene' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setScene($value)
    {
        return $this->set(self::SCENE, $value);
    }

    /**
     * Returns value of 'scene' property
     *
     * @return integer
     */
    public function getScene()
    {
        $value = $this->get(self::SCENE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'scene' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasScene()
    {
        return $this->get(self::SCENE) !== null;
    }
}
}