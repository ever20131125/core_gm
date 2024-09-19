<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * SceneInfo message
 */
class SceneInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NSCENEID = 2;
    const BISUNLOCK = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NSCENEID => array(
            'name' => 'nSceneID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BISUNLOCK => array(
            'name' => 'bIsUnlock',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::NSCENEID] = null;
        $this->values[self::BISUNLOCK] = null;
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
     * Sets value of 'nSceneID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSceneID($value)
    {
        return $this->set(self::NSCENEID, $value);
    }

    /**
     * Returns value of 'nSceneID' property
     *
     * @return integer
     */
    public function getNSceneID()
    {
        $value = $this->get(self::NSCENEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSceneID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSceneID()
    {
        return $this->get(self::NSCENEID) !== null;
    }

    /**
     * Sets value of 'bIsUnlock' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBIsUnlock($value)
    {
        return $this->set(self::BISUNLOCK, $value);
    }

    /**
     * Returns value of 'bIsUnlock' property
     *
     * @return boolean
     */
    public function getBIsUnlock()
    {
        $value = $this->get(self::BISUNLOCK);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bIsUnlock' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBIsUnlock()
    {
        return $this->get(self::BISUNLOCK) !== null;
    }
}
}