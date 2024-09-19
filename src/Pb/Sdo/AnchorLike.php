<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * AnchorLike message
 */
class AnchorLike extends \ProtobufMessage
{
    /* Field index constants */
    const ANCHORID = 1;
    const TOTALLIKE = 2;
    const ARRFANS = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ANCHORID => array(
            'name' => 'anchorid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOTALLIKE => array(
            'name' => 'totalLike',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRFANS => array(
            'name' => 'arrFans',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\FansInfo'
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
        $this->values[self::TOTALLIKE] = null;
        $this->values[self::ARRFANS] = array();
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
     * Sets value of 'totalLike' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTotalLike($value)
    {
        return $this->set(self::TOTALLIKE, $value);
    }

    /**
     * Returns value of 'totalLike' property
     *
     * @return integer
     */
    public function getTotalLike()
    {
        $value = $this->get(self::TOTALLIKE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'totalLike' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTotalLike()
    {
        return $this->get(self::TOTALLIKE) !== null;
    }

    /**
     * Appends value to 'arrFans' list
     *
     * @param \Xnhd\Core\Pb\Sdo\FansInfo $value Value to append
     *
     * @return null
     */
    public function appendArrFans(\Xnhd\Core\Pb\Sdo\FansInfo $value)
    {
        return $this->append(self::ARRFANS, $value);
    }

    /**
     * Clears 'arrFans' list
     *
     * @return null
     */
    public function clearArrFans()
    {
        return $this->clear(self::ARRFANS);
    }

    /**
     * Returns 'arrFans' list
     *
     * @return \Xnhd\Core\Pb\Sdo\FansInfo[]
     */
    public function getArrFans()
    {
        return $this->get(self::ARRFANS);
    }

    /**
     * Returns true if 'arrFans' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrFans()
    {
        return count($this->get(self::ARRFANS)) !== 0;
    }

    /**
     * Returns 'arrFans' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrFansIterator()
    {
        return new \ArrayIterator($this->get(self::ARRFANS));
    }

    /**
     * Returns element from 'arrFans' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\FansInfo
     */
    public function getArrFansAt($offset)
    {
        return $this->get(self::ARRFANS, $offset);
    }

    /**
     * Returns count of 'arrFans' list
     *
     * @return int
     */
    public function getArrFansCount()
    {
        return $this->count(self::ARRFANS);
    }
}
}