<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGetFaceRankResp message
 */
class PDBGetFaceRankResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NFACECOUNT = 2;
    const ARRFACEINFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NFACECOUNT => array(
            'name' => 'nFaceCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRFACEINFO => array(
            'name' => 'arrFaceInfo',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\FaceRank'
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
        $this->values[self::NFACECOUNT] = null;
        $this->values[self::ARRFACEINFO] = array();
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
     * Sets value of 'nFaceCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFaceCount($value)
    {
        return $this->set(self::NFACECOUNT, $value);
    }

    /**
     * Returns value of 'nFaceCount' property
     *
     * @return integer
     */
    public function getNFaceCount()
    {
        $value = $this->get(self::NFACECOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFaceCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFaceCount()
    {
        return $this->get(self::NFACECOUNT) !== null;
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
}
}