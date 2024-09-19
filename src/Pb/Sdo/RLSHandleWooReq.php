<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSHandleWooReq message
 */
class RLSHandleWooReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NWOOROLEID = 2;
    const BAGREE = 3;
    const SCENE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NWOOROLEID => array(
            'name' => 'nWooRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BAGREE => array(
            'name' => 'bAgree',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NWOOROLEID] = null;
        $this->values[self::BAGREE] = null;
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
     * Sets value of 'nWooRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNWooRoleID($value)
    {
        return $this->set(self::NWOOROLEID, $value);
    }

    /**
     * Returns value of 'nWooRoleID' property
     *
     * @return integer
     */
    public function getNWooRoleID()
    {
        $value = $this->get(self::NWOOROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nWooRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNWooRoleID()
    {
        return $this->get(self::NWOOROLEID) !== null;
    }

    /**
     * Sets value of 'bAgree' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBAgree($value)
    {
        return $this->set(self::BAGREE, $value);
    }

    /**
     * Returns value of 'bAgree' property
     *
     * @return boolean
     */
    public function getBAgree()
    {
        $value = $this->get(self::BAGREE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bAgree' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBAgree()
    {
        return $this->get(self::BAGREE) !== null;
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