<?php
/**
 * Auto generated from taskserver.proto at 2023-02-13 12:39:17
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * TASMyWorkInfoNoti message
 */
class TASMyWorkInfoNoti extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const STALBUMINFO = 2;
    const STWORKINFO = 3;
    const STBESTINFO = 4;
    const ARRITEMBASE = 5;
    const NNEXTSTAGE = 6;
    const BFIRSTPASS = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STALBUMINFO => array(
            'name' => 'stAlbumInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\AlbumInfo'
        ),
        self::STWORKINFO => array(
            'name' => 'stWorkInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\WorkDetailInfo'
        ),
        self::STBESTINFO => array(
            'name' => 'stBestInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\WorkDetailInfo'
        ),
        self::ARRITEMBASE => array(
            'name' => 'arrItemBase',
            'repeated' => true,
            'type' => '\Xnhd\Core\Pb\Sdo\ItemBase'
        ),
        self::NNEXTSTAGE => array(
            'name' => 'nNextStage',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BFIRSTPASS => array(
            'name' => 'bFirstPass',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::NROLEID] = null;
        $this->values[self::STALBUMINFO] = null;
        $this->values[self::STWORKINFO] = null;
        $this->values[self::STBESTINFO] = null;
        $this->values[self::ARRITEMBASE] = array();
        $this->values[self::NNEXTSTAGE] = null;
        $this->values[self::BFIRSTPASS] = null;
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
     * Sets value of 'stAlbumInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\AlbumInfo $value Property value
     *
     * @return null
     */
    public function setStAlbumInfo(\Xnhd\Core\Pb\Sdo\AlbumInfo $value=null)
    {
        return $this->set(self::STALBUMINFO, $value);
    }

    /**
     * Returns value of 'stAlbumInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\AlbumInfo
     */
    public function getStAlbumInfo()
    {
        return $this->get(self::STALBUMINFO);
    }

    /**
     * Returns true if 'stAlbumInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStAlbumInfo()
    {
        return $this->get(self::STALBUMINFO) !== null;
    }

    /**
     * Sets value of 'stWorkInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\WorkDetailInfo $value Property value
     *
     * @return null
     */
    public function setStWorkInfo(\Xnhd\Core\Pb\Sdo\WorkDetailInfo $value=null)
    {
        return $this->set(self::STWORKINFO, $value);
    }

    /**
     * Returns value of 'stWorkInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\WorkDetailInfo
     */
    public function getStWorkInfo()
    {
        return $this->get(self::STWORKINFO);
    }

    /**
     * Returns true if 'stWorkInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStWorkInfo()
    {
        return $this->get(self::STWORKINFO) !== null;
    }

    /**
     * Sets value of 'stBestInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\WorkDetailInfo $value Property value
     *
     * @return null
     */
    public function setStBestInfo(\Xnhd\Core\Pb\Sdo\WorkDetailInfo $value=null)
    {
        return $this->set(self::STBESTINFO, $value);
    }

    /**
     * Returns value of 'stBestInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\WorkDetailInfo
     */
    public function getStBestInfo()
    {
        return $this->get(self::STBESTINFO);
    }

    /**
     * Returns true if 'stBestInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStBestInfo()
    {
        return $this->get(self::STBESTINFO) !== null;
    }

    /**
     * Appends value to 'arrItemBase' list
     *
     * @param \Xnhd\Core\Pb\Sdo\ItemBase $value Value to append
     *
     * @return null
     */
    public function appendArrItemBase(\Xnhd\Core\Pb\Sdo\ItemBase $value)
    {
        return $this->append(self::ARRITEMBASE, $value);
    }

    /**
     * Clears 'arrItemBase' list
     *
     * @return null
     */
    public function clearArrItemBase()
    {
        return $this->clear(self::ARRITEMBASE);
    }

    /**
     * Returns 'arrItemBase' list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase[]
     */
    public function getArrItemBase()
    {
        return $this->get(self::ARRITEMBASE);
    }

    /**
     * Returns true if 'arrItemBase' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrItemBase()
    {
        return count($this->get(self::ARRITEMBASE)) !== 0;
    }

    /**
     * Returns 'arrItemBase' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrItemBaseIterator()
    {
        return new \ArrayIterator($this->get(self::ARRITEMBASE));
    }

    /**
     * Returns element from 'arrItemBase' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Xnhd\Core\Pb\Sdo\ItemBase
     */
    public function getArrItemBaseAt($offset)
    {
        return $this->get(self::ARRITEMBASE, $offset);
    }

    /**
     * Returns count of 'arrItemBase' list
     *
     * @return int
     */
    public function getArrItemBaseCount()
    {
        return $this->count(self::ARRITEMBASE);
    }

    /**
     * Sets value of 'nNextStage' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNNextStage($value)
    {
        return $this->set(self::NNEXTSTAGE, $value);
    }

    /**
     * Returns value of 'nNextStage' property
     *
     * @return integer
     */
    public function getNNextStage()
    {
        $value = $this->get(self::NNEXTSTAGE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nNextStage' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNNextStage()
    {
        return $this->get(self::NNEXTSTAGE) !== null;
    }

    /**
     * Sets value of 'bFirstPass' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBFirstPass($value)
    {
        return $this->set(self::BFIRSTPASS, $value);
    }

    /**
     * Returns value of 'bFirstPass' property
     *
     * @return boolean
     */
    public function getBFirstPass()
    {
        $value = $this->get(self::BFIRSTPASS);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bFirstPass' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBFirstPass()
    {
        return $this->get(self::BFIRSTPASS) !== null;
    }
}
}