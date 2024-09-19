<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSBeckoningReq message
 */
class RLSBeckoningReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NBECKROLEID = 2;
    const NISLIKE = 3;
    const ARRBECKLABELS = 4;
    const NSEXTYPE = 5;
    const NSELFLABELNUM = 6;
    const NOTHERLABELNUM = 7;
    const NSCORE = 8;
    const NMATCHSCORE = 9;
    const NONLINESCORE = 10;
    const NISCITY = 11;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBECKROLEID => array(
            'name' => 'nBeckRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NISLIKE => array(
            'name' => 'nIsLike',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRBECKLABELS => array(
            'name' => 'arrBeckLabels',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSEXTYPE => array(
            'name' => 'nSexType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSELFLABELNUM => array(
            'name' => 'nSelfLabelNum',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOTHERLABELNUM => array(
            'name' => 'nOtherLabelNum',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSCORE => array(
            'name' => 'nScore',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NMATCHSCORE => array(
            'name' => 'nMatchScore',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NONLINESCORE => array(
            'name' => 'nOnlineScore',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NISCITY => array(
            'name' => 'nIsCity',
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NBECKROLEID] = null;
        $this->values[self::NISLIKE] = null;
        $this->values[self::ARRBECKLABELS] = array();
        $this->values[self::NSEXTYPE] = null;
        $this->values[self::NSELFLABELNUM] = null;
        $this->values[self::NOTHERLABELNUM] = null;
        $this->values[self::NSCORE] = null;
        $this->values[self::NMATCHSCORE] = null;
        $this->values[self::NONLINESCORE] = null;
        $this->values[self::NISCITY] = null;
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
     * Sets value of 'nBeckRoleID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBeckRoleID($value)
    {
        return $this->set(self::NBECKROLEID, $value);
    }

    /**
     * Returns value of 'nBeckRoleID' property
     *
     * @return integer
     */
    public function getNBeckRoleID()
    {
        $value = $this->get(self::NBECKROLEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBeckRoleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBeckRoleID()
    {
        return $this->get(self::NBECKROLEID) !== null;
    }

    /**
     * Sets value of 'nIsLike' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNIsLike($value)
    {
        return $this->set(self::NISLIKE, $value);
    }

    /**
     * Returns value of 'nIsLike' property
     *
     * @return integer
     */
    public function getNIsLike()
    {
        $value = $this->get(self::NISLIKE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nIsLike' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNIsLike()
    {
        return $this->get(self::NISLIKE) !== null;
    }

    /**
     * Appends value to 'arrBeckLabels' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrBeckLabels($value)
    {
        return $this->append(self::ARRBECKLABELS, $value);
    }

    /**
     * Clears 'arrBeckLabels' list
     *
     * @return null
     */
    public function clearArrBeckLabels()
    {
        return $this->clear(self::ARRBECKLABELS);
    }

    /**
     * Returns 'arrBeckLabels' list
     *
     * @return integer[]
     */
    public function getArrBeckLabels()
    {
        return $this->get(self::ARRBECKLABELS);
    }

    /**
     * Returns true if 'arrBeckLabels' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrBeckLabels()
    {
        return count($this->get(self::ARRBECKLABELS)) !== 0;
    }

    /**
     * Returns 'arrBeckLabels' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrBeckLabelsIterator()
    {
        return new \ArrayIterator($this->get(self::ARRBECKLABELS));
    }

    /**
     * Returns element from 'arrBeckLabels' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrBeckLabelsAt($offset)
    {
        return $this->get(self::ARRBECKLABELS, $offset);
    }

    /**
     * Returns count of 'arrBeckLabels' list
     *
     * @return int
     */
    public function getArrBeckLabelsCount()
    {
        return $this->count(self::ARRBECKLABELS);
    }

    /**
     * Sets value of 'nSexType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSexType($value)
    {
        return $this->set(self::NSEXTYPE, $value);
    }

    /**
     * Returns value of 'nSexType' property
     *
     * @return integer
     */
    public function getNSexType()
    {
        $value = $this->get(self::NSEXTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSexType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSexType()
    {
        return $this->get(self::NSEXTYPE) !== null;
    }

    /**
     * Sets value of 'nSelfLabelNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSelfLabelNum($value)
    {
        return $this->set(self::NSELFLABELNUM, $value);
    }

    /**
     * Returns value of 'nSelfLabelNum' property
     *
     * @return integer
     */
    public function getNSelfLabelNum()
    {
        $value = $this->get(self::NSELFLABELNUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSelfLabelNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSelfLabelNum()
    {
        return $this->get(self::NSELFLABELNUM) !== null;
    }

    /**
     * Sets value of 'nOtherLabelNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOtherLabelNum($value)
    {
        return $this->set(self::NOTHERLABELNUM, $value);
    }

    /**
     * Returns value of 'nOtherLabelNum' property
     *
     * @return integer
     */
    public function getNOtherLabelNum()
    {
        $value = $this->get(self::NOTHERLABELNUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOtherLabelNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOtherLabelNum()
    {
        return $this->get(self::NOTHERLABELNUM) !== null;
    }

    /**
     * Sets value of 'nScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNScore($value)
    {
        return $this->set(self::NSCORE, $value);
    }

    /**
     * Returns value of 'nScore' property
     *
     * @return integer
     */
    public function getNScore()
    {
        $value = $this->get(self::NSCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNScore()
    {
        return $this->get(self::NSCORE) !== null;
    }

    /**
     * Sets value of 'nMatchScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMatchScore($value)
    {
        return $this->set(self::NMATCHSCORE, $value);
    }

    /**
     * Returns value of 'nMatchScore' property
     *
     * @return integer
     */
    public function getNMatchScore()
    {
        $value = $this->get(self::NMATCHSCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMatchScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMatchScore()
    {
        return $this->get(self::NMATCHSCORE) !== null;
    }

    /**
     * Sets value of 'nOnlineScore' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNOnlineScore($value)
    {
        return $this->set(self::NONLINESCORE, $value);
    }

    /**
     * Returns value of 'nOnlineScore' property
     *
     * @return integer
     */
    public function getNOnlineScore()
    {
        $value = $this->get(self::NONLINESCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nOnlineScore' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNOnlineScore()
    {
        return $this->get(self::NONLINESCORE) !== null;
    }

    /**
     * Sets value of 'nIsCity' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNIsCity($value)
    {
        return $this->set(self::NISCITY, $value);
    }

    /**
     * Returns value of 'nIsCity' property
     *
     * @return integer
     */
    public function getNIsCity()
    {
        $value = $this->get(self::NISCITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nIsCity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNIsCity()
    {
        return $this->get(self::NISCITY) !== null;
    }
}
}