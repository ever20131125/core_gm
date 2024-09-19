<?php
/**
 * Auto generated from complex.proto at 2023-02-13 12:39:22
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RolePersonInfo message
 */
class RolePersonInfo extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NBIRTHDAY = 2;
    const NCITY = 3;
    const SZVOICE = 4;
    const SZWORDS = 5;
    const ARRMYLABEL = 6;
    const ARRFAVLABEL = 7;
    const ARRHEADPIC = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NBIRTHDAY => array(
            'name' => 'nBirthday',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NCITY => array(
            'name' => 'nCity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZVOICE => array(
            'name' => 'szVoice',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::NROLEID] = null;
        $this->values[self::NBIRTHDAY] = null;
        $this->values[self::NCITY] = null;
        $this->values[self::SZVOICE] = null;
        $this->values[self::SZWORDS] = null;
        $this->values[self::ARRMYLABEL] = array();
        $this->values[self::ARRFAVLABEL] = array();
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
     * Sets value of 'nBirthday' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNBirthday($value)
    {
        return $this->set(self::NBIRTHDAY, $value);
    }

    /**
     * Returns value of 'nBirthday' property
     *
     * @return integer
     */
    public function getNBirthday()
    {
        $value = $this->get(self::NBIRTHDAY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nBirthday' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNBirthday()
    {
        return $this->get(self::NBIRTHDAY) !== null;
    }

    /**
     * Sets value of 'nCity' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNCity($value)
    {
        return $this->set(self::NCITY, $value);
    }

    /**
     * Returns value of 'nCity' property
     *
     * @return integer
     */
    public function getNCity()
    {
        $value = $this->get(self::NCITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nCity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNCity()
    {
        return $this->get(self::NCITY) !== null;
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