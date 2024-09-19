<?php
/**
 * Auto generated from actserver.proto at 2023-02-13 12:39:18
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * ACTGetRecommendateResp message
 */
class ACTGetRecommendateResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRRECOMMENDATEINFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRRECOMMENDATEINFO => array(
            'name' => 'arrRecommendateInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RecommendateInfo'
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
        $this->values[self::ARRRECOMMENDATEINFO] = array();
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
     * Appends value to 'arrRecommendateInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RecommendateInfo $value Value to append
     *
     * @return null
     */
    public function appendArrRecommendateInfo(\Xnhd\Core\Pb\Sdo\RecommendateInfo $value)
    {
        return $this->append(self::ARRRECOMMENDATEINFO, $value);
    }

    /**
     * Clears 'arrRecommendateInfo' list
     *
     * @return null
     */
    public function clearArrRecommendateInfo()
    {
        return $this->clear(self::ARRRECOMMENDATEINFO);
    }

    /**
     * Returns 'arrRecommendateInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RecommendateInfo[]
     */
    public function getArrRecommendateInfo()
    {
        return $this->get(self::ARRRECOMMENDATEINFO);
    }

    /**
     * Returns true if 'arrRecommendateInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRecommendateInfo()
    {
        return count($this->get(self::ARRRECOMMENDATEINFO)) !== 0;
    }

    /**
     * Returns 'arrRecommendateInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRecommendateInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRRECOMMENDATEINFO));
    }

    /**
     * Returns element from 'arrRecommendateInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RecommendateInfo
     */
    public function getArrRecommendateInfoAt($offset)
    {
        return $this->get(self::ARRRECOMMENDATEINFO, $offset);
    }

    /**
     * Returns count of 'arrRecommendateInfo' list
     *
     * @return int
     */
    public function getArrRecommendateInfoCount()
    {
        return $this->count(self::ARRRECOMMENDATEINFO);
    }
}
}