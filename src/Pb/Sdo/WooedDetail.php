<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * WooedDetail message
 */
class WooedDetail extends \ProtobufMessage
{
    /* Field index constants */
    const NWOOROLEINFO = 1;
    const NLETTERSTYLE = 2;
    const SZCONTENT = 3;
    const NITEMID = 4;
    const NITEMCOUNT = 5;
    const NTIME = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NWOOROLEINFO => array(
            'name' => 'nWooRoleInfo',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\RolePublicInfo'
        ),
        self::NLETTERSTYLE => array(
            'name' => 'nLetterStyle',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZCONTENT => array(
            'name' => 'szContent',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NITEMID => array(
            'name' => 'nItemID',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NITEMCOUNT => array(
            'name' => 'nItemCount',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NTIME => array(
            'name' => 'nTime',
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
        $this->values[self::NWOOROLEINFO] = null;
        $this->values[self::NLETTERSTYLE] = null;
        $this->values[self::SZCONTENT] = null;
        $this->values[self::NITEMID] = array();
        $this->values[self::NITEMCOUNT] = array();
        $this->values[self::NTIME] = null;
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
     * Sets value of 'nWooRoleInfo' property
     *
     * @param \Xnhd\Core\Pb\Sdo\RolePublicInfo $value Property value
     *
     * @return null
     */
    public function setNWooRoleInfo(\Xnhd\Core\Pb\Sdo\RolePublicInfo $value=null)
    {
        return $this->set(self::NWOOROLEINFO, $value);
    }

    /**
     * Returns value of 'nWooRoleInfo' property
     *
     * @return \Xnhd\Core\Pb\Sdo\RolePublicInfo
     */
    public function getNWooRoleInfo()
    {
        return $this->get(self::NWOOROLEINFO);
    }

    /**
     * Returns true if 'nWooRoleInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNWooRoleInfo()
    {
        return $this->get(self::NWOOROLEINFO) !== null;
    }

    /**
     * Sets value of 'nLetterStyle' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNLetterStyle($value)
    {
        return $this->set(self::NLETTERSTYLE, $value);
    }

    /**
     * Returns value of 'nLetterStyle' property
     *
     * @return integer
     */
    public function getNLetterStyle()
    {
        $value = $this->get(self::NLETTERSTYLE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nLetterStyle' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNLetterStyle()
    {
        return $this->get(self::NLETTERSTYLE) !== null;
    }

    /**
     * Sets value of 'szContent' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzContent($value)
    {
        return $this->set(self::SZCONTENT, $value);
    }

    /**
     * Returns value of 'szContent' property
     *
     * @return string
     */
    public function getSzContent()
    {
        $value = $this->get(self::SZCONTENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szContent' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzContent()
    {
        return $this->get(self::SZCONTENT) !== null;
    }

    /**
     * Appends value to 'nItemID' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendNItemID($value)
    {
        return $this->append(self::NITEMID, $value);
    }

    /**
     * Clears 'nItemID' list
     *
     * @return null
     */
    public function clearNItemID()
    {
        return $this->clear(self::NITEMID);
    }

    /**
     * Returns 'nItemID' list
     *
     * @return integer[]
     */
    public function getNItemID()
    {
        return $this->get(self::NITEMID);
    }

    /**
     * Returns true if 'nItemID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNItemID()
    {
        return count($this->get(self::NITEMID)) !== 0;
    }

    /**
     * Returns 'nItemID' iterator
     *
     * @return \ArrayIterator
     */
    public function getNItemIDIterator()
    {
        return new \ArrayIterator($this->get(self::NITEMID));
    }

    /**
     * Returns element from 'nItemID' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getNItemIDAt($offset)
    {
        return $this->get(self::NITEMID, $offset);
    }

    /**
     * Returns count of 'nItemID' list
     *
     * @return int
     */
    public function getNItemIDCount()
    {
        return $this->count(self::NITEMID);
    }

    /**
     * Appends value to 'nItemCount' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendNItemCount($value)
    {
        return $this->append(self::NITEMCOUNT, $value);
    }

    /**
     * Clears 'nItemCount' list
     *
     * @return null
     */
    public function clearNItemCount()
    {
        return $this->clear(self::NITEMCOUNT);
    }

    /**
     * Returns 'nItemCount' list
     *
     * @return integer[]
     */
    public function getNItemCount()
    {
        return $this->get(self::NITEMCOUNT);
    }

    /**
     * Returns true if 'nItemCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNItemCount()
    {
        return count($this->get(self::NITEMCOUNT)) !== 0;
    }

    /**
     * Returns 'nItemCount' iterator
     *
     * @return \ArrayIterator
     */
    public function getNItemCountIterator()
    {
        return new \ArrayIterator($this->get(self::NITEMCOUNT));
    }

    /**
     * Returns element from 'nItemCount' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getNItemCountAt($offset)
    {
        return $this->get(self::NITEMCOUNT, $offset);
    }

    /**
     * Returns count of 'nItemCount' list
     *
     * @return int
     */
    public function getNItemCountCount()
    {
        return $this->count(self::NITEMCOUNT);
    }

    /**
     * Sets value of 'nTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNTime($value)
    {
        return $this->set(self::NTIME, $value);
    }

    /**
     * Returns value of 'nTime' property
     *
     * @return integer
     */
    public function getNTime()
    {
        $value = $this->get(self::NTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNTime()
    {
        return $this->get(self::NTIME) !== null;
    }
}
}