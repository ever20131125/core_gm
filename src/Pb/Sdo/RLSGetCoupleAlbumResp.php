<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSGetCoupleAlbumResp message
 */
class RLSGetCoupleAlbumResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRDAYTYPE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRDAYTYPE => array(
            'name' => 'arrDayType',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\AlbumDayInfo'
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
        $this->values[self::ARRDAYTYPE] = array();
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
     * Appends value to 'arrDayType' list
     *
     * @param \Xnhd\Core\Pb\Sdo\AlbumDayInfo $value Value to append
     *
     * @return null
     */
    public function appendArrDayType(\Xnhd\Core\Pb\Sdo\AlbumDayInfo $value)
    {
        return $this->append(self::ARRDAYTYPE, $value);
    }

    /**
     * Clears 'arrDayType' list
     *
     * @return null
     */
    public function clearArrDayType()
    {
        return $this->clear(self::ARRDAYTYPE);
    }

    /**
     * Returns 'arrDayType' list
     *
     * @return \Xnhd\Core\Pb\Sdo\AlbumDayInfo[]
     */
    public function getArrDayType()
    {
        return $this->get(self::ARRDAYTYPE);
    }

    /**
     * Returns true if 'arrDayType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrDayType()
    {
        return count($this->get(self::ARRDAYTYPE)) !== 0;
    }

    /**
     * Returns 'arrDayType' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrDayTypeIterator()
    {
        return new \ArrayIterator($this->get(self::ARRDAYTYPE));
    }

    /**
     * Returns element from 'arrDayType' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\AlbumDayInfo
     */
    public function getArrDayTypeAt($offset)
    {
        return $this->get(self::ARRDAYTYPE, $offset);
    }

    /**
     * Returns count of 'arrDayType' list
     *
     * @return int
     */
    public function getArrDayTypeCount()
    {
        return $this->count(self::ARRDAYTYPE);
    }
}
}