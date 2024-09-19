<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleBeckoningPic message
 */
class RoleBeckoningPic extends \ProtobufMessage
{
    /* Field index constants */
    const STHEADPIC = 1;
    const NUSEDDAYS = 2;
    const NLIKEDCOUNT = 3;
    const NLIKEDPROB = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STHEADPIC => array(
            'name' => 'stHeadPic',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\PicInfo'
        ),
        self::NUSEDDAYS => array(
            'name' => 'nUsedDays',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLIKEDCOUNT => array(
            'name' => 'nLikedCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NLIKEDPROB => array(
            'name' => 'nLikedProb',
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
        $this->values[self::STHEADPIC] = null;
        $this->values[self::NUSEDDAYS] = null;
        $this->values[self::NLIKEDCOUNT] = null;
        $this->values[self::NLIKEDPROB] = null;
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
     * Sets value of 'stHeadPic' property
     *
     * @param \Xnhd\Core\Pb\Sdo\PicInfo $value Property value
     *
     * @return null
     */
    public function setStHeadPic(\Xnhd\Core\Pb\Sdo\PicInfo $value=null)
    {
        return $this->set(self::STHEADPIC, $value);
    }

    /**
     * Returns value of 'stHeadPic' property
     *
     * @return \Xnhd\Core\Pb\Sdo\PicInfo
     */
    public function getStHeadPic()
    {
        return $this->get(self::STHEADPIC);
    }

    /**
     * Returns true if 'stHeadPic' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStHeadPic()
    {
        return $this->get(self::STHEADPIC) !== null;
    }

    /**
     * Sets value of 'nUsedDays' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNUsedDays($value)
    {
        return $this->set(self::NUSEDDAYS, $value);
    }

    /**
     * Returns value of 'nUsedDays' property
     *
     * @return integer
     */
    public function getNUsedDays()
    {
        $value = $this->get(self::NUSEDDAYS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nUsedDays' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNUsedDays()
    {
        return $this->get(self::NUSEDDAYS) !== null;
    }

    /**
     * Sets value of 'nLikedCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLikedCount($value)
    {
        return $this->set(self::NLIKEDCOUNT, $value);
    }

    /**
     * Returns value of 'nLikedCount' property
     *
     * @return integer
     */
    public function getNLikedCount()
    {
        $value = $this->get(self::NLIKEDCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLikedCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLikedCount()
    {
        return $this->get(self::NLIKEDCOUNT) !== null;
    }

    /**
     * Sets value of 'nLikedProb' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLikedProb($value)
    {
        return $this->set(self::NLIKEDPROB, $value);
    }

    /**
     * Returns value of 'nLikedProb' property
     *
     * @return integer
     */
    public function getNLikedProb()
    {
        $value = $this->get(self::NLIKEDPROB);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLikedProb' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLikedProb()
    {
        return $this->get(self::NLIKEDPROB) !== null;
    }
}
}