<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGetWorldPrizeResp message
 */
class PDBGetWorldPrizeResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRPRIZEINFO = 2;
    const ARRBUILDINFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRPRIZEINFO => array(
            'name' => 'arrPrizeInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\WorldPrize'
        ),
        self::ARRBUILDINFO => array(
            'name' => 'arrBuildInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\BuildInfo'
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::ARRPRIZEINFO] = array();
        $this->values[self::ARRBUILDINFO] = array();
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
     * Sets value of 'nErrorCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNErrorCode($value)
    {
        return $this->set(self::NERRORCODE, $value);
    }

    /**
     * Returns value of 'nErrorCode' property
     *
     * @return integer
     */
    public function getNErrorCode()
    {
        $value = $this->get(self::NERRORCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nErrorCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNErrorCode()
    {
        return $this->get(self::NERRORCODE) !== null;
    }

    /**
     * Appends value to 'arrPrizeInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\WorldPrize $value Value to append
     *
     * @return null
     */
    public function appendArrPrizeInfo(\Xnhd\Core\Pb\Sdo\WorldPrize $value)
    {
        return $this->append(self::ARRPRIZEINFO, $value);
    }

    /**
     * Clears 'arrPrizeInfo' list
     *
     * @return null
     */
    public function clearArrPrizeInfo()
    {
        return $this->clear(self::ARRPRIZEINFO);
    }

    /**
     * Returns 'arrPrizeInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\WorldPrize[]
     */
    public function getArrPrizeInfo()
    {
        return $this->get(self::ARRPRIZEINFO);
    }

    /**
     * Returns true if 'arrPrizeInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPrizeInfo()
    {
        return count($this->get(self::ARRPRIZEINFO)) !== 0;
    }

    /**
     * Returns 'arrPrizeInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPrizeInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPRIZEINFO));
    }

    /**
     * Returns element from 'arrPrizeInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\WorldPrize
     */
    public function getArrPrizeInfoAt($offset)
    {
        return $this->get(self::ARRPRIZEINFO, $offset);
    }

    /**
     * Returns count of 'arrPrizeInfo' list
     *
     * @return int
     */
    public function getArrPrizeInfoCount()
    {
        return $this->count(self::ARRPRIZEINFO);
    }

    /**
     * Appends value to 'arrBuildInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\BuildInfo $value Value to append
     *
     * @return null
     */
    public function appendArrBuildInfo(\Xnhd\Core\Pb\Sdo\BuildInfo $value)
    {
        return $this->append(self::ARRBUILDINFO, $value);
    }

    /**
     * Clears 'arrBuildInfo' list
     *
     * @return null
     */
    public function clearArrBuildInfo()
    {
        return $this->clear(self::ARRBUILDINFO);
    }

    /**
     * Returns 'arrBuildInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\BuildInfo[]
     */
    public function getArrBuildInfo()
    {
        return $this->get(self::ARRBUILDINFO);
    }

    /**
     * Returns true if 'arrBuildInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrBuildInfo()
    {
        return count($this->get(self::ARRBUILDINFO)) !== 0;
    }

    /**
     * Returns 'arrBuildInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrBuildInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRBUILDINFO));
    }

    /**
     * Returns element from 'arrBuildInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\BuildInfo
     */
    public function getArrBuildInfoAt($offset)
    {
        return $this->get(self::ARRBUILDINFO, $offset);
    }

    /**
     * Returns count of 'arrBuildInfo' list
     *
     * @return int
     */
    public function getArrBuildInfoCount()
    {
        return $this->count(self::ARRBUILDINFO);
    }
}
}