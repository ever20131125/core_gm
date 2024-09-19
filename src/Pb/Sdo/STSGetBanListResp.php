<?php
/**
 * Auto generated from stateserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * STSGetBanListResp message
 */
class STSGetBanListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const STBANINFO = 2;
    const NTOTALCOUNT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::STBANINFO => array(
            'name' => 'stBanInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\BanInfo'
        ),
        self::NTOTALCOUNT => array(
            'name' => 'nTotalCount',
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::STBANINFO] = array();
        $this->values[self::NTOTALCOUNT] = null;
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
     * Appends value to 'stBanInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\BanInfo $value Value to append
     *
     * @return null
     */
    public function appendStBanInfo(\Xnhd\Core\Pb\Sdo\BanInfo $value)
    {
        return $this->append(self::STBANINFO, $value);
    }

    /**
     * Clears 'stBanInfo' list
     *
     * @return null
     */
    public function clearStBanInfo()
    {
        return $this->clear(self::STBANINFO);
    }

    /**
     * Returns 'stBanInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\BanInfo[]
     */
    public function getStBanInfo()
    {
        return $this->get(self::STBANINFO);
    }

    /**
     * Returns true if 'stBanInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStBanInfo()
    {
        return count($this->get(self::STBANINFO)) !== 0;
    }

    /**
     * Returns 'stBanInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getStBanInfoIterator()
    {
        return new \ArrayIterator($this->get(self::STBANINFO));
    }

    /**
     * Returns element from 'stBanInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\BanInfo
     */
    public function getStBanInfoAt($offset)
    {
        return $this->get(self::STBANINFO, $offset);
    }

    /**
     * Returns count of 'stBanInfo' list
     *
     * @return int
     */
    public function getStBanInfoCount()
    {
        return $this->count(self::STBANINFO);
    }

    /**
     * Sets value of 'nTotalCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTotalCount($value)
    {
        return $this->set(self::NTOTALCOUNT, $value);
    }

    /**
     * Returns value of 'nTotalCount' property
     *
     * @return integer
     */
    public function getNTotalCount()
    {
        $value = $this->get(self::NTOTALCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTotalCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTotalCount()
    {
        return $this->get(self::NTOTALCOUNT) !== null;
    }
}
}