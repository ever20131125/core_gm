<?php
/**
 * Auto generated from relationserver.proto at 2023-02-13 12:39:19
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * RLSBeckoningInfoResp message
 */
class RLSBeckoningInfoResp extends \ProtobufMessage
{
    /* Field index constants */
    const NERRORCODE = 1;
    const NROLEID = 2;
    const NMATCHGENDER = 3;
    const NSANMECITY = 4;
    const SZWORD = 5;
    const ARRAVATAR = 6;
    const NNEEDEDIT = 7;
    const ARRMYLABEL = 8;
    const ARRFAVLABEL = 9;
    const SZVOICE = 10;

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
        self::NMATCHGENDER => array(
            'default' => \Xnhd\Core\Pb\Sdo\Gender::enmGender_Unknown,
            'name' => 'nMatchgender',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NSANMECITY => array(
            'name' => 'nSanmeCity',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZWORD => array(
            'name' => 'szWord',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ARRAVATAR => array(
            'name' => 'arrAvatar',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NNEEDEDIT => array(
            'name' => 'nNeedEdit',
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
        $this->values[self::NERRORCODE] = null;
        $this->values[self::NROLEID] = null;
        $this->values[self::NMATCHGENDER] = self::$fields[self::NMATCHGENDER]['default'];
        $this->values[self::NSANMECITY] = null;
        $this->values[self::SZWORD] = null;
        $this->values[self::ARRAVATAR] = array();
        $this->values[self::NNEEDEDIT] = null;
        $this->values[self::ARRMYLABEL] = array();
        $this->values[self::ARRFAVLABEL] = array();
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
     * Sets value of 'nMatchgender' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNMatchgender($value)
    {
        return $this->set(self::NMATCHGENDER, $value);
    }

    /**
     * Returns value of 'nMatchgender' property
     *
     * @return integer
     */
    public function getNMatchgender()
    {
        $value = $this->get(self::NMATCHGENDER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nMatchgender' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNMatchgender()
    {
        return $this->get(self::NMATCHGENDER) !== null;
    }

    /**
     * Sets value of 'nSanmeCity' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNSanmeCity($value)
    {
        return $this->set(self::NSANMECITY, $value);
    }

    /**
     * Returns value of 'nSanmeCity' property
     *
     * @return integer
     */
    public function getNSanmeCity()
    {
        $value = $this->get(self::NSANMECITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nSanmeCity' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNSanmeCity()
    {
        return $this->get(self::NSANMECITY) !== null;
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
     * Sets value of 'nNeedEdit' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNNeedEdit($value)
    {
        return $this->set(self::NNEEDEDIT, $value);
    }

    /**
     * Returns value of 'nNeedEdit' property
     *
     * @return integer
     */
    public function getNNeedEdit()
    {
        $value = $this->get(self::NNEEDEDIT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nNeedEdit' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNNeedEdit()
    {
        return $this->get(self::NNEEDEDIT) !== null;
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