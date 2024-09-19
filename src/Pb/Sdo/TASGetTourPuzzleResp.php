<?php
/**
 * Auto generated from taskserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TASGetTourPuzzleResp message
 */
class TASGetTourPuzzleResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const PUZZLEINFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::PUZZLEINFO => array(
            'name' => 'puzzleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\TourPuzzle'
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
        $this->values[self::PUZZLEINFO] = null;
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
     * Sets value of 'puzzleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\TourPuzzle $value Property value
     *
     * @return null
     */
    public function setPuzzleInfo(\Xnhd\Core\Pb\Sdo\TourPuzzle $value=null)
    {
        return $this->set(self::PUZZLEINFO, $value);
    }

    /**
     * Returns value of 'puzzleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\TourPuzzle
     */
    public function getPuzzleInfo()
    {
        return $this->get(self::PUZZLEINFO);
    }

    /**
     * Returns true if 'puzzleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPuzzleInfo()
    {
        return $this->get(self::PUZZLEINFO) !== null;
    }
}
}