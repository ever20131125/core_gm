<?php
/**
 * Auto generated from recordserver.proto at 2023-02-13 12:39:20
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RESQualifyInfoResp message
 */
class RESQualifyInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const STQUALIFYINFO = 3;
    const STQUALIFYROLE = 4;
    const SZPIC = 5;
    const ARRGAMEPLAY = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NERRORCODE => array(
            'name' => 'nErrorCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STQUALIFYINFO => array(
            'name' => 'stQualifyInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\QualifyInfo'
        ),
        self::STQUALIFYROLE => array(
            'name' => 'stQualifyRole',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\QualifyRole'
        ),
        self::SZPIC => array(
            'name' => 'szPic',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ARRGAMEPLAY => array(
            'name' => 'arrGamePlay',
            'repeated' => true,
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
        $this->values[self::NROLEID] = null;
        $this->values[self::STQUALIFYINFO] = null;
        $this->values[self::STQUALIFYROLE] = null;
        $this->values[self::SZPIC] = null;
        $this->values[self::ARRGAMEPLAY] = array();
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
     * Sets value of 'stQualifyInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\QualifyInfo $value Property value
     *
     * @return null
     */
    public function setStQualifyInfo(\Xnhd\Core\Pb\Sdo\QualifyInfo $value=null)
    {
        return $this->set(self::STQUALIFYINFO, $value);
    }

    /**
     * Returns value of 'stQualifyInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\QualifyInfo
     */
    public function getStQualifyInfo()
    {
        return $this->get(self::STQUALIFYINFO);
    }

    /**
     * Returns true if 'stQualifyInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStQualifyInfo()
    {
        return $this->get(self::STQUALIFYINFO) !== null;
    }

    /**
     * Sets value of 'stQualifyRole' property
     *
     * @param \Xnhd\Core\Pb\Sdo\QualifyRole $value Property value
     *
     * @return null
     */
    public function setStQualifyRole(\Xnhd\Core\Pb\Sdo\QualifyRole $value=null)
    {
        return $this->set(self::STQUALIFYROLE, $value);
    }

    /**
     * Returns value of 'stQualifyRole' property
     *
     * @return \Xnhd\Core\Pb\Sdo\QualifyRole
     */
    public function getStQualifyRole()
    {
        return $this->get(self::STQUALIFYROLE);
    }

    /**
     * Returns true if 'stQualifyRole' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStQualifyRole()
    {
        return $this->get(self::STQUALIFYROLE) !== null;
    }

    /**
     * Sets value of 'szPic' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzPic($value)
    {
        return $this->set(self::SZPIC, $value);
    }

    /**
     * Returns value of 'szPic' property
     *
     * @return string
     */
    public function getSzPic()
    {
        $value = $this->get(self::SZPIC);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szPic' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzPic()
    {
        return $this->get(self::SZPIC) !== null;
    }

    /**
     * Appends value to 'arrGamePlay' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrGamePlay($value)
    {
        return $this->append(self::ARRGAMEPLAY, $value);
    }

    /**
     * Clears 'arrGamePlay' list
     *
     * @return null
     */
    public function clearArrGamePlay()
    {
        return $this->clear(self::ARRGAMEPLAY);
    }

    /**
     * Returns 'arrGamePlay' list
     *
     * @return integer[]
     */
    public function getArrGamePlay()
    {
        return $this->get(self::ARRGAMEPLAY);
    }

    /**
     * Returns true if 'arrGamePlay' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrGamePlay()
    {
        return count($this->get(self::ARRGAMEPLAY)) !== 0;
    }

    /**
     * Returns 'arrGamePlay' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrGamePlayIterator()
    {
        return new \ArrayIterator($this->get(self::ARRGAMEPLAY));
    }

    /**
     * Returns element from 'arrGamePlay' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrGamePlayAt($offset)
    {
        return $this->get(self::ARRGAMEPLAY, $offset);
    }

    /**
     * Returns count of 'arrGamePlay' list
     *
     * @return int
     */
    public function getArrGamePlayCount()
    {
        return $this->count(self::ARRGAMEPLAY);
    }
}
}