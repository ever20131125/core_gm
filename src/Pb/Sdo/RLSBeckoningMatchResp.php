<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSBeckoningMatchResp message
 */
class RLSBeckoningMatchResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRRECOMMENDLIST = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRRECOMMENDLIST => array(
            'name' => 'arrRecommendList',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleBeckoningInfo'
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
        $this->values[self::ARRRECOMMENDLIST] = array();
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
     * Appends value to 'arrRecommendList' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleBeckoningInfo $value Value to append
     *
     * @return null
     */
    public function appendArrRecommendList(\Xnhd\Core\Pb\Sdo\RoleBeckoningInfo $value)
    {
        return $this->append(self::ARRRECOMMENDLIST, $value);
    }

    /**
     * Clears 'arrRecommendList' list
     *
     * @return null
     */
    public function clearArrRecommendList()
    {
        return $this->clear(self::ARRRECOMMENDLIST);
    }

    /**
     * Returns 'arrRecommendList' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleBeckoningInfo[]
     */
    public function getArrRecommendList()
    {
        return $this->get(self::ARRRECOMMENDLIST);
    }

    /**
     * Returns true if 'arrRecommendList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrRecommendList()
    {
        return count($this->get(self::ARRRECOMMENDLIST)) !== 0;
    }

    /**
     * Returns 'arrRecommendList' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrRecommendListIterator()
    {
        return new \ArrayIterator($this->get(self::ARRRECOMMENDLIST));
    }

    /**
     * Returns element from 'arrRecommendList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleBeckoningInfo
     */
    public function getArrRecommendListAt($offset)
    {
        return $this->get(self::ARRRECOMMENDLIST, $offset);
    }

    /**
     * Returns count of 'arrRecommendList' list
     *
     * @return int
     */
    public function getArrRecommendListCount()
    {
        return $this->count(self::ARRRECOMMENDLIST);
    }
}
}