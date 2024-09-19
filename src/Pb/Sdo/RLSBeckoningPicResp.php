<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSBeckoningPicResp message
 */
class RLSBeckoningPicResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const ARRPICINFOS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::ARRPICINFOS => array(
            'name' => 'arrPicInfos',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\RoleBeckoningPic'
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
        $this->values[self::ARRPICINFOS] = array();
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
     * Appends value to 'arrPicInfos' list
     *
     * @param \Xnhd\Core\Pb\Sdo\RoleBeckoningPic $value Value to append
     *
     * @return null
     */
    public function appendArrPicInfos(\Xnhd\Core\Pb\Sdo\RoleBeckoningPic $value)
    {
        return $this->append(self::ARRPICINFOS, $value);
    }

    /**
     * Clears 'arrPicInfos' list
     *
     * @return null
     */
    public function clearArrPicInfos()
    {
        return $this->clear(self::ARRPICINFOS);
    }

    /**
     * Returns 'arrPicInfos' list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleBeckoningPic[]
     */
    public function getArrPicInfos()
    {
        return $this->get(self::ARRPICINFOS);
    }

    /**
     * Returns true if 'arrPicInfos' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrPicInfos()
    {
        return count($this->get(self::ARRPICINFOS)) !== 0;
    }

    /**
     * Returns 'arrPicInfos' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrPicInfosIterator()
    {
        return new \ArrayIterator($this->get(self::ARRPICINFOS));
    }

    /**
     * Returns element from 'arrPicInfos' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\RoleBeckoningPic
     */
    public function getArrPicInfosAt($offset)
    {
        return $this->get(self::ARRPICINFOS, $offset);
    }

    /**
     * Returns count of 'arrPicInfos' list
     *
     * @return int
     */
    public function getArrPicInfosCount()
    {
        return $this->count(self::ARRPICINFOS);
    }
}
}