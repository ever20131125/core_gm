<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * FeteRankData message
 */
class FeteRankData extends \ProtobufMessage
{
    /* Field index constants */
    const RANKDATA = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RANKDATA => array(
            'name' => 'rankdata',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\FetePlayerInfo'
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
        $this->values[self::RANKDATA] = array();
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
     * Appends value to 'rankdata' list
     *
     * @param \Xnhd\Core\Pb\Sdo\FetePlayerInfo $value Value to append
     *
     * @return null
     */
    public function appendRankdata(\Xnhd\Core\Pb\Sdo\FetePlayerInfo $value)
    {
        return $this->append(self::RANKDATA, $value);
    }

    /**
     * Clears 'rankdata' list
     *
     * @return null
     */
    public function clearRankdata()
    {
        return $this->clear(self::RANKDATA);
    }

    /**
     * Returns 'rankdata' list
     *
     * @return \Xnhd\Core\Pb\Sdo\FetePlayerInfo[]
     */
    public function getRankdata()
    {
        return $this->get(self::RANKDATA);
    }

    /**
     * Returns true if 'rankdata' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRankdata()
    {
        return count($this->get(self::RANKDATA)) !== 0;
    }

    /**
     * Returns 'rankdata' iterator
     *
     * @return \ArrayIterator
     */
    public function getRankdataIterator()
    {
        return new \ArrayIterator($this->get(self::RANKDATA));
    }

    /**
     * Returns element from 'rankdata' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\FetePlayerInfo
     */
    public function getRankdataAt($offset)
    {
        return $this->get(self::RANKDATA, $offset);
    }

    /**
     * Returns count of 'rankdata' list
     *
     * @return int
     */
    public function getRankdataCount()
    {
        return $this->count(self::RANKDATA);
    }
}
}