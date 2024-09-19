<?php
/**
 * Auto generated from playerdbserver.proto at 2021-12-03 06:53:21
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * PDBUpdateRolePersonReq message
 */
class PDBUpdateRolePersonReq extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const NROLEPERSONTYPE = 2;
    const GENDER = 3;
    const SZROLENAME = 4;
    const NBIRTHDAY = 5;
    const NCITY = 6;
    const SZVOICE = 7;
    const SZWORD = 8;
    const STHEADPIC = 9;
    const NFACESLOT = 10;
    const NSETTING = 11;
    const NNAMERGB = 12;
    const ARRMYLABEL = 13;
    const ARRFAVLABEL = 14;
    const TIMETICK = 18;
    const STRTOKEN = 20;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NROLEPERSONTYPE => array(
            'name' => 'nRolePersonType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GENDER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Gender::enmGender_Unknown,
            'name' => 'gender',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZROLENAME => array(
            'name' => 'szRoleName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        self::SZWORD => array(
            'name' => 'szWord',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STHEADPIC => array(
            'name' => 'stHeadPic',
            'required' => false,
            'type' => '\Xnhd\Core\Pb\Sdo\PicInfo'
        ),
        self::NFACESLOT => array(
            'name' => 'nFaceSlot',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSETTING => array(
            'name' => 'nSetting',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NNAMERGB => array(
            'name' => 'nNameRGB',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        self::TIMETICK => array(
            'name' => 'timetick',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STRTOKEN => array(
            'name' => 'strtoken',
            'repeated' => true,
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
        $this->values[self::NROLEPERSONTYPE] = null;
        $this->values[self::GENDER] = self::$fields[self::GENDER]['default'];
        $this->values[self::SZROLENAME] = null;
        $this->values[self::NBIRTHDAY] = null;
        $this->values[self::NCITY] = null;
        $this->values[self::SZVOICE] = null;
        $this->values[self::SZWORD] = null;
        $this->values[self::STHEADPIC] = null;
        $this->values[self::NFACESLOT] = null;
        $this->values[self::NSETTING] = null;
        $this->values[self::NNAMERGB] = null;
        $this->values[self::ARRMYLABEL] = array();
        $this->values[self::ARRFAVLABEL] = array();
        $this->values[self::TIMETICK] = null;
        $this->values[self::STRTOKEN] = array();
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
     * Sets value of 'nRolePersonType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNRolePersonType($value)
    {
        return $this->set(self::NROLEPERSONTYPE, $value);
    }

    /**
     * Returns value of 'nRolePersonType' property
     *
     * @return integer
     */
    public function getNRolePersonType()
    {
        $value = $this->get(self::NROLEPERSONTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nRolePersonType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNRolePersonType()
    {
        return $this->get(self::NROLEPERSONTYPE) !== null;
    }

    /**
     * Sets value of 'gender' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGender($value)
    {
        return $this->set(self::GENDER, $value);
    }

    /**
     * Returns value of 'gender' property
     *
     * @return integer
     */
    public function getGender()
    {
        $value = $this->get(self::GENDER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'gender' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGender()
    {
        return $this->get(self::GENDER) !== null;
    }

    /**
     * Sets value of 'szRoleName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzRoleName($value)
    {
        return $this->set(self::SZROLENAME, $value);
    }

    /**
     * Returns value of 'szRoleName' property
     *
     * @return string
     */
    public function getSzRoleName()
    {
        $value = $this->get(self::SZROLENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szRoleName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzRoleName()
    {
        return $this->get(self::SZROLENAME) !== null;
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
     * Sets value of 'szWord' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzWord($value)
    {
        return $this->set(self::SZWORD, $value);
    }

    /**
     * Returns value of 'szWord' property
     *
     * @return string
     */
    public function getSzWord()
    {
        $value = $this->get(self::SZWORD);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szWord' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzWord()
    {
        return $this->get(self::SZWORD) !== null;
    }

    /**
     * Sets value of 'stHeadPic' property
     *
     * @param \Xnhd\Core\Pb\Sdo\PicInfo $value Property value
     *
     * @return null
     */
    public function setStHeadPic(\Xnhd\Core\Pb\Sdo\PicInfo $value=null)
    {
        return $this->set(self::STHEADPIC, $value);
    }

    /**
     * Returns value of 'stHeadPic' property
     *
     * @return \Xnhd\Core\Pb\Sdo\PicInfo
     */
    public function getStHeadPic()
    {
        return $this->get(self::STHEADPIC);
    }

    /**
     * Returns true if 'stHeadPic' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStHeadPic()
    {
        return $this->get(self::STHEADPIC) !== null;
    }

    /**
     * Sets value of 'nFaceSlot' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNFaceSlot($value)
    {
        return $this->set(self::NFACESLOT, $value);
    }

    /**
     * Returns value of 'nFaceSlot' property
     *
     * @return integer
     */
    public function getNFaceSlot()
    {
        $value = $this->get(self::NFACESLOT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nFaceSlot' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNFaceSlot()
    {
        return $this->get(self::NFACESLOT) !== null;
    }

    /**
     * Sets value of 'nSetting' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSetting($value)
    {
        return $this->set(self::NSETTING, $value);
    }

    /**
     * Returns value of 'nSetting' property
     *
     * @return integer
     */
    public function getNSetting()
    {
        $value = $this->get(self::NSETTING);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSetting' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSetting()
    {
        return $this->get(self::NSETTING) !== null;
    }

    /**
     * Sets value of 'nNameRGB' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNNameRGB($value)
    {
        return $this->set(self::NNAMERGB, $value);
    }

    /**
     * Returns value of 'nNameRGB' property
     *
     * @return integer
     */
    public function getNNameRGB()
    {
        $value = $this->get(self::NNAMERGB);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nNameRGB' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNNameRGB()
    {
        return $this->get(self::NNAMERGB) !== null;
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
     * Sets value of 'timetick' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimetick($value)
    {
        return $this->set(self::TIMETICK, $value);
    }

    /**
     * Returns value of 'timetick' property
     *
     * @return integer
     */
    public function getTimetick()
    {
        $value = $this->get(self::TIMETICK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'timetick' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTimetick()
    {
        return $this->get(self::TIMETICK) !== null;
    }

    /**
     * Appends value to 'strtoken' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendStrtoken($value)
    {
        return $this->append(self::STRTOKEN, $value);
    }

    /**
     * Clears 'strtoken' list
     *
     * @return null
     */
    public function clearStrtoken()
    {
        return $this->clear(self::STRTOKEN);
    }

    /**
     * Returns 'strtoken' list
     *
     * @return string[]
     */
    public function getStrtoken()
    {
        return $this->get(self::STRTOKEN);
    }

    /**
     * Returns true if 'strtoken' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStrtoken()
    {
        return count($this->get(self::STRTOKEN)) !== 0;
    }

    /**
     * Returns 'strtoken' iterator
     *
     * @return \ArrayIterator
     */
    public function getStrtokenIterator()
    {
        return new \ArrayIterator($this->get(self::STRTOKEN));
    }

    /**
     * Returns element from 'strtoken' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getStrtokenAt($offset)
    {
        return $this->get(self::STRTOKEN, $offset);
    }

    /**
     * Returns count of 'strtoken' list
     *
     * @return int
     */
    public function getStrtokenCount()
    {
        return $this->count(self::STRTOKEN);
    }
}
}