<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSWooReq message
 */
class RLSWooReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NWOOEDROLEID = 2;
    const NLETTERSTYLE = 3;
    const SZCONTENT = 4;
    const SCENE = 5;
    const NITEMID = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NWOOEDROLEID => array(
            'name' => 'nWooedRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLETTERSTYLE => array(
            'name' => 'nLetterStyle',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZCONTENT => array(
            'name' => 'szContent',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SCENE => array(
            'default' => \Xnhd\Core\Pb\Sdo\InteractScene::enmInteractScene_None,
            'name' => 'scene',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NITEMID => array(
            'name' => 'nItemID',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NWOOEDROLEID] = null;
        $this->values[self::NLETTERSTYLE] = null;
        $this->values[self::SZCONTENT] = null;
        $this->values[self::SCENE] = self::$fields[self::SCENE]['default'];
        $this->values[self::NITEMID] = array();
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
     * Sets value of 'nWooedRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNWooedRoleID($value)
    {
        return $this->set(self::NWOOEDROLEID, $value);
    }

    /**
     * Returns value of 'nWooedRoleID' property
     *
     * @return integer
     */
    public function getNWooedRoleID()
    {
        $value = $this->get(self::NWOOEDROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nWooedRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNWooedRoleID()
    {
        return $this->get(self::NWOOEDROLEID) !== null;
    }

    /**
     * Sets value of 'nLetterStyle' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLetterStyle($value)
    {
        return $this->set(self::NLETTERSTYLE, $value);
    }

    /**
     * Returns value of 'nLetterStyle' property
     *
     * @return integer
     */
    public function getNLetterStyle()
    {
        $value = $this->get(self::NLETTERSTYLE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLetterStyle' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLetterStyle()
    {
        return $this->get(self::NLETTERSTYLE) !== null;
    }

    /**
     * Sets value of 'szContent' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzContent($value)
    {
        return $this->set(self::SZCONTENT, $value);
    }

    /**
     * Returns value of 'szContent' property
     *
     * @return string
     */
    public function getSzContent()
    {
        $value = $this->get(self::SZCONTENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szContent' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzContent()
    {
        return $this->get(self::SZCONTENT) !== null;
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

    /**
     * Appends value to 'nItemID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendNItemID($value)
    {
        return $this->append(self::NITEMID, $value);
    }

    /**
     * Clears 'nItemID' list
     *
     * @return null
     */
    public function clearNItemID()
    {
        return $this->clear(self::NITEMID);
    }

    /**
     * Returns 'nItemID' list
     *
     * @return integer[]
     */
    public function getNItemID()
    {
        return $this->get(self::NITEMID);
    }

    /**
     * Returns true if 'nItemID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNItemID()
    {
        return count($this->get(self::NITEMID)) !== 0;
    }

    /**
     * Returns 'nItemID' iterator
     *
     * @return \ArrayIterator
     */
    public function getNItemIDIterator()
    {
        return new \ArrayIterator($this->get(self::NITEMID));
    }

    /**
     * Returns element from 'nItemID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getNItemIDAt($offset)
    {
        return $this->get(self::NITEMID, $offset);
    }

    /**
     * Returns count of 'nItemID' list
     *
     * @return int
     */
    public function getNItemIDCount()
    {
        return $this->count(self::NITEMID);
    }
}
}