<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBGetRolePicResp message
 */
class PDBGetRolePicResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const ARRHEADPIC = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_SIGNED_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRHEADPIC => array(
            'name' => 'arrHeadPic',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\PicInfo'
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
        $this->values[self::NROLEID] = null;
        $this->values[self::ARRHEADPIC] = array();
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
     * Sets value of 'nRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRoleID($value)
    {
        return $this->set(self::NROLEID, $value);
    }

    /**
     * Returns value of 'nRoleID' property
     *
     * @return integer
     */
    public function getNRoleID()
    {
        $value = $this->get(self::NROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRoleID()
    {
        return $this->get(self::NROLEID) !== null;
    }

    /**
     * Appends value to 'arrHeadPic' list
     *
     * @param \Xnhd\Core\Pb\Sdo\PicInfo $value Value to append
     *
     * @return null
     */
    public function appendArrHeadPic(\Xnhd\Core\Pb\Sdo\PicInfo $value)
    {
        return $this->append(self::ARRHEADPIC, $value);
    }

    /**
     * Clears 'arrHeadPic' list
     *
     * @return null
     */
    public function clearArrHeadPic()
    {
        return $this->clear(self::ARRHEADPIC);
    }

    /**
     * Returns 'arrHeadPic' list
     *
     * @return \Xnhd\Core\Pb\Sdo\PicInfo[]
     */
    public function getArrHeadPic()
    {
        return $this->get(self::ARRHEADPIC);
    }

    /**
     * Returns true if 'arrHeadPic' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrHeadPic()
    {
        return count($this->get(self::ARRHEADPIC)) !== 0;
    }

    /**
     * Returns 'arrHeadPic' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrHeadPicIterator()
    {
        return new \ArrayIterator($this->get(self::ARRHEADPIC));
    }

    /**
     * Returns element from 'arrHeadPic' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\PicInfo
     */
    public function getArrHeadPicAt($offset)
    {
        return $this->get(self::ARRHEADPIC, $offset);
    }

    /**
     * Returns count of 'arrHeadPic' list
     *
     * @return int
     */
    public function getArrHeadPicCount()
    {
        return $this->count(self::ARRHEADPIC);
    }
}
}