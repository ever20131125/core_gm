<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IdolInfo message
 */
class IdolInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ANCHORID = 1;
    const LIKE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ANCHORID => array(
            'name' => 'anchorid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LIKE => array(
            'name' => 'like',
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
        $this->values[self::ANCHORID] = null;
        $this->values[self::LIKE] = null;
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
     * Sets value of 'anchorid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAnchorid($value)
    {
        return $this->set(self::ANCHORID, $value);
    }

    /**
     * Returns value of 'anchorid' property
     *
     * @return string
     */
    public function getAnchorid()
    {
        $value = $this->get(self::ANCHORID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'anchorid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAnchorid()
    {
        return $this->get(self::ANCHORID) !== null;
    }

    /**
     * Sets value of 'like' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLike($value)
    {
        return $this->set(self::LIKE, $value);
    }

    /**
     * Returns value of 'like' property
     *
     * @return integer
     */
    public function getLike()
    {
        $value = $this->get(self::LIKE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'like' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLike()
    {
        return $this->get(self::LIKE) !== null;
    }
}
}