<?php
/**
 * Auto generated from itemdbserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * IDBGMAddFaceRankReq message
 */
class IDBGMAddFaceRankReq extends \ProtobufMessage
{
    /* Field index constants */
    const ARRFACEINFO = 1;
    const NADD = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ARRFACEINFO => array(
            'name' => 'arrFaceInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\FaceRank'
        ),
        self::NADD => array(
            'default' => 1,
            'name' => 'nAdd',
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
        $this->values[self::ARRFACEINFO] = array();
        $this->values[self::NADD] = self::$fields[self::NADD]['default'];
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
     * Appends value to 'arrFaceInfo' list
     *
     * @param \Xnhd\Core\Pb\Sdo\FaceRank $value Value to append
     *
     * @return null
     */
    public function appendArrFaceInfo(\Xnhd\Core\Pb\Sdo\FaceRank $value)
    {
        return $this->append(self::ARRFACEINFO, $value);
    }

    /**
     * Clears 'arrFaceInfo' list
     *
     * @return null
     */
    public function clearArrFaceInfo()
    {
        return $this->clear(self::ARRFACEINFO);
    }

    /**
     * Returns 'arrFaceInfo' list
     *
     * @return \Xnhd\Core\Pb\Sdo\FaceRank[]
     */
    public function getArrFaceInfo()
    {
        return $this->get(self::ARRFACEINFO);
    }

    /**
     * Returns true if 'arrFaceInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrFaceInfo()
    {
        return count($this->get(self::ARRFACEINFO)) !== 0;
    }

    /**
     * Returns 'arrFaceInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrFaceInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ARRFACEINFO));
    }

    /**
     * Returns element from 'arrFaceInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\FaceRank
     */
    public function getArrFaceInfoAt($offset)
    {
        return $this->get(self::ARRFACEINFO, $offset);
    }

    /**
     * Returns count of 'arrFaceInfo' list
     *
     * @return int
     */
    public function getArrFaceInfoCount()
    {
        return $this->count(self::ARRFACEINFO);
    }

    /**
     * Sets value of 'nAdd' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNAdd($value)
    {
        return $this->set(self::NADD, $value);
    }

    /**
     * Returns value of 'nAdd' property
     *
     * @return integer
     */
    public function getNAdd()
    {
        $value = $this->get(self::NADD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nAdd' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNAdd()
    {
        return $this->get(self::NADD) !== null;
    }
}
}