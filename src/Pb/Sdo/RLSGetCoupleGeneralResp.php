<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSGetCoupleGeneralResp message
 */
class RLSGetCoupleGeneralResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const INFOS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::INFOS => array(
            'name' => 'infos',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\CoupleGeneral'
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
        $this->values[self::INFOS] = array();
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
     * Appends value to 'infos' list
     *
     * @param \Xnhd\Core\Pb\Sdo\CoupleGeneral $value Value to append
     *
     * @return null
     */
    public function appendInfos(\Xnhd\Core\Pb\Sdo\CoupleGeneral $value)
    {
        return $this->append(self::INFOS, $value);
    }

    /**
     * Clears 'infos' list
     *
     * @return null
     */
    public function clearInfos()
    {
        return $this->clear(self::INFOS);
    }

    /**
     * Returns 'infos' list
     *
     * @return \Xnhd\Core\Pb\Sdo\CoupleGeneral[]
     */
    public function getInfos()
    {
        return $this->get(self::INFOS);
    }

    /**
     * Returns true if 'infos' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasInfos()
    {
        return count($this->get(self::INFOS)) !== 0;
    }

    /**
     * Returns 'infos' iterator
     *
     * @return \ArrayIterator
     */
    public function getInfosIterator()
    {
        return new \ArrayIterator($this->get(self::INFOS));
    }

    /**
     * Returns element from 'infos' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\CoupleGeneral
     */
    public function getInfosAt($offset)
    {
        return $this->get(self::INFOS, $offset);
    }

    /**
     * Returns count of 'infos' list
     *
     * @return int
     */
    public function getInfosCount()
    {
        return $this->count(self::INFOS);
    }
}
}