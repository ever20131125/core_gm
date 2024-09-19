<?php
/**
 * Auto generated from event.proto at 2023-02-13 12:39:14
 */

namespace Xnhd\Core\Pb\Sdo {
/**
 * GMUpdateFileStateEvent message
 */
class GMUpdateFileStateEvent extends \ProtobufMessage
{
    /* Field index constants */
    const NROLEID = 1;
    const SOURCE = 2;
    const SZFILEID = 3;
    const FILESTATE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NROLEID => array(
            'name' => 'nRoleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCE => array(
            'default' => \Xnhd\Core\Pb\Sdo\SourceChannel::enmSourceChannel_None,
            'name' => 'source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SZFILEID => array(
            'name' => 'szFileID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FILESTATE => array(
            'default' => \Xnhd\Core\Pb\Sdo\FileState::enmFileState_Normal,
            'name' => 'fileState',
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
        $this->values[self::SOURCE] = self::$fields[self::SOURCE]['default'];
        $this->values[self::SZFILEID] = null;
        $this->values[self::FILESTATE] = self::$fields[self::FILESTATE]['default'];
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
     * Sets value of 'source' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSource($value)
    {
        return $this->set(self::SOURCE, $value);
    }

    /**
     * Returns value of 'source' property
     *
     * @return integer
     */
    public function getSource()
    {
        $value = $this->get(self::SOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'source' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSource()
    {
        return $this->get(self::SOURCE) !== null;
    }

    /**
     * Sets value of 'szFileID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSzFileID($value)
    {
        return $this->set(self::SZFILEID, $value);
    }

    /**
     * Returns value of 'szFileID' property
     *
     * @return string
     */
    public function getSzFileID()
    {
        $value = $this->get(self::SZFILEID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'szFileID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSzFileID()
    {
        return $this->get(self::SZFILEID) !== null;
    }

    /**
     * Sets value of 'fileState' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFileState($value)
    {
        return $this->set(self::FILESTATE, $value);
    }

    /**
     * Returns value of 'fileState' property
     *
     * @return integer
     */
    public function getFileState()
    {
        $value = $this->get(self::FILESTATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'fileState' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFileState()
    {
        return $this->get(self::FILESTATE) !== null;
    }
}
}