<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RoleBeckoningInfo message
 */
class RoleBeckoningInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const ARRAVATAR = 2;
    const SZWORDS = 3;
    const ARRMYLABEL = 4;
    const ARRFAVLABEL = 5;
    const NSEXTYPE = 6;
    const NSELFLABELNUM = 7;
    const NOTHERLABELNUM = 8;
    const NSCORE = 9;
    const NMATCHSCORE = 10;
    const NONLINESCORE = 11;
    const NISCITY = 12;
    const SZVOICE = 13;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRAVATAR => array(
            'name' => 'arrAvatar',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZWORDS => array(
            'name' => 'szWords',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ARRMYLABEL => array(
            'name' => 'arrMyLabel',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARRFAVLABEL => array(
            'name' => 'arrFavLabel',
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
        self::SZVOICE => array(
            'name' => 'szVoice',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::ARRAVATAR] = array();
        $this->values[self::SZWORDS] = null;
        $this->values[self::ARRMYLABEL] = array();
        $this->values[self::ARRFAVLABEL] = array();
        $this->values[self::NSEXTYPE] = null;
        $this->values[self::NSELFLABELNUM] = null;
        $this->values[self::NOTHERLABELNUM] = null;
        $this->values[self::NSCORE] = null;
        $this->values[self::NMATCHSCORE] = null;
        $this->values[self::NONLINESCORE] = null;
        $this->values[self::NISCITY] = null;
        $this->values[self::SZVOICE] = null;
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
     * Appends value to 'arrAvatar' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrAvatar($value)
    {
        return $this->append(self::ARRAVATAR, $value);
    }

    /**
     * Clears 'arrAvatar' list
     *
     * @return null
     */
    public function clearArrAvatar()
    {
        return $this->clear(self::ARRAVATAR);
    }

    /**
     * Returns 'arrAvatar' list
     *
     * @return integer[]
     */
    public function getArrAvatar()
    {
        return $this->get(self::ARRAVATAR);
    }

    /**
     * Returns true if 'arrAvatar' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrAvatar()
    {
        return count($this->get(self::ARRAVATAR)) !== 0;
    }

    /**
     * Returns 'arrAvatar' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrAvatarIterator()
    {
        return new \ArrayIterator($this->get(self::ARRAVATAR));
    }

    /**
     * Returns element from 'arrAvatar' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrAvatarAt($offset)
    {
        return $this->get(self::ARRAVATAR, $offset);
    }

    /**
     * Returns count of 'arrAvatar' list
     *
     * @return int
     */
    public function getArrAvatarCount()
    {
        return $this->count(self::ARRAVATAR);
    }

    /**
     * Sets value of 'szWords' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzWords($value)
    {
        return $this->set(self::SZWORDS, $value);
    }

    /**
     * Returns value of 'szWords' property
     *
     * @return string
     */
    public function getSzWords()
    {
        $value = $this->get(self::SZWORDS);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szWords' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzWords()
    {
        return $this->get(self::SZWORDS) !== null;
    }

    /**
     * Appends value to 'arrMyLabel' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrMyLabel($value)
    {
        return $this->append(self::ARRMYLABEL, $value);
    }

    /**
     * Clears 'arrMyLabel' list
     *
     * @return null
     */
    public function clearArrMyLabel()
    {
        return $this->clear(self::ARRMYLABEL);
    }

    /**
     * Returns 'arrMyLabel' list
     *
     * @return integer[]
     */
    public function getArrMyLabel()
    {
        return $this->get(self::ARRMYLABEL);
    }

    /**
     * Returns true if 'arrMyLabel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrMyLabel()
    {
        return count($this->get(self::ARRMYLABEL)) !== 0;
    }

    /**
     * Returns 'arrMyLabel' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrMyLabelIterator()
    {
        return new \ArrayIterator($this->get(self::ARRMYLABEL));
    }

    /**
     * Returns element from 'arrMyLabel' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrMyLabelAt($offset)
    {
        return $this->get(self::ARRMYLABEL, $offset);
    }

    /**
     * Returns count of 'arrMyLabel' list
     *
     * @return int
     */
    public function getArrMyLabelCount()
    {
        return $this->count(self::ARRMYLABEL);
    }

    /**
     * Appends value to 'arrFavLabel' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendArrFavLabel($value)
    {
        return $this->append(self::ARRFAVLABEL, $value);
    }

    /**
     * Clears 'arrFavLabel' list
     *
     * @return null
     */
    public function clearArrFavLabel()
    {
        return $this->clear(self::ARRFAVLABEL);
    }

    /**
     * Returns 'arrFavLabel' list
     *
     * @return integer[]
     */
    public function getArrFavLabel()
    {
        return $this->get(self::ARRFAVLABEL);
    }

    /**
     * Returns true if 'arrFavLabel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasArrFavLabel()
    {
        return count($this->get(self::ARRFAVLABEL)) !== 0;
    }

    /**
     * Returns 'arrFavLabel' iterator
     *
     * @return \ArrayIterator
     */
    public function getArrFavLabelIterator()
    {
        return new \ArrayIterator($this->get(self::ARRFAVLABEL));
    }

    /**
     * Returns element from 'arrFavLabel' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getArrFavLabelAt($offset)
    {
        return $this->get(self::ARRFAVLABEL, $offset);
    }

    /**
     * Returns count of 'arrFavLabel' list
     *
     * @return int
     */
    public function getArrFavLabelCount()
    {
        return $this->count(self::ARRFAVLABEL);
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

    /**
     * Sets value of 'szVoice' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzVoice($value)
    {
        return $this->set(self::SZVOICE, $value);
    }

    /**
     * Returns value of 'szVoice' property
     *
     * @return string
     */
    public function getSzVoice()
    {
        $value = $this->get(self::SZVOICE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szVoice' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzVoice()
    {
        return $this->get(self::SZVOICE) !== null;
    }
}
}